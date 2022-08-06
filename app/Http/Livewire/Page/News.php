<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\tourpackages;
use App\Models\countryblogs;
class News extends Component
{
  public $readyToLoad = false;
  public function loadPosts()
 {
   $this->readyToLoad = true;
 }
    public function render()
    {
        return view('livewire.page.news', [
            'newsupdate' => $this->readyToLoad
                ? tourpackages::select('*')->orderBy('id','desc')->get()
                : []])
        ->extends('layouts.Home')
        ->section('content');
    }
}
