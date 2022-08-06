<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;
use App\Models\activitycategories;
class Activityprofile extends Component
{
  public $access_token_amadeus,$response;
  public $slug;
  public $readyToLoad=false;
  public function mount(){

  }
public function loadPosts(){
   $this->readyToLoad = true;
   $this->loadReturnAct();
}
public function loadReturnAct(){
  $activities = activitycategories::select('*')->where('activity_slug',$this->slug)->get();
  $url = "https://test.api.amadeus.com/v1/shopping/activities?latitude=".$activities[0]->location['lat']."&longitude=".$activities[0]->location['long']."&radius=20";

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
     "accept: application/vnd.amadeus+json",
     "Authorization: Bearer 17wN0SL6Nq46ddtLGB6U97zyPNKn",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  $resp = curl_exec($curl);
  $this->response = $resp;
}

    public function render()
    {
        return view('livewire.layout.activityprofile',[
            'activities' => $this->readyToLoad
                ? activitycategories::select('*')->where('activity_slug',$this->slug)->get()
                : []]);
    }
}
