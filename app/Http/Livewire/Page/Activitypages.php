<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class Activitypages extends Component
{
  public $slug;
  public function mount($id){
    $this->slug = $id;
  }
    public function render()
    {
        return view('livewire.page.activitypages')
        ->extends('layouts.Home')
        ->section('content');
    }
}
