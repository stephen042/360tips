<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Mail\AppMail;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Notifications;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProfileSettings extends Component
{
    use WithFileUploads;

    public $user_data;

    public $current_password;

    public $password;

    public $password_confirmation;

    #[Rule('image|max:1024')] // 1MB Max
    public $profile_picture;

    public function delete_pic()
    {
        $user_data = Auth::user();

        $result = User::where("id", $user_data->id)->update([
            "profile_pic" => Null,
        ]);

        if ($result) {
            session()->flash('success', 'Change made successfully');

            return $this->redirect('/admin/profile-settings');
        }

        session()->flash('error', 'An error occurred try again letter');

        return $this->redirect('/admin/profile-settings');
    }

    public function update_profile_pic()
    {
        $this->validate();

        $user_data = Auth::user();

        $profile_picture_path = $this->profile_picture->store('profile', 'public');

        $result = User::where("id", $user_data->id)->update([
            "profile_pic" => $profile_picture_path,
        ]);
        
        if ($result) {
            session()->flash('success', 'Change made successfully');

            return $this->redirect('/admin/profile-settings');
        }

        session()->flash('error', 'An error occurred try again letter');

        return $this->redirect('/admin/profile-settings');
    }

    public function updatepassword()
    {
        $user_data = Auth::user();

        $validated = $this->validate([
            "current_password" => ["required"],
            'password' => ['required',  'confirmed', 'min:6'],
        ]);

        if (!Hash::check($this->current_password, $user_data->password)) {
            session()->flash('error', 'Current password mismatch');
            return redirect('/admin/profile-settings');
        }

        $result = User::where("id", $user_data->id)->update([
            "password" => Hash::make($this->password),
        ]);

        if ($result) {

            $user_id = $user_data->id;
            $full_name = $user_data->last_name . ' ' . $user_data->first_name;

            session()->flash('success', 'Password Changed successfully');

            $this->redirect('/admin/profile-settings');

            // send notification
            Notifications::create([
                "user_id" => $user_id,
                "notifications_id" => Str::random(),
                "notifications_category" => "Password Reset successful",
                "notifications_message" => " Hello $full_name your password reset was successful",
                "notifications_status" => "Active",
            ]);

            // send mail
            $app = config('app.name');
            $userEmail = Auth::user()->email;

            $subject = "Password Reset successful";


            $bodyUser = [
                "name" => $full_name,
                "title" => "Password Reset",
                "message" => "Hello $full_name Your Password reset was success if you did not take this action please write support through the website to secure your account <br>
                <br>
                THANKS FOR CHOOSING US"
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "Customer Deposit Request",
                "message" => " Hello Admin a User by the name $full_name have successfully reset his/her password",
            ];

            try {
                // user email
                Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));

                // Admin email
                Mail::to(config('app.Admin_email'))->send(new AppMail($subject, $bodyAdmin));
            } catch (\Throwable $th) {
                //throw $th;
            }

            return $this->reset();
        }
    }

    public function render()
    {
        return view('livewire.admin.profile-settings');
    }
}
