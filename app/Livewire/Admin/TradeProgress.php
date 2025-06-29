<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Redirect;

class TradeProgress extends Component
{
    public $user_data;
    
    public $trade_progress;
    public $signal_progress;


    public function trade()
    {
        $this->validate([
            'trade_progress' => 'required|numeric|min:0|max:100',
        ]);


        $user = $this->user_data;

        $result = User::where("id", $user->id)->update([
            "progress_bar_status" => $this->trade_progress,
        ]);

        if ($result) {
            session()->flash('success', 'Changes made successfully');

            return Redirect::route('edit_user', [$user->id]);
        }

        session()->flash('error', 'An error occurred please try again later');

        return Redirect::route('edit_user', [$user->id]);
    }

    public function signal()
    {
        $this->validate([
            'signal_progress' => 'required|numeric|min:0|max:100',
        ]);

        $user = $this->user_data;

        $result = User::where("id", $user->id)->update([
            "signal_strength" => $this->signal_progress,
        ]);

        if ($result) {
            session()->flash('success', 'Changes made successfully');

            return Redirect::route('edit_user', [$user->id]);
        }

        session()->flash('error', 'An error occurred please try again later');

        return Redirect::route('edit_user', [$user->id]);
    }
    public function render()
    {
        return view('livewire.admin.trade-progress');
    }
}
