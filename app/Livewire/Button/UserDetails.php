<?php

namespace App\Livewire\Button;

use Livewire\Component;

class UserDetails extends Component
{
    public $firstName;
    public $lastName;
    public function mount(){
        $this->firstName = "John";
        $this ->lastName = "Doe";
        $this->fill([
            'firstname' => 'Jenna',
            'lastName' => 'Stones'
        ]);
    }

    public function render()
    {
        return view('livewire.user-details');
    }
}
