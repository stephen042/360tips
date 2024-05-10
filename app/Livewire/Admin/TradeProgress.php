<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Redirect;

class TradeProgress extends Component
{
    public $user_data;

    #[Rule('required')]
    public $trade_progress;

    public function trade()  {
        $this->validate();

        $user = $this->user_data;

        $result = User::where("id",$user->id)->update([
            "progress_bar_status" => $this->trade_progress,
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
