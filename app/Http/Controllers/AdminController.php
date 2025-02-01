<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Models\User;
use App\Mail\AppMail;
use App\Models\Admin_wallets;
use App\Models\AI_Plans;
use App\Models\KYC;
use App\Models\Status_plan;
use Illuminate\Support\Str;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\Notifications;
use App\Models\Plans_Transactions;
use App\Models\Signal_plans;
use App\Models\Trades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function admin(Request $request, User $users, Transactions $transactions)
    {
        if ($request->method() == "GET") {

            $users_data = $users->where("role", 0)->get();

            $total_users = $users->where("role", 0)->count();

            $total_balance = $users->where("role", 0)->sum("balance");

            $total_sub_balance = $users->where("role", 0)->sum("sub_balance");

            $total_withdrawal = $transactions->where("transaction_category", 2)
                ->where("transaction_status", 2)
                ->sum("transaction_amount");

            return view('admin.index', [
                "title" => "Admin Dashboard",
                "admin_data" => Auth::user(),
                "total_users" => $total_users,
                "total_balance" => $total_balance,
                "total_sub_balance" => $total_sub_balance,
                "total_withdrawal" => $total_withdrawal,
                "users_data" => $users_data,
            ]);
        }
    }

    public function admin_ai_trade(Request $request, User $user)
    {
        if ($request->method() == 'GET') {

            $user_data = $user->get()->first();

            $total_withdrawn = $user->transactions()->where("transaction_category", 2)
                ->where("transaction_status", 2)
                ->sum("transaction_amount");

            // dd($total_withdrawn );

            return view('admin.admin-ai-trade', [
                "title" => "Ai trade",
                "user_data" => $user_data,
                "total_withdrawn" => $total_withdrawn,
                "admin_data" => Auth::user(),
            ]);
        }
    }

    public function edit_user(Request $request, User $user)
    {
        if ($request->method() == 'GET') {

            $user_data = $user;

            $status_plans = Status_plan::all();

            $total_withdrawn = $user->transactions()->where("transaction_category", 2)
                ->where("transaction_status", 2)
                ->sum("transaction_amount");

            $transactions = $user->transactions()
                ->orderByRaw('transaction_status = 1 desc, created_at desc')
                ->paginate(10);

            $trades = $user->trades()->orderByRaw('trade_status = 1 desc, created_at desc')->get();

            $kyc = $user->kyc()->orderByRaw('kyc_status = 1 desc, created_at desc')->get();

            $plans_transactions = $user->plans_transactions()->orderByRaw('plan_transaction_status = 1 desc, created_at desc')
                ->paginate(10);

            return view('admin.edit-user', [
                "title" => "User Edit",
                "admin_data" => Auth::user(),
                "user_data" => $user_data,
                "total_withdrawn" => $total_withdrawn,
                "status_plans" => $status_plans,
                "transactions" => $transactions,
                "trades" => $trades,
                "plans_transactions" => $plans_transactions,
                "kyc" => $kyc,
            ]);
        }

        $data = $request->input("action");
        $id = $request->input("id");

        if ($data == "approve_transaction") {

            $transactions_data = Transactions::where("user_id", $user->id)
                ->where("transaction_id", $id)
                ->get()->first();


            if ($transactions_data) {

                if ($transactions_data->transaction_category == 1) {
                    $new_bal = $user->balance + $transactions_data->transaction_amount;
                    $user->update([
                        "balance" => $new_bal,
                    ]);
                } elseif ($transactions_data->transaction_category == 2) {
                    $new_bal = $user->balance - $transactions_data->transaction_amount;
                    $user->update([
                        "balance" => $new_bal,
                    ]);
                } elseif ($transactions_data->transaction_category == 3) {
                    $new_bal = $user->sub_balance + $transactions_data->transaction_amount;
                    $user->update([
                        "sub_balance" => $new_bal,
                    ]);
                }

                Transactions::where("user_id", $user->id)
                    ->where("transaction_id", $id)
                    ->update([
                        "transaction_status" => 2
                    ]);



                if ($transactions_data->transaction_category == 1) {
                    $category = "Deposit";
                } elseif ($transactions_data->transaction_category == 2) {
                    $category = "Withdrawal";
                } elseif ($transactions_data->transaction_category == 3) {
                    $category = "Subscription Deposit";
                }

                $full_name = $user->first_name . ' ' . $user->last_name;

                // send notification
                Notifications::create([
                    "user_id" => $user->id,
                    "notifications_id" => Str::random(),
                    "notifications_category" => "Approved $category Notification",
                    "notifications_message" => " Hello $full_name Your $category have been approved. Check email for more information. Thanks for choosing us",
                    "notifications_status" => "Active",
                ]);

                // send mail
                $userEmail = $user->email;

                $subject = "Approved $category Notification";

                $bodyUser = [
                    "name" => $full_name,
                    "title" => "Approved $category",
                    "message" => "Hello $full_name Your $category have been approved. Your account will be credited automatically shortly. Thanks for choosing us",
                ];
                $bodyAdmin = [
                    "name" => "Admin",
                    "title" => "Approved $category",
                    "message" => " Hello Admin you have approved a $category for $full_name . His/Her account will be credited automatically ",
                ];

                try {
                    // user email
                    Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));

                    // Admin email
                    Mail::to(config('app.Admin_email'))->send(new AppMail($subject, $bodyAdmin));
                } catch (\Throwable $th) {
                    //throw $th;
                }

                session()->flash("success", "Transaction Approved successfully");


                return redirect()->route('edit_user', [$user->id]);
            }

            session()->flash("error", "An error occurred Please try again later");

            return redirect()->route('edit_user', [$user->id]);
        }

        if ($data == "decline_transaction") {

            $transactions_data = Transactions::where("user_id", $user->id)
                ->where("transaction_id", $id)
                ->get()->first();

            if ($transactions_data) {

                Transactions::where("user_id", $user->id)
                    ->where("transaction_id", $id)
                    ->update([
                        "transaction_status" => 3
                    ]);

                if ($transactions_data->transaction_category == 1) {
                    $category = "Deposit";
                } elseif ($transactions_data->transaction_category == 2) {
                    $category = "Withdrawal";
                } elseif ($transactions_data->transaction_category == 3) {
                    $category = "Subscription Deposit";
                }

                $full_name = $user->first_name . ' ' . $user->last_name;

                // send notification
                Notifications::create([
                    "user_id" => $user->id,
                    "notifications_id" => Str::random(),
                    "notifications_category" => "Approved $category Notification",
                    "notifications_message" => " Hello $full_name Your $category have been Declined. Check email for more information. Thanks for choosing us",
                    "notifications_status" => "Active",
                ]);

                // send mail
                $userEmail = $user->email;

                $subject = "Declined $category Notification";

                $bodyUser = [
                    "name" => $full_name,
                    "title" => "Declined $category",
                    "message" => "Hello $full_name Your $category have been Declined. Please write customer care Live chat to get more information on your transaction declination. Thanks for choosing us",
                ];
                $bodyAdmin = [
                    "name" => "Admin",
                    "title" => "Declined $category",
                    "message" => " Hello Admin you have Declined a $category for $full_name . ",
                ];

                try {
                    // user email
                    Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));

                    // Admin email
                    Mail::to(config('app.Admin_email'))->send(new AppMail($subject, $bodyAdmin));
                } catch (\Throwable $th) {
                    //throw $th;
                }

                session()->flash("success", "Transaction Declined successfully");


                return redirect()->route('edit_user', [$user->id]);
            }

            session()->flash("error", "An error occurred Please try again later");

            return redirect()->route('edit_user', [$user->id]);
        }

        if ($data == "complete_transaction") {
            $plan_transactions_data = Plans_Transactions::where("user_id", $user->id)
                ->where("id", $id)
                ->get()->first();

            if ($plan_transactions_data) {

                Plans_Transactions::where("user_id", $user->id)
                    ->where("id", $id)
                    ->update([
                        "plan_transaction_status" => 2,
                    ]);

                if ($plan_transactions_data->plan_category == 1) {
                    $category = "Ai Plan";
                } elseif ($plan_transactions_data->plan_category == 2) {
                    $category = "Signal Plan";
                } elseif ($plan_transactions_data->plan_category == 3) {
                    $category = "Status Plan";
                }

                $full_name = $user->first_name . ' ' . $user->last_name;

                // send notification
                Notifications::create([
                    "user_id" => $user->id,
                    "notifications_id" => Str::random(),
                    "notifications_category" => "Completed $category Plan",
                    "notifications_message" => " Hello $full_name Your $category Plan have been completed. Check email for more information. Thanks for choosing us",
                    "notifications_status" => "Active",
                ]);


                // send mail
                $userEmail = $user->email;

                $subject = "Completed $category Plan";

                $bodyUser = [
                    "name" => $full_name,
                    "title" => "Completed $category Plan",
                    "message" => " Hello $full_name Your $category Plan have been completed. Purchase again to keep Enjoying our services Thanks for choosing us",
                ];
                $bodyAdmin = [
                    "name" => "Admin",
                    "title" => "Completed $category Plan",
                    "message" => " Hello Admin you have approved a $category for $full_name . Check His/Her dashboard for more details",
                ];

                try {
                    // user email
                    Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));

                    // Admin email
                    Mail::to(config('app.Admin_email'))->send(new AppMail($subject, $bodyAdmin));
                } catch (\Throwable $th) {
                    //throw $th;
                }

                session()->flash("success", "Plan Completed successfully");


                return redirect()->route('edit_user', [$user->id]);
            }

            session()->flash("error", "An error occurred. Please try again later");


            return redirect()->route('edit_user', [$user->id]);
        }

        if ($data == "delete_transaction") {

            $result = Plans_Transactions::where("id", $id)
                ->delete();

            if ($result) {

                session()->flash("success", "Plan deleted successfully");


                return redirect()->route('edit_user', [$user->id]);
            }


            session()->flash("error", "An error occurred. Please try again later");


            return redirect()->route('edit_user', [$user->id]);
        }

        if ($data == "approve_kyc") {

            $result = KYC::where("user_id")->where("kyc_id", $id)->get()->first();

            if ($result) {
                $user->update([
                    "verify_status" => 2,
                ]);

                KYC::where("user_id")->where("kyc_id", $id)
                    ->update([
                        "kyc_status" => 2,
                    ]);


                $full_name = $user->first_name . ' ' . $user->last_name;

                // send notification
                Notifications::create([
                    "user_id" => $user->id,
                    "notifications_id" => Str::random(),
                    "notifications_category" => "Approved KYC Notification",
                    "notifications_message" => " Hello $full_name Your KYC Documents have been approved. Check email for more information. Thanks for choosing us",
                    "notifications_status" => "Active",
                ]);

                // send mail
                $userEmail = $user->email;

                $subject = "Approved KYC Notification";

                $bodyUser = [
                    "name" => $full_name,
                    "title" => "Approved KYC Notification",
                    "message" => "Hello $full_name Your KYC documents have been approved. Your account will be Verified automatically. Thanks for choosing us",
                ];
                $bodyAdmin = [
                    "name" => "Admin",
                    "title" => "Approved Approved KYC Notification",
                    "message" => " Hello Admin you have approved KYC document for $full_name. His/Her account will be credited automatically ",
                ];

                try {
                    // user email
                    Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));

                    // Admin email
                    Mail::to(config('app.Admin_email'))->send(new AppMail($subject, $bodyAdmin));
                } catch (\Throwable $th) {
                    //throw $th;
                }

                session()->flash("success", "Transaction Approved successfully");


                return redirect()->route('edit_user', [$user->id]);
            }
        }

        if ($data == "decline_kyc") {
            $result = KYC::where("user_id")->where("kyc_id", $id)->get()->first();

            if ($result) {
            }
        }
    }

    public function edit_trade(Request $request, User $user, Trades $trades)
    {

        if ($request->method() == 'GET') {

            return view('admin.edit-trade', [
                "admin_data" => Auth::user(),
                "trade" => $trades,
                "user" => $user,
            ]);
        }
    }

    public function admin_wallets(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view("admin.admin-wallets", [
                "admin_wallets" => Admin_wallets::first(),
                "admin_data" => Auth::user(),
            ]);
        }

        // Default value logic
        $walletFields = [
            'btc',
            'eth',
            'usdt',
            'cash_app',
            'paypal',
            'zelle',
            'bnb',
            'bch',
            'ltc',
            'xrp'
        ];

        $data = [];
        foreach ($walletFields as $field) {
            $data[$field] = $request->input($field) ?: 'Wallet not available';
        }

        $result = Admin_wallets::where("id", 1)->update($data);

        if ($result) {
            session()->flash('success', 'Changes made successfully');
            return redirect()->route('admin_wallets');
        }

        session()->flash('error', 'An error occurred, please try again later');
        return redirect()->route('admin_wallets');
    }

    public function create_ai_plan(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('admin.create-ai-plan', [
                "ai_plans" => AI_Plans::all(),
                "admin_data" => Auth::user(),
            ]);
        }
    }

    public function delete_ai_plan(Request $request, AI_Plans $ai_plan)
    {
        $data = (object) $request->all();

        $result = $ai_plan->where('id', $data->id)->delete();

        if ($result) {
            session()->flash("success", "Plan deleted successfully");
            return redirect()->route('create_ai_plan');
        }
        session()->flash("error", "An error occurred try again");
        return redirect()->route('create_ai_plan');
    }

    public function create_signal_plan(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('admin.create-signal-plan', [
                "admin_data" => Auth::user(),
                "signal_plans" => Signal_plans::all(),
            ]);
        }
    }

    public function delete_signal_plan(Request $request, Signal_plans $plan)
    {
        $data = (object) $request->all();

        $result = $plan->where('id', $data->id)->delete();

        if ($result) {
            session()->flash("success", "Plan deleted successfully");
            return redirect()->route('create_signal_plan');
        }
        session()->flash("error", "An error occurred try again");
        return redirect()->route('create_signal_plan');
    }


    public function create_status_plan(Request $request)
    {
        if ($request->method() == 'GET') {

            return view('admin.create-status-plan', [
                "admin_data" => Auth::user(),
                "status_plans" => Status_plan::all(),
            ]);
        }
    }


    public function delete_status_plan(Request $request, Status_plan $plan)
    {
        $data = (object) $request->all();

        $result = $plan->where('id', $data->id)->delete();

        if ($result) {
            session()->flash("success", "Plan deleted successfully");
            return redirect()->route('create_status_plan');
        }
        session()->flash("error", "An error occurred try again");
        return redirect()->route('create_status_plan');
    }


    public function profile_settings(Request $request, User $user)
    {
        if ($request->method() == 'GET') {

            return view('admin.profile-settings', [
                "admin_data" => Auth::user(),
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

            return redirect()->route('profile_settings');
        }

        session()->flash('error', 'An error occurred try again');

        return redirect()->route('profile_settings');
    }

    public function delete_user(User $user)
    {
        $result = $user->delete();

        if ($result) {
            session()->flash("success", "User deleted successfully");
            return redirect()->route('admin_dashboard');
        }
        session()->flash("error", "An error occurred try again");
        return redirect()->route('admin_dashboard');
    }
}
