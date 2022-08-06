<?php

namespace App\Http\Livewire\Dash\Page;

use Livewire\Component;
use App\Models\countryblogs;
use App\Models\tourpackages;
use App\Models\tourpackagents;
use App\Models\teamwhatsapps;

class Dashpacks extends Component
{
  public $categoryId,$countryblogs,$readyToLoad = false;
  public $teamwhatsapps;
  public $whatsappagent;
  public $title,$tour_img,$status,$keywords,$description,$tourpack,$countryId,$datestart,$dateend;
  public function loadPosts(){
    $this->readyToLoad = true;
  }
  public function mount(){
    $this->countryblogs = countryblogs::select('*')->get();
    $this->teamwhatsapps = teamwhatsapps::select('*')->get();
  }
  public function deleteTours($id){
   $deleteRecord = tourpackages::where('tourpack',$id);
   $deleteRecord->delete();
   $tourpackagentss = tourpackagents::where('tour_id',$id);
   $tourpackagentss->delete();
}
  public function submit(){
    $this->validate([
      'title' => 'required',
      'tour_img' => 'required',
      'status' => 'required',
      'keywords' => 'required',
      'description' => 'required',
      'tourpack' => 'required',
      'datestart' => 'required',
      'dateend' => 'required',
      'countryId' => 'required'
    ]);
        tourpackages::create([
          'title' => $this->title,
          'tour_img' => $this->tour_img,
          'status' => $this->status,
          'keywords' => $this->keywords,
          'description' => $this->description,
          'tourpack' => $this->tourpack,
          'datestart' => $this->datestart,
          'dateend' => $this->dateend,
          'countryId' => $this->countryId
        ]);
        tourpackagents::create([
          'tour_id' => $this->tourpack,
          'agent_id' => $this->whatsappagent,
        ]);
      $this->resetInput();
 }
    public function resetInput(){
      $this->title = null;
      $this->whatsappagent = null;
      $this->tour_img = null;
      $this->status = null;
      $this->keywords = null;
      $this->description = null;
      $this->tourpack = null;
      $this->datestart = null;
      $this->dateend = null;
      $this->countryId = null;
    }
    public function render()
    {
        return view('livewire.dash.page.dashpacks',[
            'tourpackages' => $this->readyToLoad
                ? tourpackages::select('*')->orderBy('id','desc')->get()
                : [],
        ]);
    }
}
