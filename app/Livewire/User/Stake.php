<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Mail\AppMail;
use Livewire\Component;
use App\Models\Stock_Stake;
use Illuminate\Support\Str;
use App\Models\Notifications;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Stake extends Component
{
    #[Rule('required', message: 'Please Confirm Asset before staking')]
    public $asset;

    #[Rule('required', message: 'Please put Amount')]
    #[Rule('min:3', message: 'Amount should not be less than $100')]
    public $amount;

    #[Rule('required', message: 'Please Select duration')]
    public $duration;

    public function stake()
    {
        $this->validate();
        
        $current_bal = Auth::user()->balance;
        $user_id = Auth::user()->id;
        $full_name = Auth::user()->last_name . ' ' . Auth::user()->first_name;

        if ($current_bal < $this->amount) {
            session()->flash('error', 'insufficient Funds. Please fund your account');
            return $this->redirect('/users/stake');
        }

        $result = Stock_Stake::create([
            "user_id" => $user_id,
            "stock_stakes_id" => Str::random(),
            "stock_stakes_time" => date('Y-m-d H:i:s'),
            "stock_stakes_status" => 1,
            "stock_stakes_amount" => $this->amount,
            "stock_stakes_asset" => $this->asset,
            "stock_stakes_duration" => $this->duration,
        ]);

        if ($result) {

            $new_balance = $current_bal - $this->amount;

            User::where("id", Auth::user()->id)->update([
                "balance" => $new_balance,
            ]);

            session()->flash('success', 'Your stock staking Trade was initiated');

            $this->redirect('/users/stake');

            // send notification
            Notifications::create([
                "user_id" => $user_id,
                "notifications_id" => Str::random(),
                "notifications_category" => "Stock Stake Summary",
                "notifications_message" => " Hello $full_name your staking was executed successfully on " . date('Y-M-d H:i') . ". Check your email for full details. Thanks for choosing us",
                "notifications_status" => "Active",
            ]);

            // send mail
            $app = config('app.name');
            $userEmail = Auth::user()->email;

            $subject = "Stock Stake Summary";


            $bodyUser = [
                "name" => $full_name,
                "title" => "Stock Stake Summary",
                "message" => 'You have successfully Place a Staking trade in your '.$app.' account on : ' . date('Y-M-d H:i ') . '.
                    <br>
                    Details :
                    <br>
                    Asset : ' . $this->asset. '
                    <br>
                    Amount : $' . $this->amount . '
                    <br>
                    Duration : ' . $this->duration. '
                    <br>
                    <br>
                    <em>THANKS FOR TRADING WITH US</em>
                    '
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "Customer Stock Stake",
                "message" => " Hello Admin a User by the name $full_name have successfully made a Stock Stake trade on ".date('Y-M-d H:i ').". Check his/her dashboard for further details;
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

            $this->reset();

            return true;
        }

        session()->flash('error', 'An error occurred try again');

        return $this->redirect('/users/stake');

    }

    public function render()
    {
        return view('livewire.user.stake');
    }
}
