<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Models\AdminMessages;
use Livewire\Attributes\Rule;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Redirect;

class EditUserAccount extends Component
{
    public $user_data;

    public $message_body;
    public $message_title;

    public $network_fee_status; // this will be true/false
    public $network_fee_amount;


    public $status_plans;

    public $credit_bal_amount;

    public $debit_bal_amount;

    public $credit_earnings_bal_amount;

    public $debit_earnings_bal_amount;

    public $credit_sub_bal_amount;

    public $debit_sub_bal_amount;

    public $change_status_data;

    public function mount($user_data)
    {
        $admin_message_details = AdminMessages::where("user_id", $user_data->id)->first();
        $this->message_title = $admin_message_details->title ?? '';
        $this->message_body = $admin_message_details->message ?? '';

        $this->user_data = $user_data;
        $this->network_fee_status = $user_data->is_active_network_fee == "active";
        $this->network_fee_amount = $user_data->network_fee;
    }

    public function sendMessageToUser()
    {
        $this->validate([
            "message_title" => ['min:3'],
            "message_body" => ['min:5'],
        ]);

        $user_id = $this->user_data->id;

        $result = AdminMessages::updateOrCreate(
            ['user_id' => $user_id],
            [
                'title' => $this->message_title,
                'message' => $this->message_body,
            ]
        );

        if ($result) {
            session()->flash('success', 'Message sent successfully');

            return Redirect::route('edit_user', [$user_id]);
        }

        session()->flash('error', 'An error occurred try again later');

        return Redirect::route('edit_user', [$user_id]);
    }


    public function credit_balance()
    {

        $this->validate([
            "credit_bal_amount" => 'required',
        ]);

        $user_id = $this->user_data->id;

        $new_balance = $this->user_data->balance + $this->credit_bal_amount;

        $result = User::where("id", $user_id)->update([
            "balance" => $new_balance,
        ]);

        if ($result) {
            session()->flash('success', 'Customer Credited successfully');

            return Redirect::route('edit_user', [$user_id]);
        }

        session()->flash('error', 'An error occurred try again later');

        return Redirect::route('edit_user', [$user_id]);
    }

    public function debit_balance()
    {

        $this->validate([
            "debit_bal_amount" => 'required',
        ]);

        $user_id = $this->user_data->id;

        $new_balance = $this->user_data->balance - $this->debit_bal_amount;

        $result = User::where("id", $user_id)->update([
            "balance" => $new_balance,
        ]);

        if ($result) {
            session()->flash('success', 'Customer Debited successfully');

            return Redirect::route('edit_user', [$user_id]);
        }

        session()->flash('error', 'An error occurred try again later');

        return Redirect::route('edit_user', [$user_id]);
    }

    public function credit_earnings_balance()
    {

        $this->validate([
            "credit_earnings_bal_amount" => 'required',
        ]);

        $user_id = $this->user_data->id;

        $new_balance = $this->user_data->earnings_balance + $this->credit_earnings_bal_amount;

        $result = User::where("id", $user_id)->update([
            "earnings_balance" => $new_balance,
        ]);

        if ($result) {
            session()->flash('success', 'Customer Earnings Balance Credited successfully');

            return Redirect::route('edit_user', [$user_id]);
        }

        session()->flash('error', 'An error occurred try again later');

        return Redirect::route('edit_user', [$user_id]);
    }

    public function debit_earnings_balance()
    {

        $this->validate([
            "debit_earnings_bal_amount" => 'required',
        ]);

        $user_id = $this->user_data->id;

        $new_balance = $this->user_data->earnings_balance - $this->debit_earnings_bal_amount;

        $result = User::where("id", $user_id)->update([
            "earnings_balance" => $new_balance,
        ]);

        if ($result) {
            session()->flash('success', 'Customer Earnings Debited successfully');

            return Redirect::route('edit_user', [$user_id]);
        }

        session()->flash('error', 'An error occurred try again later');

        return Redirect::route('edit_user', [$user_id]);
    }

    public function credit_sub_balance()
    {
        $this->validate([
            "credit_sub_bal_amount" => 'required',
        ]);

        $user_id = $this->user_data->id;

        $new_balance = $this->user_data->sub_balance + $this->credit_sub_bal_amount;

        $result = User::where("id", $user_id)->update([
            "sub_balance" => $new_balance,
        ]);

        if ($result) {
            session()->flash('success', 'Customer\'s Subscription balance Credited successfully');

            return Redirect::route('edit_user', [$user_id]);
        }

        session()->flash('error', 'An error occurred try again later');

        return Redirect::route('edit_user', [$user_id]);
    }

    public function debit_sub_balance()
    {
        $this->validate([
            "debit_sub_bal_amount" => 'required',
        ]);

        $user_id = $this->user_data->id;

        $new_balance = $this->user_data->sub_balance - $this->debit_sub_bal_amount;

        $result = User::where("id", $user_id)->update([
            "sub_balance" => $new_balance,
        ]);

        if ($result) {
            session()->flash('success', 'Customer\'s Subscription balance Debited successfully');

            return Redirect::route('edit_user', [$user_id]);
        }

        session()->flash('error', 'An error occurred try again later');

        return Redirect::route('edit_user', [$user_id]);
    }

    public function change_status()
    {
        $this->validate([
            "change_status_data" => 'required',
        ]);

        $user_id = $this->user_data->id;

        $result = User::where("id", $user_id)->update([
            "account_status" => $this->change_status_data,
        ]);

        if ($result) {
            session()->flash('success', 'Customer\'s Account Status Changed successfully');

            return Redirect::route('edit_user', [$user_id]);
        }

        session()->flash('error', 'An error occurred try again later');

        return Redirect::route('edit_user', [$user_id]);
    }

    public function networkFee()
    {
        $this->validate([
            "network_fee_status" => 'required',
            "network_fee_amount" => 'required|min:0',
        ]);

        $user_id = $this->user_data->id;

        $status = $this->network_fee_status ? 'active' : 'inactive';

        $result = User::where("id", $user_id)->update([
            "is_active_network_fee" => $status,
            "network_fee" => $this->network_fee_amount,
        ]);

        if ($result) {
            session()->flash('success', 'Network Fee Updated successfully');

            return Redirect::route('edit_user', [$user_id]);
        }

        session()->flash('error', 'An error occurred try again later');

        return Redirect::route('edit_user', [$user_id]);
    }

    public function render()
    {
        return view('livewire.admin.edit-user-account');
    }
}
