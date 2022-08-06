<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use DB;
class Touroffers extends Component
{
  public $touroffers;
  public function mount(){
    $this->touroffers =  DB::select('select * from touroffers');
  }
    public function render()
    {
        return view('livewire.page.touroffers')
        ->extends('layouts.Home')
        ->section('content');
    }
}
