<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;
use App\Models\activitycategories;

class Touractivities extends Component
{
      public $activities;
      public function mount(){
        $this->activities = activitycategories::all();
      }
    public function render()
    {
        return view('livewire.layout.touractivities');
    }
}
