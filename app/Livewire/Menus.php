<?php

namespace App\Livewire;

use Livewire\Component;

class Menus extends Component
{
    public $menus;
    public function mount()
    {
        $this->menus = config('menu'); // load menu from config/menu.php
    }
    public function render()
    {
        return view('livewire.menus');
    }
}
