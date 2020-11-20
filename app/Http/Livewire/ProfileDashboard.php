<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class ProfileDashboard extends Component
{
    public $name = 'Guest';
    public $nickname;
    public $loud = false;
    public $greeting = 'Good morning';

    public function render(Request $request)
    {
        $user = $request->user();

        $this->name = $user->name;
        $this->nickname = $user->nickname;

        return view('livewire.profile.profile-dashboard', [
            'user' => $user
        ]);
    }
}
