<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;
use App\Models\teamwhatsapps;
use App\Models\touristagents;

class Agentcontactprof extends Component
{
    public $category_id;
    public $touristagents;
    public $teamwhatsapps;
    public function mount($category_id){
      $this->teamwhatsapps = teamwhatsapps::with('touristagents')->get();

    }
    public function render()
    {
        return view('livewire.layout.agentcontactprof');
    }
}
