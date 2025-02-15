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

class AiSellTrade extends Component
{
    public $user_data; // we are omitting mount because the property and parameter names match

    public $data = [];

    #[Rule('required', message: 'Please Select Trade Type')]
    public $type;

    #[Rule('required', message: 'Please Select Trade Asset')]
    public $asset;

    // public function mount($user_data) {
    //     $this->user_data = $user_data;
    // }

    public function updatedType()
    {
        if ($this->type == "Crypto") {

            return $this->data = [
                "empty" => "Please Click here to select asset",
                "Ripple XRP" => "Ripple XRP $0.00",
                "Evmos" => "Evmos EVMOS $0.00",
                "Link LN" => "Link LN $0.00",
                "Aurora AURORA" => "Aurora AURORA $0.00",
                "Bitcoin BTC" => "Bitcoin BTC $0.00",
                "Decentraland MANA" => "Decentraland MANA $0.00",
                "Token GT" => "Token GT $0.00",
                "Ethereum ETH" => "Ethereum ETH $0.00",
                "Telos TLOS" => "Telos TLOS $0.00",
                "Ethereum Classic ETC" => "Ethereum Classic ETC $0.00",
                "USD Coin USDC" => "USD Coin USDC $0.00",
                "Zcash ZEC" => "Zcash ZEC $0.00",
                "Bitcoin Cash BCH" => "Bitcoin Cash BCH $0.00",

            ];
        } elseif ($this->type == "Stocks") {
            return $this->data = [
                "empty" => "Please Click here to select asset",
                "ASML" => "ASML ASML $0.00",
                "TSLA" => "Tesla TSLA $0.00",
                "COST" => "Costco COST $0.00",
                "CL" => "Colgate-Palmolive CL $0.00",
                "CCO" => "Clear Channel Outdoor CCO $0.00",
                "PG" => "Procter &amp; Gamble PG $0.00",
                "GM" => "General Motors GM $0.00",
                "BABA" => "Alibaba BABA $0.00",
                "MSI" => "Motorola MSI $0.00",
                "WFC" => "Wells Fargo WFC $0.00",
                "RKLB" => "Rocket Lab RKLB $0.00",
                "GOOGL" => "Google GOOGL $0.00",
                "RWLK" => "ReWalk Robotics RWLK $0.00",
                "NVS" => "Novartis NVS $0.00",
                "NVDA" => "Nvidia NVDA $0.00",
                "ADBE" => "Adobe ADBE $0.00",
                "AMD" => "AMD AMD $0.00",
                "FB" => "Meta Platforms Inc FB $0.00",
                "RL" => "Ralph Lauren RL $0.00",
            ];
        } elseif ($this->type == "Forex") {
            return $this->data = [
                "empty" => "Please Click here to select asset",
                "AUDCAD" => "AUD/CAD",
                "USDCHF" => "USD/CHF",
                "CHFJPY" => "CHF/JPY",
                "GBPUSD" => "GBP/USD",
                "EURAUD" => "EUR/AUD",
                "EURCHF" => "EUR/CHF",
                "AUDUSD" => "AUD/USD",
                "AUDNZD" => "AUD/NZD",
                "AUDJPY" => "AUD/JPY",
                "EURJPY" => "EUR/JPY",
                "GBPJPY" => "GBP/JPY",
                "EURUSD" => "EUR/USD",
                "NZDUSD" => "NZD/USD",
                "EURCAD" => "EUR/CAD",
                "EURGBP" => "EUR/GBP",
                "GBPCHF" => "GBP/CHF",
            ];
        }
    }

    #[Rule('required', message: 'Please Input amount')]
    #[Rule('min:3', message: 'Amount should be at least $100')]
    public $amount;

    #[Rule('required', message: 'Please select Duration of trade')]
    public $duration;

    public $trade_by; // remember to put it visible for admin to diff

    public function ai_sellTrade()
    {
        $this->validate();

        $current_bal = $this->user_data->balance;
        $user_id = $this->user_data->id;
        $full_name = $this->user_data->first_name . " " . $this->user_data->last_name;

        if ($current_bal < $this->amount) {
            session()->flash('error', 'insufficient Funds');
            return Redirect::route('admin_ai_trade',[$user_id]);
        }

        $result = Trades::create([
            "user_id" => $user_id,
            "trade_id" => Str::random(),
            "trade_time" => date('Y-m-d H:i:s'),
            "trade_status" => 1, // go to config/app.php
            "trade_stake_amount" => $this->amount,
            "trade_by" => "Ai",
            "trade_type" => $this->type,
            "trade_asset" => $this->asset,
            "trade_duration" => $this->duration,
            "trade_market" => "SELL",
            "trade_profit_loss_amount" => 0,
        ]);

        if ($result) {

            $new_balance = $current_bal - $this->amount;

            User::where("id", $user_id)->update([
                "balance" => $new_balance,
            ]);

            session()->flash('success', 'Your Ai Trade was initiated for this customer');

            Redirect::route('admin_ai_trade',[$user_id]);

            // send notification
            Notifications::create([
                "user_id" => $user_id,
                "notifications_id" => Str::random(),
                "notifications_category" => "Ai Trade Summary",
                "notifications_message" => " Hello $full_name our Ai executed a trade for you successfully on " . date('Y-M-d H:i') . ". Check your email for full details. Thanks for choosing us",
                "notifications_status" => "Active",
            ]);

            // send mail
            $app = config('app.name');
            $userEmail = $this->user_data->email;

            $subject = "AI Trade Notification";


            $bodyUser = [
                "name" => $full_name,
                "title" => "Trade Successful - AI",
                "message" => ''.$app.'\'s Ai successfully placed a trade in your '.$app.' account on : ' . date('Y-M-d H:i ') . '.
                    <br>
                    Details :
                    <br>
                    Type : ' . $this->type . '
                    <br>
                    Asset : ' . $this->asset. '
                    <br>
                    Amount : $' . $this->amount . '
                    <br>
                    Market : SELL
                    <br>
                    Duration : ' . $this->duration. '
                    <br>
                    <br>
                    <em>THANKS FOR TRADING WITH US</em>
                    '
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "AI Trade Notification",
                "message" => " Hello Admin Ai trade for a user by the name $full_name have executed successfully ".date('Y-M-d H:i ').". Check his/her dashboard for further details;
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

        return Redirect::route('admin_ai_trade',[$user_id]);;
    }

    public function render()
    {
        return view('livewire.admin.ai-sell-trade');
    }
}
