<?php

namespace App\Http\Livewire\Dash\Page;

use Livewire\Component;
use App\Models\country_lists;
use App\Models\requirements;
use App\Models\countryblogs;
use App\Models\searchengines;

class Seo extends Component
{
  public $readyToLoad = false,$categoryId;

  public function loadPosts(){
    $this->readyToLoad = true;
  }
    public function render()
    {
        return view('livewire.dash.page.seo',[
            'searchengines' => $this->readyToLoad
                ? searchengines::select('*')->where('countryId',$this->categoryId)->get()
                : [],]);
    }
}
