<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Mail\AppMail;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Transactions;
use App\Models\Notifications;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Withdrawal extends Component
{
    #[Rule('required', message: 'Please select payment method')]
    public $asset;

    #[Rule('required', message: 'Please Input amount')]
    #[Rule('min:3', message: 'Amount should be at least $100')]
    public $amount;

    #[Rule('required', message: 'Please Input Your receiving wallet address')]
    public $ewallet_address;

    public function withdraw()
    {
        $this->validate();

        $current_bal = Auth::user()->earnings_balance;
        $user_id = Auth::user()->id;
        $full_name = Auth::user()->last_name . ' ' . Auth::user()->first_name;

        if ($current_bal < $this->amount) {
            session()->flash('error', 'insufficient Earning Funds');
            return $this->redirect('/users/withdraw');
        }

        $result = Transactions::create([
            "user_id" => $user_id,
            "transaction_id" => Str::random(),
            "transaction_date" => date('Y-m-d H:i:s'),
            "transaction_status" => 1,
            "transaction_amount" => $this->amount,
            "transaction_category" => 2, // check config/app.php 
            "transaction_asset" => $this->asset,
            "transaction_ewallet_address" => $this->ewallet_address,
        ]);

        
        if ($result) {
            $new_balance =  $current_bal - $this->amount;

            User::where('id',"$user_id")->update([
                "earnings_balance" => "$new_balance"
            ]);

            $amount = $this->amount;
            session()->flash('success', 'Your withdrawal request was Submitted successfully');

            $this->redirect('/users/withdraw');

            // send notification
            Notifications::create([
                "user_id" => $user_id,
                "notifications_id" => Str::random(),
                "notifications_category" => "withdrawal Request",
                "notifications_message" => " Hello $full_name your withdrawal request of $$amount was submitted successfully on " . date('Y-M-d H:i') . ". Check your email for full details. Thanks for choosing us",
                "notifications_status" => "Active",
            ]);

            
            // send mail
            $app = config('app.name');
            $userEmail = Auth::user()->email;

            $subject = "Withdrawal Request Notification";


            $bodyUser = [
                "name" => $full_name,
                "title" => "Withdrawal Request",
                "message" => "Hello $full_name Your withdrawal request of $$amount was submitted successfully your account will be credited after confirmation .  
                <br>
                <br>
                <em>THANKS FOR TRADING WITH US</em>"
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "Customer Withdrawal Request",
                "message" => " Hello Admin a User by the name $full_name have successfully made a withdrawal Request of $$amount on ".date('Y-M-d H:i ').". Check his/her dashboard for further details;
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

            return $this->reset();
        }
        
        session()->flash('error', 'An error occurred please try again later or contact support team');
        return $this->redirect('/users/withdraw');
    }

    public function render()
    {
        return view('livewire.user.withdrawal');
    }
}
