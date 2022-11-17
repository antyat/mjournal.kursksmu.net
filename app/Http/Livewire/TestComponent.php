<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class TestComponent extends Component
{

    public $user;
    public $new_name;

    public function updateName()
    {
        $this->user->update([
            'name' => $this->new_name
        ]);
    }

    public function mount()
    {
        $this->user = User::find(1);
    }

    public function render()
    {
        return view('livewire.test-component');
    }
}
