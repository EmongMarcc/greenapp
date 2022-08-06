<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;
use App\Models\teamwhatsapps;

class Whatsapp extends Component
{
  public $teamwhatsapps;
  public function mount(){
    $this->teamwhatsapps = teamwhatsapps::all();
  }
    public function render()
    {
        return view('livewire.layout.whatsapp');
    }
}
