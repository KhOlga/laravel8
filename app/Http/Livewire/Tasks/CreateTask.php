<?php

namespace App\Http\Livewire\Tasks;

use Livewire\Component;
use Illuminate\Http\Request;

class CreateTask extends Component
{
    public function render(Request $request)
    {
        $user = $request->user();

        $this->name = $user->name;
        $this->nickname = $user->nickname;
        return view('livewire.tasks.create-task');
    }
}
