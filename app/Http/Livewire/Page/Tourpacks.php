<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\tourpackages;
use App\Models\tourpackagents;
use App\Models\teamwhatsapps;
class Tourpacks extends Component
{
  public $tourpackages;
  public $tourpackagents;
  public function mount($id){
    $this->tourpackages = tourpackages::select('*')->where('tourpack',$id)->get();
    $tourpackss = tourpackagents::select('*')->where('tour_id',$id)->get();
    $this->tourpackagents = teamwhatsapps::where('id',$tourpackss[0]->agent_id)->get();
  }
    public function render()
    {
        return view('livewire.page.tourpacks')
        ->extends('layouts.Home')
        ->section('content');
    }
}
