<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use DB;
class Offerpage extends Component
{
  public $touroffers;
  public function mount($id){
    $this->touroffers =  DB::select('select * from touroffers where offer_sitelink = ?',[$id]);
  }
    public function render()
    {
        return view('livewire.page.offerpage')
        ->extends('layouts.Home')
        ->section('content');
    }
}
