<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class Hotelsinfo extends Component
{
  public $responseView,$errView;
  public $responseimages,$errimages;
  public $responsereview,$errreview;
  public $roomId,$hotelId,$loadImages = false;


    public $adults1='1',$pageNumber='1',$pageSize='25',$checkOut,$checkIn,$sortOrder='PRICE',$locale='en_US',$currency='AED';
  public function mount($id){
    $this->checkIn=strval(\Carbon\Carbon::now()->format('Y-m-d'));
    $this->checkOut=strval(\Carbon\Carbon::tomorrow()->format('Y-m-d'));
    $this->hotelId = $id;
    $this->dataFetchHotel($id);
    $this->dataReviewHotel($id);
    $this->dataImageHotel($id);
        $this->loadImages = true;
  }

  public function dataImageHotel($id){

    $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://hotels4.p.rapidapi.com/properties/get-hotel-photos?id=".$id,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: hotels4.p.rapidapi.com",
		"x-rapidapi-key: 2087263f13msh3a267b04dd50ee0p1184aajsn1349e22e3af1"
	],
]);

$this->responseimages = curl_exec($curl);
$this->errimages = curl_error($curl);
curl_close($curl);

  }
  public function dataReviewHotel($id){
    $curl = curl_init();

    curl_setopt_array($curl, [
    	CURLOPT_URL => "https://hotels4.p.rapidapi.com/reviews/list?id=".$id."&page=1&loc=en_US",
    	CURLOPT_RETURNTRANSFER => true,
    	CURLOPT_FOLLOWLOCATION => true,
    	CURLOPT_ENCODING => "",
    	CURLOPT_MAXREDIRS => 10,
    	CURLOPT_TIMEOUT => 30,
    	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    	CURLOPT_CUSTOMREQUEST => "GET",
    	CURLOPT_HTTPHEADER => [
    		"x-rapidapi-host: hotels4.p.rapidapi.com",
    		"x-rapidapi-key: 2087263f13msh3a267b04dd50ee0p1184aajsn1349e22e3af1"
    	],
    ]);

    $this->responsereview = curl_exec($curl);
    $this->errreview = curl_error($curl);
    curl_close($curl);
  }
  public function dataFetchHotel($id){
    $curl = curl_init();
    curl_setopt_array($curl, [
       CURLOPT_URL => "https://hotels4.p.rapidapi.com/properties/get-details?id=".$id."&checkIn=".$this->checkIn."&checkOut=".$this->checkOut."&currency=AED&locale=en_US&adults1=1",
        CURLOPT_RETURNTRANSFER => true,
         CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
               CURLOPT_HTTPHEADER => [
                   "x-rapidapi-host: hotels4.p.rapidapi.com",
                     "x-rapidapi-key: 2087263f13msh3a267b04dd50ee0p1184aajsn1349e22e3af1"
                    ],
                  ]);
                  $this->responseView = curl_exec($curl);
                  $this->errView = curl_error($curl);
                  curl_close($curl);
  }

    public function render()
    {
        return view('livewire.page.hotelsinfo')
        ->extends('layouts.Home')
        ->section('content');
    }
}
