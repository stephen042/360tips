<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AllUsers extends Component
{
    public $user;

    public $counter;

    public function render()
    {
        return view('livewire.admin.all-users');
    }
}
