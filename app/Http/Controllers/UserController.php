<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AppMail;
use App\Models\token;
use App\Models\Trades;
use App\Models\AI_Plans;
use Illuminate\Support\Str;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Livewire\Attributes\Validate;
use App\Models\Plans_Transactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function users(Request $request)
    {

        if ($request->method() == 'GET') {


            return view('users.index', [
                "title" => "Dashboard - User",
            ]);
        }
    }

    public function password_rest(Request $request, $email, $token)
    {

        if ($request->method() == 'GET') {
            $user_token = token::where("email", "$email")->where("token", "$token")->get()->first();
            if (!$user_token) {
                return abort(404);
            } elseif ($user_token->status != 1) {
                return abort(404);
            }

            return view('auth.password-reset', [
                "title" => "Password reset",
                "user_token" => $user_token,
            ]);
        }

        $data = (object) $request->all();
        $data->status = 2;

        $request->validate([
            "password" => ["required", "confirmed", "between:6,15"],
            "password_confirmation" => ["required"],
        ]);

        $user = User::where("email", $email)->get()->first();

        User::where("email", "$email")->update([
            "password" => Hash::make($data->password),
        ]);
        token::where("email", "$email")->where("token", "$token")->update([
            "status" => $data->status,
        ]);

        $userEmail = $user->email;

        $app = config('app.name');
        $date = date('Y-M-d H:i');
        $full_name = $user->last_name . " " . $user->first_name;
        $subject = "Password Confirm Notification";

        $bodyUser = [
            "name" => $full_name,
            "title" => "Password Confirm Notification",
            "message" => "Your Password on $app was successfully changed on $date. Please contact us if you did not initiate this action. <br> Note: Use site live chat for quick response ",
        ];

        try {
            // user email
            Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));
        } catch (\Throwable $th) {
            //throw $th;
        }

        session()->flash('success', 'Password Changed successfully');

        return redirect()->route('login');
    }

    public function trade(Request $request)
    {
        if ($request->method() == 'GET') {
            $user_id = Auth::user()->id;

            $sum_withdrawal = Transactions::where('user_id', $user_id)
                ->where('transaction_category', 2)
                ->where('transaction_status', 2)
                ->sum('transaction_amount');

            return view('users.trade', [
                "title" => "Trade",
                "sum_withdrawal" => $sum_withdrawal,
            ]);
        }
    }

    public function deposit(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('users.deposit', [
                "title" => "Deposit",
            ]);
        }
    }

    public function sub_deposit(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('users.sub_deposit', [
                "title" => "Sub Deposit",
            ]);
        }
    }

    public function withdraw(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('users.withdraw', [
                "title" => "Withdrawal",
            ]);
        }
    }

    public function ai_plans(Request $request)
    {

        if ($request->method() == 'GET') {

            $user_data = Auth::user();

            $userObj = User::findOrFail($user_data->id);

            $plans_transactions = $userObj->plans_transactions()
                ->where("plan_category", 1)->orderBy("created_at", "desc")->get();

            return view('users.ai-plans', [
                "title" => "Ai Plans",
                "user_data" => $user_data,
                "plans_transactions" => $plans_transactions,
            ]);
        }
    }

    public function signal_plans(Request $request)
    {
        if ($request->method() == 'GET') {

            $user_data = Auth::user();

            $userObj = User::findOrFail($user_data->id);

            $plans_transactions = $userObj->plans_transactions()
                ->where("plan_category", 2)->orderBy("created_at", "desc")->get();

            return view('users.signal-plans', [
                "title" => "Signal Plans",
                "user_data" => $user_data,
                "plans_transactions" => $plans_transactions,
            ]);
        }
    }

    public function status(Request $request)
    {
        if ($request->method() == 'GET') {

            $user_data = Auth::user();

            $userObj = User::findOrFail($user_data->id);

            $plans_transactions = $userObj->plans_transactions()
                ->where("plan_category", 3)->orderBy("created_at", "desc")->get();

            return view('users.status', [
                "title" => "Status",
                "user_data" => $user_data,
                "plans_transactions" => $plans_transactions,
            ]);
        }
    }

    public function trade_history(Request $request)
    {
        if ($request->method() == 'GET') {

            $user_data = Auth::user();

            $userObj = User::findOrFail($user_data->id);

            $trades = $userObj->trades()->orderBy("created_at", "desc")->get();

            return view('users.trade-history', [
                "title" => "Trade History",
                "trades" => $trades,
            ]);
        }
    }

    public function deposit_history(Request $request)
    {

        if ($request->method() == 'GET') {

            $user_data = Auth::user();

            $userObj = User::findOrFail($user_data->id);

            $Deposit = $userObj->transactions()
                ->where("transaction_category", 1)
                ->orderBy("created_at", "desc")
                ->get();

            return view('users.deposit-history', [
                "title" => "Deposit History",
                "deposits" => $Deposit,
            ]);
        }
    }

    public function withdraw_history(Request $request)
    {
        if ($request->method() == 'GET') {

            $user_data = Auth::user();

            $userObj = User::findOrFail($user_data->id);

            $withdrawals = $userObj->transactions()
                ->where("transaction_category", 2)
                ->orderBy("created_at", "desc")
                ->get();

            return view('users.withdraw-history', [
                "title" => "Withdrawal History",
                "withdrawals" =>  $withdrawals,
            ]);
        }
    }

    public function stake(Request $request)
    {
        if ($request->method() == 'GET') {

            $user_data = Auth::user();

            $userObj = User::findOrFail($user_data->id);

            $stakes = $userObj->stock_stakes()
                ->orderBy("created_at", "desc")
                ->get();

            return view('users.stake', [
                "title" => "Stake",
                "user_data" => $user_data,
                "stakes" => $stakes,
            ]);
        }
    }

    public function realEstate(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('users.realEstate', [
                "title" => "Real Estate",
            ]);
        }
    }

    public function account_settings(Request $request, User $user)
    {
        if ($request->method() == 'GET') {

            $user_data = Auth::user();

            return view('users.account-settings', [
                "title" => "Account Setting",
                "user_data" => $user_data,
            ]);
        }

        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "phone" => "required",
        ]);

        $data = (object) $request->all();

        $result = $user->where("id", Auth::user()->id)->update([
            "first_name" => $data->first_name,
            "last_name" => $data->last_name,
            "email" => $data->email,
            "phone" => $data->phone,
        ]);

        if ($result) {
            session()->flash('success', 'Changes made successfully');

            return redirect()->route('account_settings');
        }

        session()->flash('error', 'An error occurred try again');

        return redirect()->route('account_settings');
    }

    public function security_settings(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('users.security-settings', [
                "title" => "Account Setting",
            ]);
        }
    }
}
