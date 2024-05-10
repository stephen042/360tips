<?php

namespace App\Livewire\User;

use App\Models\Transactions;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AccountSummary extends Component
{

    public function render()
    {

        $user_id = Auth::user()->id;

        $sum_withdrawal = Transactions::where('user_id', $user_id)
            ->where('transaction_category', 1)
            ->where('transaction_status', 2)
            ->sum('transaction_amount');

        return view('livewire.user.account-summary', [
            "user_data" => Auth::user(),
            "sum_withdrawal" => $sum_withdrawal,
        ]);
    }
}
