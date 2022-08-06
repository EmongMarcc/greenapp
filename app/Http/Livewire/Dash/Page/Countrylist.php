<?php

namespace App\Http\Livewire\Dash\Page;

use Livewire\Component;
use App\Models\country_lists;
use App\Models\requirements;
use App\Models\countryblogs;
use App\Models\searchengines;
class Countrylist extends Component
{
  public $readyToLoad = false,$countryName,$categoryId,$countryblogs;
  public $title,$site_name,$url,$description,$keywords;
  public function loadPosts(){
    $this->readyToLoad = true;

  }
  public function submitsearching(){
    $this->validate([
      'title' => 'required',
      'site_name' => 'required',
      'url' => 'required',
      'description' => 'required',
      'keywords' => 'required',
    ]);
      searchengines::create([
        'title' => $this->title,
        'site_name' => $this->site_name,
        'url' => $this->url,
        'description' => $this->description,
        'keywords' => $this->keywords,
        'countryId' => $this->categoryId,
      ]);
        $this->resetInputSearch();
  }
  public function updateStatreq($idd){
    $editStatusreq = requirements::findOrFail($idd);
    if ($editStatusreq->status === 'Active') {
      $editStatusreq->update(['status' => 'Inactive']);
    }else{
      $editStatusreq->update(['status' => 'Active']);
    }
  }
  public function submit(){
    $this->validate([
      'countryName' => 'required',
      'categoryId' => 'required',
    ]);
      country_lists::create([
        'CountryName' => $this->countryName,
        'category_id' => $this->categoryId,
      ]);
        $this->resetInput();
  }
  public function resetInput(){
    $this->countryName = null;
  }
  public function resetInputSearch(){
    $this->title = null;
    $this->site_name = null;
    $this->url = null;
    $this->description = null;
    $this->keywords = null;
  }
  public function deleteCategory($id){
   $deleteRecord = country_lists::where('id',$id);
   $deleteRecord->delete();
   $this->resetInput();
}
  public function deleteCategoryreq($id){
   $deleteRecord = requirements::where('id',$id);
   $deleteRecord->delete();
}
public function updateStat($id){
  $editStatus = country_lists::findOrFail($id);
  if ($editStatus->status === 'Active') {
    $editStatus->update(['status' => 'Inactive']);
  }else{
    $editStatus->update(['status' => 'Active']);
  }
}

public function mount($id){
  $this->countryblogs = countryblogs::select('*')->where('category',$id)->get();
  $this->categoryId = $id;
}
    public function render()
    {
        return view('livewire.dash.page.countrylist',[
            'countrylists' => $this->readyToLoad
                ? country_lists::select('*')->where('category_id',$this->categoryId)->orderBy('id','desc')->get()
                : [],
            'requirements' => $this->readyToLoad
                ? requirements::select('*')->where('category_id',$this->categoryId)->get()
                : [],
            'searchengines' => $this->readyToLoad
                ? searchengines::select('*')->where('countryId',$this->categoryId)->get()
                : [],
        ]);
    }
}
