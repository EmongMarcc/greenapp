<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\countryblogs;
use App\Models\country_lists;
use App\Models\requirements;

class Countryprofile extends Component
{
  public $countryblogs,$countrylists,$requirements;
  public function mount($id){
    $this->countryblogs = countryblogs::select('*')->where([['category',$id]])->get();
    $this->countrylists = country_lists::select('*')->where([['category_id',$id]])->get();
    $this->requirements = requirements::select('*')->where([['category_id',$id]])->get();
}

    public function render()
    {
        return view('livewire.page.countryprofile')
        ->extends('layouts.Home')
        ->section('content');
    }
}
