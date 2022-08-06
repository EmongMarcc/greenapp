<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;
class Blogprofile extends Component
{
  public $response;
  public $responseSearch;
  public $err;
  public $responseView;
  public $errSearch;
  public $errView;

  public $categorySearch;
  public $adults1='1',$pageNumber='1',$destinationId,$pageSize='25',$checkOut,$checkIn,$sortOrder='PRICE',$locale='en_US';
    public function mount(){
      if ($this->destinationId) {
        $this->dataFetchHotel();
      }else {
        $this->dataSearchHotel();
      }
    }
    public function previousNumber(){
        $this->pageNumber = json_decode($this->response)->data->body->searchResults->pagination->currentPage - 1;
        $this->dataFetchHotel();
    }
    public function pageNumber(){
        $this->pageNumber = json_decode($this->response)->data->body->searchResults->pagination->nextPageNumber;
        $this->dataFetchHotel();
    }
    public function dataSearchHotel(){
      $curl = curl_init();
      curl_setopt_array($curl, [
	       CURLOPT_URL => "https://hotels4.p.rapidapi.com/locations/search?query=".$this->categorySearch."&locale=".$this->locale,
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

                    $this->responseSearch = curl_exec($curl);
                    $this->errSearch = curl_error($curl);
                    $this->checkIn=strval(\Carbon\Carbon::now()->startOfWeek()->format('Y-m-d'));
                    $this->checkOut=strval(\Carbon\Carbon::now()->endOfWeek()->format('Y-m-d'));
                    $this->destinationId = json_decode($this->responseSearch)->suggestions[0]->entities[0]->destinationId ?? '';
                    $this->dataFetchHotel();
    }
    public function dataFetchHotel(){
      $curl = curl_init();
      curl_setopt_array($curl, [
        CURLOPT_URL => "https://hotels4.p.rapidapi.com/properties/list?adults1=".$this->adults1."&pageNumber=".$this->pageNumber."&destinationId=".$this->destinationId."&pageSize=".$this->pageSize."&checkOut=".$this->checkOut."&checkIn=".$this->checkIn."&sortOrder=".$this->sortOrder."&locale=".$this->locale."&currency=AED",
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

$this->response = curl_exec($curl);
$this->err = curl_error($curl);


    }
    public function render()
    {
        return view('livewire.layout.blogprofile');
    }
}
