<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Mail\AppMail;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Signal_plans;
use App\Models\Notifications;
use App\Models\Plans_Transactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SignalPlans extends Component
{
    public function signal_plans($id)  {
        
        $details = Signal_plans::where("id", "$id")->get()->first();

        $data = (object) $details;

        $user_data = Auth::user();

        $full_name = $user_data->last_name . ' ' . $user_data->first_name;

        if ($data->amount > $user_data->sub_balance) {
            session()->flash('error', 'insufficient Subscription Funds. Please fund your subscription wallet');
            return redirect('/users/signal-plans');
        }

        $result = Plans_Transactions::create([
            "user_id" => $user_data->id,
            "plan_category" => 2,
            "plan_name" => $data->name,
            "plan_amount" => $data->amount,
            "plan_duration" => $data->duration,
            "plan_signal_strength" => $data->signal_strength,
            "plan_transaction_status" => 1,
        ]);

        if ($result) {

            $new_subBalance = $user_data->sub_balance - $data->amount ;

            User::where("id","$user_data->id")->update([
                "sub_balance" => $new_subBalance,
            ]);

            session()->flash('success', 'Your Signal Plan Purchase of $'.$data->amount.' was successful');

            redirect('/users/signal-plans');

            // send notification
            Notifications::create([
                "user_id" => $user_data->id,
                "notifications_id" => Str::random(),
                "notifications_category" => "Signal Plan Purchase",
                "notifications_message" => " Your Signal Plan Purchase of $$data->amount was successful. Thanks for choosing us",
                "notifications_status" => "Active",
            ]);

            
            // send mail
            $app = config('app.name');
            $userEmail = $user_data->email;

            $subject = "Signal Plan Purchase";


            $bodyUser = [
                "name" => $full_name,
                "title" => "Signal Plan Purchase",
                "message" => "Hello $full_name Your Signal Plan purchase of $$data->amount was successful. Plan Duration: $data->duration .  
                <br>
                <br>
                <em>THANKS FOR TRADING WITH US</em>"
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "Customer Deposit Request",
                "message" => " Hello Admin a User by the name $full_name have successfully made an Signal Plan purchase of $$data->amount on ".date('Y-M-d H:i ').". Plan Duration: $data->duration . Check his/her dashboard for further details;
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

        session()->flash('error', 'An error occurred please try again later or contact support team');
        return redirect('/users/signal-plans');

    }

    public function render()
    {
        return view('livewire.user.signal-plans', [
            "signal_plans" => Signal_plans::all(),
        ]);
    }
}
