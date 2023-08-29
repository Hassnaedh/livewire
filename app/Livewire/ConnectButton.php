<?php

namespace App\Livewire;

use Livewire\Component;

class ConnectButton extends Component
{
    public $name;

    protected $listeners =['connected'];

    public function render()
    {
        return view('livewire.connect-button');
    }



public function connected()
{
    dd('received connected event');
    $this->emit('connected'); //global
    //$this->emitTo(UserDetails,'connected'); //Passing the event to a specific livewire component for example : UserDetails
    //$this->emitUp() child to parent
    //$this->emitSelf() to the component itself
}
}
