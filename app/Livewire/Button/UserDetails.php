<?php

namespace App\Livewire\Button;

use Livewire\Component;

class UserDetails extends Component
{
    public $firstName;
    public $lastName;
    public function mount(){
        $this->fill([
            'firstname' => 'Jenna',
            'lastName' => 'Stones'
        ]);
    }

    public function render()
    {
        return view('livewire.button.user-details');
    }
}
