<?php

namespace App\Http\Livewire\Dash\Page;

use Livewire\Component;
use App\Models\countryblogs;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Storage;
class Posting extends Component
{

  use WithPagination;
  use WithFileUploads;
  public $title,$body,$p_date,$category,$coverimage = [],$flags,$regions,$readyToLoad = false,$selectedId,$price;
  public $alertStatus = false,$statusSuccess,$statusError;
    public function loadPosts(){
      $this->readyToLoad = true;
    }
    public function render()
    {
        return view('livewire.dash.page.posting',[
            'countryblogs' => $this->readyToLoad
                ? countryblogs::select('*')->orderBy('id','desc')->paginate(10)
                : [],
        ]);
    }

    public function submit(){
      $this->validate([
        'title' => 'required|min:3',
        'body' => 'required|min:3',
        'p_date' => 'required',
        'category' => 'required',
        'flags' => 'required',
        'regions' => 'required'
      ]);
      if ($this->selectedId) {
          countryblogs::find($this->selectedId)->update([
            'title' => $this->title,
            'body' => $this->body,
            'p_date' => $this->p_date,
            'category' => $this->category,
            'flags' => $this->flags,
            'regions' => $this->regions,
            'price' => $this->price
          ]);
          $this->statusSuccess = "Country Travel Page Updated Successful!";
      }
      else {
        foreach ($this->coverimage as $photo) {
          $photo->storePubliclyAs('Storage/Green/',$photo->getClientOriginalName(),'s3');
          countryblogs::create([
            'title' => $this->title,
            'body' => $this->body,
            'p_date' => $this->p_date,
            'category' => $this->category,
            'coverimage' => Storage::disk('s3')->Url('Storage/Green/'.$photo->getClientOriginalName()),
            'flags' => $this->flags,
            'regions' => $this->regions
          ]);
        }
            $this->statusSuccess = "A new Country Travel Page Added Successful!";
      }
        $this->alertStatus = true;
        $this->resetInput();
   }
   public function deleteCategory($id){
    $deleteRecord = countryblogs::where('id',$id);
    $deleteRecord->delete();
    $this->alertStatus = true;
    $this->statusSuccess = "Selected Country Travel Deleted Successful!";
 }
   public function editCountry($id){
    $this->resetInput();
    $editRecord = countryblogs::findOrFail($id);
    $this->selectedId = $id;
    $this->coverimage = $editRecord->coverimage;
    $this->title = $editRecord->title;
    $this->body = $editRecord->body;
    $this->p_date = $editRecord->p_date;
    $this->category = $editRecord->category;
    $this->flags = $editRecord->flags;
    $this->regions = $editRecord->regions;
    $this->price = $editRecord->price;
 }
   public function updateStatus($id){
     $editStatus = countryblogs::find($id);
     if ($editStatus->status === 'Active') {
       $editStatus->update(['status' => 'Inactive']);
           $this->alertStatus = true;
       $this->statusSuccess = "Selected Country Travel Page is Inactive.";
     }else{
       $editStatus->update(['status' => 'Active']);
           $this->alertStatus = true;
       $this->statusSuccess = "Selected Country Travel Page is visible to the public!";
     }
 }
   private function resetInput(){
     $this->selectedId = null;
     $this->coverimage = null;
     $this->title = null;
     $this->body = null;
     $this->p_date = null;
     $this->category = null;
     $this->flags = null;
     $this->regions = null;
     $this->price = null;
  }

}
