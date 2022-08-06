<?php

namespace App\Http\Livewire\Dash\Layout;

use Livewire\Component;
use App\Models\countryblogs;
use App\Models\teamwhatsapps;
use App\Models\touristagents;

class Travelagents extends Component
{
  public $category_id;
  public $travelagents;
  public $countryblogs;
  public $readyToLoad = false;
  public function loadPosts()
 {
   $this->readyToLoad = true;
 }
  public function mount($category_id){
    $this->countryblogs = countryblogs::select('*')->where('category',$category_id)->get();
  }
  public function agentsubmit(){
    $this->validate([
      'travelagents' => 'required',
    ]);
      touristagents::create([
        'country_id' => $this->category_id,
        'agent_id' => $this->travelagents,
      ]);
      $this->resetInput();
  }
  public function deleteAgent($id){
   $deleteRecord = touristagents::where('id',$id);
   $deleteRecord->delete();
   $this->resetInput();
}
  public function resetInput(){
    $this->travelagents = null;
  }
    public function render()
    {
        return view('livewire.dash.layout.travelagents',[
            'teamwhatsapps' => $this->readyToLoad
                ? teamwhatsapps::with('touristagents')->get()
                : [],
        ]);
    }
}
