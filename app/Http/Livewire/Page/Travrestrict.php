<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class Travrestrict extends Component
{
    public function render()
    {
        return view('livewire.page.travrestrict')
        ->extends('layouts.Home')
        ->section('content');
    }
}
