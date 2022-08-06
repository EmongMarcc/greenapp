<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\touroffers;
class Offertours extends Component
{
  public $touroffers,$readyToLoad = false;
  public function loadPosts()
 {
   $this->readyToLoad = true;
 }
    public function render()
    {
        return view('livewire.page.offertours',[
            'touroffers' => $this->readyToLoad
                ? touroffers::select('*')->orderBy('id','desc')->get()
                : []])
        ->extends('layouts.Home')
        ->section('content');
    }
}
