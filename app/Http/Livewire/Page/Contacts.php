<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class Contacts extends Component
{
    public function render()
    {
        return view('livewire.page.contacts')
        ->extends('layouts.Home')
        ->section('content');
    }
}
