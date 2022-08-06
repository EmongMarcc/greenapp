<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;

use App\Models\countryblogs;
use App\Models\teamwhatsapps;
use App\Models\touristagents;
class Blogpart extends Component
{

 public $readyToLoad = false,$searchTerm;
 public function loadPosts()
{
  $this->readyToLoad = true;
}
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.layout.blogpart', [
            'countryblogs' => $this->readyToLoad
                ? countryblogs::select('*')->where([['title', 'LIKE', $searchTerm],['status','Active']])->limit(4)->get()
                : [],
            'teamwhatsapps' => $this->readyToLoad
                ? teamwhatsapps::with('touristagents')->get()
                : [],
        ]);
    }
}
