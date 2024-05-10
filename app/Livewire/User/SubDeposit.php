<?php

namespace App\Livewire\User;

use App\Mail\AppMail;
use App\Models\Admin_wallets;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Transactions;
use App\Models\Notifications;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SubDeposit extends Component
{
    use WithFileUploads;

    #[Rule('required', message: 'Please select a payment method')]
    public $asset;

    public $modalName;

    #[Rule('required', message: 'Please put Amount')]
    #[Rule('min:3', message: 'Amount should not be less than $100')]
    public $amount;


    public function updated()
    {

        if ($this->asset == "Bitcoin") {
            return $this->modalName = "#bitcoin";
        } elseif ($this->asset == "USDT Trc20") {
            return $this->modalName = "#usdt";
        } elseif ($this->asset == "Cash App") {
            return $this->modalName = "#cashapp";
        } elseif ($this->asset == "Paypal") {
            return $this->modalName = "#paypal";
        } elseif ($this->asset == "Zelle") {
            return $this->modalName = "#zelle";
        }
    }

    #[Validate('image|max:3000')] // 3MB Max
    public $proof;

    public function sub_deposit()
    {


        $user_id = Auth::user()->id;
        $full_name = Auth::user()->last_name . ' ' . Auth::user()->first_name;

        $proofPath = $this->proof->store('proof', 'public');

        $this->validate();

        $result = Transactions::create([
            "user_id" => $user_id,
            "transaction_id" => Str::random(),
            "transaction_date" => date('Y-m-d H:i:s'),
            "transaction_status" => 1,
            "transaction_amount" => $this->amount,
            "transaction_category" => 3, // check config/app.php 
            "transaction_proof" => $proofPath,
            "transaction_ewallet" => $this->asset,
        ]);


        if ($result) {

            $amount = $this->amount;
            session()->flash('success', 'Your Subscription Wallet account Deposit request was Submitted successfully');

            $this->redirect('/users/sub_deposit');

            // send notification
            Notifications::create([
                "user_id" => $user_id,
                "notifications_id" => Str::random(),
                "notifications_category" => "Subscription Wallet Deposit Request",
                "notifications_message" => " Hello $full_name your Subscription Wallet account deposit request of $$amount was submitted successfully on " . date('Y-M-d H:i') . ". Check your email for full details. Thanks for choosing us",
                "notifications_status" => "Active",
            ]);


            // send mail
            $app = config('app.name');
            $userEmail = Auth::user()->email;

            $subject = "Subscription Wallet Deposit Request Notification";


            $bodyUser = [
                "name" => $full_name,
                "title" => "Subscription Wallet Deposit Request",
                "message" => "Hello $full_name Your Subscription Wallet account Deposit request of $$amount was submitted successfully your account will be credited after confirmation .  
                <br>
                <br>
                <em>THANKS FOR TRADING WITH US</em>"
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "Customer Subscription Wallet Deposit Request",
                "message" => " Hello Admin a User by the name $full_name have successfully made a Subscription Wallet account Deposit Request of $$amount on " . date('Y-M-d H:i ') . ". Check his/her dashboard for further details;
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
        return $this->redirect('/users/sub_deposit');
    }


    public function render()
    {
        return view('livewire.user.sub-deposit', [
            "admin_wallet" => Admin_wallets::get()->first(),
        ]);
    }
}
