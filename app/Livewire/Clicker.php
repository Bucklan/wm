<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public function createUser(){
        User::create([
            'name' => 'test user',
            'email' => 'test2@gmail.com',
            'password' => 'asdasdasd',
        ]);


    }


    public function render()
    {
        $title = "test";
        $users = User::all();
        return view('livewire.clicker',
            ['title' => $title,
                'users' => $users]);
    }
}
