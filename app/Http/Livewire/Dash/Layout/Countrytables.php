<?php

namespace App\Http\Livewire\Dash\Layout;

use Livewire\Component;
use App\Models\countryblogs;
use App\Models\teamwhatsapps;

class Countrytables extends Component
{
  public $wajob,$waname,$wanumber;
  public $readyToLoad = false;
  public function loadPosts()
 {
   $this->readyToLoad = true;
 }
  public function whatsappsubmit(){
    $this->validate([
      'wajob' => 'required',
      'waname' => 'required',
      'wanumber' => 'required',
    ]);
      teamwhatsapps::create([
        'job' => $this->wajob,
        'name' => $this->waname,
        'number' => $this->wanumber,
      ]);
      $this->resetInput();
  }
  public function updateStatsagent($id){
    $editStatus = teamwhatsapps::findOrFail($id);
    if ($editStatus->status === 'Online') {
      $editStatus->update(['status' => 'Offline']);
    }else{
      $editStatus->update(['status' => 'Online']);
    }
  }
  public function deleteWhatsapp($id){
   $deleteRecord = teamwhatsapps::where('id',$id);
   $deleteRecord->delete();
   $this->resetInput();
}
  public function resetInput(){
    $this->wajob = null;
    $this->waname = null;
    $this->wanumber = null;
  }
    public function render()
    {
        return view('livewire.dash.layout.countrytables',[
            'teamwhatsapps' => $this->readyToLoad
                ? teamwhatsapps::select('*')->orderBy('id','desc')->get()
                : [],
        ]);
    }
}
