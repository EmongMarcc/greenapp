<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.page.main')
        ->extends('layouts.Home')
        ->section('content');
    }
}
