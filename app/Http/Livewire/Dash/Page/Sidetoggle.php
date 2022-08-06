<?php

namespace App\Http\Livewire\Dash\Page;

use Livewire\Component;
use App\Models\countryblogs;

class Sidetoggle extends Component
{
  public $countryblogs;
    public function mount(){
      $this->countryblogs = countryblogs::select('*')->orderBy('id','desc')->get();
    }
    public function render()
    {
        return view('livewire.dash.page.sidetoggle');
    }
}
