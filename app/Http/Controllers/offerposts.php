<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\touroffers;

class offerposts extends Controller
{
  public function addPost(Request $request){
  touroffers::create([
    'title' => request('title'),
    'tour_img' => request('tour_img'),
    'keywords' => request('keywords'),
    'description' => request('description'),
    'json_include' => request('json_include'),
    'offer_sitelink' => request('offer_sitelink'),
    'datepublish' => request('datepublish'),
    'datestart' => request('datestart'),
    'dateend' => request('dateend'),
    'countryId' => request('countryId')
  ]);
  return redirect('/dash/touroffers')->with('upload','Tour offers Added Successful!');
  }
  public function deleteTours($id){
      $blog = touroffers::findOrFail($id)->delete();
    return redirect('/dash/touroffers')->with('upload','TourPack Deleted Successfully.');
  }
}
