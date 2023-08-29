<?php

namespace App\Livewire;

use Livewire\Component;

class ConnectButton extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.connect-button');
    }



public function connect(){
    dd();
}
}
