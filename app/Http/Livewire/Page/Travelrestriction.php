<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\restrictions;
use App\Models\countryblogs;

class Travelrestriction extends Component
{
      public $readyToLoad = false,$response,$selected_alpha='US',$country,$selected_flag='https://res.cloudinary.com/greenappletravel-ae/image/upload/q_75,w_198,h_144/v1638795478/us_yotv1x.png';
      public $access_token_amadeus;

      public function mount(){
        $this->country = countryblogs::has('restrictions')->with('restrictions')->get();
        $url = "https://api.amadeus.com/v1/security/oauth2/token";
          $curl = curl_init($url);
          curl_setopt($curl, CURLOPT_URL, $url);
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          $headers = array(
             "Content-Type: application/x-www-form-urlencoded",
          );
          curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($curl, CURLOPT_POSTFIELDS, "grant_type=client_credentials&client_id=".config('services.amadeus.apikey')."&client_secret=".config('services.amadeus.apisecret'));

          //for debug only!
          curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
          curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

          $resp = curl_exec($curl);
          $this->access_token_amadeus = json_decode($resp)->access_token ?? '';
          curl_close($curl);

      }
      public function loadPosts(){
        $url = config('services.amadeus.production').$this->selected_alpha;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
           "accept: application/json",
           "Authorization: Bearer ".$this->access_token_amadeus,
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $resp = curl_exec($curl);
        $this->response = $resp;
        $this->readyToLoad = true;
     }
      public function selectPost($id,$flag){
          $this->selected_alpha = $id;
          $this->selected_flag = $flag;
          $this->readyToLoad = false;
          $this->loadPosts();
     }

    public function render()
    {
        return view('livewire.page.travelrestriction', [
            'rest' => $this->readyToLoad
                ? restrictions::has('countryblogs')->get()
                : []]);
    }
}
