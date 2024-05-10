<?php

namespace App\Livewire\User;

use Carbon\Carbon;
use App\Models\KYC;
use App\Models\User;
use App\Mail\AppMail;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Notifications;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SecuritySettings extends Component
{
    use WithFileUploads;

    #[Rule('required', message: "Select document")]
    public $document;

    #[Rule('image|max:1024')] // 1MB Max
    public $front_document;

    #[Rule('image|max:1024')] // 1MB Max
    public $back_document;

    #[Rule('required')]
    public $date_of_birth;

    public function kyc()
    {
        $this->validate();

        $parsedDate = Carbon::parse($this->date_of_birth);

        // Date that was 18 years ago from the current date
        $eighteenYearsAgo = Carbon::now()->subYears(18);

        if (!$parsedDate->lessThan($eighteenYearsAgo)) {
            session()->flash('error', 'Your should be at least 18 years old');
            return $this->redirect('/users/security-settings');
        }


        $user_id = Auth::user()->id;
        $full_name = Auth::user()->last_name . ' ' . Auth::user()->first_name;

        $front_document_path = $this->front_document->store('kyc', 'public');
        $back_document_path = $this->back_document->store('kyc', 'public');

        $result = KYC::create([
            "user_id" => $user_id,
            "kyc_id" => Str::random(),
            "kyc_date" => date('Y-m-d H:i:s'),
            "kyc_document" => $this->document,
            "kyc_proof_front" => $front_document_path,
            "kyc_proof_back" => $back_document_path,
            "kyc_status" => 1,
        ]);

        if ($result) {

            User::where("id",Auth::user()->id)->update([
                "verify_status" => 1,
            ]);

            session()->flash('success', 'Your KYC request was Submitted successfully');

            $this->redirect('/users/security-settings');

            // send notification
            Notifications::create([
                "user_id" => $user_id,
                "notifications_id" => Str::random(),
                "notifications_category" => "KYC Request",
                "notifications_message" => " Hello $full_name your KYC request was sent successfully",
                "notifications_status" => "Active",
            ]);

                        
            // send mail
            $app = config('app.name');
            $userEmail = Auth::user()->email;

            $subject = "KYC Request Notification";


            $bodyUser = [
                "name" => $full_name,
                "title" => "KYC Request",
                "message" => "Hello $full_name Your KYC request was sent successfully, please exercise patience for proper verification process takes place .  
                <br>
                <br>
                <em>THANKS FOR CHOOSING US</em>"
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "Customer KYC Request",
                "message" => " Hello Admin a User by the name $full_name have successfully made a KYC Request on ".date('Y-M-d H:i ').". Check his/her dashboard for further details;
                ",
            ];

            try {
                // user email
                Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));

                // Admin email
                Mail::to(config('app.Admin_email'))->send(new AppMail($subject, $bodyAdmin));
            } catch (\Throwable $th) {
                //throw $th;
            }

            return;
        }

        session()->flash('error', 'An error occurred please contact support or try again later');

        return $this->redirect('/users/security-settings');
    }
    public function render()
    {
        $user_data = Auth::user();

        $userObj = User::findOrFail($user_data->id);

        $kyc_data = $userObj->kyc()->latest()->first();

        return view('livewire.user.security-settings',[
            "kyc_data" => $kyc_data,
            "user_data" => $user_data,
        ]);
    }
}
