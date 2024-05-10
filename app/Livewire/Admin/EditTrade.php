<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Mail\AppMail;
use App\Models\Trades;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Notifications;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class EditTrade extends Component
{
    public $user;

    public $trade;

    public $profit;

    public $display = "d-none";

    public $display_loss = "d-none";

    public $display_profit = "d-none";

    #[Rule('required', message: 'Please choose if the trade if a profit or loss trade')]
    public $change;

    public function updatedChange()
    {
        if ($this->change == "profit") {
            $this->display = "";
            $this->display_profit = "";
            $this->display_loss = "d-none";
        } elseif ($this->change == "loss") {
            $this->display = "";
            $this->display_loss = "";
            $this->display_profit = "d-none";
        }
    }

    public function trade_edit()
    {
        $this->validate();

        $user_id = $this->user->id;
        $trade_id = $this->trade->id;
        $trade_uid = $this->trade->trade_id;
        $full_name = $this->user->first_name . " " . $this->user->last_name;
        $trade_amount = $this->trade->trade_stake_amount;


        if ($this->change == "profit") {

            if (empty($this->profit)) {
                session()->flash('error', 'please input profit amount');

                return Redirect::route('edit_trade', [$user_id, $trade_id]);
            }

            $new_bal = $this->user->balance + $this->profit;

            $result = Trades::where("user_id", $user_id)
                ->where("trade_id", $trade_uid)
                ->update([
                    "trade_status" => 3,
                    "trade_profit_loss_amount" => $this->profit,
                ]);

            if ($result) {

                User::where("id", $user_id)
                    ->update(["balance" => $new_bal]);

                session()->flash('success', 'Trade completed successfully');

                Redirect::route('edit_user', [$user_id]);

                // send notification
                Notifications::create([
                    "user_id" => $user_id,
                    "notifications_id" => Str::random(),
                    "notifications_category" => "Trade Completed",
                    "notifications_message" => " Hello $full_name your trade of $trade_amount have completed. Check email for more details or navigate to your trade history page in your dashboard. Thanks for choosing us",
                    "notifications_status" => "Active",
                ]);

                // send mail
                $app = config('app.name');
                $userEmail = $this->user->email;

                $subject = "Trade Completed Notification";


                $bodyUser = [
                    "name" => $full_name,
                    "title" => "Trade Completed",
                    "message" => 'Your trade of ' . $trade_amount . ' have completed successfully on' . date('Y-M-d H:i ') . '.
                    <br>
                    Details :
                    <br>
                    Type : ' . $this->trade->trade_type . '
                    <br>
                    Asset : ' . $this->trade->trade_trade_asset . '
                    <br>
                    Amount : $' . $trade_amount . '
                    <br>
                    Market : ' . $this->trade->trade_market . '
                    <br>
                    Duration : ' . $this->trade->trade_duration . '
                    <br>
                    Profit : + $' . $this->profit . '
                    <br>
                    <br>
                    <em>THANKS FOR TRADING WITH US</em>
                    '
                ];
                $bodyAdmin = [
                    "name" => "Admin",
                    "title" => "Trade Completed",
                    "message" => " Hello Admin you have completed a trade for $full_name successfully on " . date('Y-M-d H:i ') . ". Check his/her dashboard for further details;
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

            session()->flash('error', 'Something Went wrong try again');

            return Redirect::route('edit_trade', [$user_id, $trade_id]);
        } elseif ($this->change == "loss") {

            $result = Trades::where("user_id", $user_id)
                ->where("trade_id", $trade_uid)
                ->update([
                    "trade_status" => 2,
                    "trade_profit_loss_amount" => $trade_amount,
                ]);

            if ($result) {

                session()->flash('success', 'Trade completed successfully');

                Redirect::route('edit_user', [$user_id]);

                // send notification
                Notifications::create([
                    "user_id" => $user_id,
                    "notifications_id" => Str::random(),
                    "notifications_category" => "Trade Completed",
                    "notifications_message" => " Hello $full_name your trade of $trade_amount have completed. Check email for more details or navigate to your trade history page in your dashboard. Thanks for choosing us",
                    "notifications_status" => "Active",
                ]);

                // send mail
                $app = config('app.name');
                $userEmail = $this->user->email;

                $subject = "Trade Completed Notification";


                $bodyUser = [
                    "name" => $full_name,
                    "title" => "Trade Completed",
                    "message" => 'Your trade of ' . $trade_amount . ' have completed successfully on' . date('Y-M-d H:i ') . '.
                    <br>
                    Details :
                    <br>
                    Type : ' . $this->trade->trade_type . '
                    <br>
                    Asset : ' . $this->trade->trade_trade_asset . '
                    <br>
                    Amount : $' . $trade_amount . '
                    <br>
                    Market : ' . $this->trade->trade_market . '
                    <br>
                    Duration : ' . $this->trade->trade_duration . '
                    <br>
                    Loss : - $' . $trade_amount . '
                    <br>
                    <br>
                    <em>THANKS FOR TRADING WITH US</em>
                    '
                ];
                $bodyAdmin = [
                    "name" => "Admin",
                    "title" => "Trade Completed",
                    "message" => " Hello Admin you have completed a trade for $full_name successfully on " . date('Y-M-d H:i ') . ". Check his/her dashboard for further details;
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

            session()->flash('error', 'Something Went wrong try again');

            return Redirect::route('edit_trade', [$user_id, $trade_id]);
        }

        session()->flash('error', 'Something Went wrong try again');

        return Redirect::route('edit_trade', [$user_id, $trade_id]);
    }

    public function render()
    {
        return view('livewire.admin.edit-trade');
    }
}
