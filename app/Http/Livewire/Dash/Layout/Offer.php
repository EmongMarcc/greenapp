<?php

namespace App\Http\Livewire\Dash\Layout;

use Livewire\Component;
use App\Models\touroffers;
use App\Models\countryblogs;
class Offer extends Component
{
    public $readyToLoad = false,$countryblogs;
    public $touroffers;

    public function mount(){
    $this->countryblogs =  countryblogs::select('*')->get();
    $this->touroffers =  touroffers::select('*')->orderBy('id','desc')->get();
    }
    public function render()
    {
        return view('livewire.dash.layout.offer');
    }
}
