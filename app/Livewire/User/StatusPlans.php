<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Mail\AppMail;
use Livewire\Component;
use App\Models\Status_plan;
use Illuminate\Support\Str;
use App\Models\Notifications;
use App\Models\Plans_Transactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StatusPlans extends Component
{
    public function status_plans($id)
    {
        $details = Status_plan::where("id", "$id")->get()->first();

        $data = (object) $details;

        $user_data = Auth::user();

        $full_name = $user_data->last_name . ' ' . $user_data->first_name;

        if ($data->amount > $user_data->sub_balance) {
            session()->flash('error', 'insufficient Subscription Funds. Please fund your subscription wallet');
            return redirect('/users/status');
        }

        $userObj = User::findOrFail($user_data->id);

        $latest_plan = $userObj->plans_transactions()->where('plan_transaction_status', 1)->latest()->first();
        
        if ($latest_plan) {
            if ($data->amount < $latest_plan->plan_amount) {
                session()->flash('error', 'You can\'t go for a lower amount plan if a higher amount is still on. Go for a bigger amount for better experience');
                return redirect('/users/status');
            } elseif ($data->name == $latest_plan->plan_name && $latest_plan->plan_transaction_status == 1) {
                session()->flash('error', 'You are running on this plan currently. GO FOR A HIGHER PLAN');
                return redirect('/users/status');
            }
        }



        $result = Plans_Transactions::create([
            "user_id" => $user_data->id,
            "plan_category" => 3,
            "plan_name" => $data->name,
            "plan_amount" => $data->amount,
            "plan_duration" => $data->duration,
            "plan_transaction_status" => 1,
        ]);

        if ($result) {

            Plans_Transactions::where("id", $latest_plan->id)
                ->update([
                    "plan_transaction_status" => 2,
                ]);

            $new_subBalance = $user_data->sub_balance - $data->amount;

            User::where("id", "$user_data->id")->update([
                "sub_balance" => $new_subBalance,
                "account_status" => strtoupper($data->name),
            ]);

            session()->flash('success', 'Your Status Plan Purchase of $' . $data->amount . ' was successful');

            redirect('/users/status');

            // send notification
            Notifications::create([
                "user_id" => $user_data->id,
                "notifications_id" => Str::random(),
                "notifications_category" => "Status Plan Purchase",
                "notifications_message" => " Your Status Plan Purchase of $$data->amount was successful. Thanks for choosing us",
                "notifications_status" => "Active",
            ]);


            // send mail
            $app = config('app.name');
            $userEmail = $user_data->email;

            $subject = "Status Plan Purchase";


            $bodyUser = [
                "name" => $full_name,
                "title" => "Status Plan Purchase",
                "message" => "Hello $full_name Your Status Plan purchase of $$data->amount was successful. Plan Duration: $data->duration .  
                <br>
                <br>
                <em>THANKS FOR TRADING WITH US</em>"
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "Customer Deposit Request",
                "message" => " Hello Admin a User by the name $full_name have successfully made an Status Plan purchase of $$data->amount on " . date('Y-M-d H:i ') . ". Plan Duration: $data->duration .  Check his/her dashboard for further details;
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
        return redirect('/users/status');
    }

    public function render()
    {
        return view('livewire.user.status-plans', [
            "status_plans" => Status_plan::all(),
        ]);
    }
}
