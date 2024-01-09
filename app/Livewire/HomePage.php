<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class HomePage extends Component
{
    public $count=1;
    
    public function render()
    {
        return view('livewire.home-page'); 
    }
}
