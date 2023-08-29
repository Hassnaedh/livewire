<?php

namespace App\Livewire\Button;

use Livewire\Component;

class Save extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <button>
                save
            </button>
        </div>
        HTML;
    }
}
