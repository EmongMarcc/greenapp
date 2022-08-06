<?php

namespace App\Http\Livewire\Layout;

use App\Models\countryblogs;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        return view('livewire.layout.navigation',[
          'countryblogsAmerica' => countryblogs::select('*')->where('regions','America')->get(),
          'countryblogsAsia' => countryblogs::select('*')->where('regions','Asia')->get(),
          'countryblogsCIS' => countryblogs::select('*')->where('regions','CIS')->get(),
          'countryblogsEurope' => countryblogs::select('*')->where('regions','Europe')->get(),
          'countryblogsMiddleEastAfrica' => countryblogs::select('*')->where('regions','MiddleEastAfrica')->get(),
          'countryblogsOceania' => countryblogs::select('*')->where('regions','Oceania')->get(),
        ]);
    }
}
