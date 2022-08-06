<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class Touractivity extends Component
{
    public function render()
    {
        return view('livewire.page.touractivity')
        ->extends('layouts.Home')
        ->section('content');
    }
}
