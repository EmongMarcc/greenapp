<?php

namespace App\Http\Livewire\Dash\Layout;

use Livewire\Component;

class Requirements extends Component
{
  public $category_id,$reqtype,$reqbody;
    public function render()
    {
        return view('livewire.dash.layout.requirements');
    }
}
