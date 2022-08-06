<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;
use App\Models\tourpackages;
use App\Models\countryblogs;
use App\Models\touroffers;
class Article extends Component
{
  public $readyToLoad = false;
  public function loadPosts()
 {
   $this->readyToLoad = true;
 }
    public function render()
    {
        return view('livewire.layout.article', [
            'newsupdate' => $this->readyToLoad
                ? touroffers::select('*')->orderBy('id','desc')->get()
                : []]);
    }
}
