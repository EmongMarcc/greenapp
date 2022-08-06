<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Page\Main;
use App\Http\Livewire\Page\Countryprofile;
use App\Http\Livewire\Page\Hotelsinfo;
use App\Http\Livewire\Page\Tourpacks;
use App\Http\Livewire\Page\Touroffers;
use App\Http\Livewire\Page\Contacts;
use App\Http\Livewire\Page\News;
use App\Http\Livewire\Page\Travrestrict;
use App\Http\Livewire\Page\Touractivity;
use App\Http\Livewire\Page\Activitypages;
use App\Http\Livewire\Page\About;
use App\Http\Livewire\Page\Offerpage;
use App\Http\Livewire\Dash\Page\Analytics;
use App\Http\Livewire\Dash\Page\Dashpacks;
use App\Http\Livewire\Dash\Layout\Offer;
use App\Http\Livewire\Dash\Page\Countrylist;
use App\Http\Controllers\sendEmail;
use App\Http\Controllers\visareq;
use App\Http\Controllers\offerposts;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>'HtmlMinifier'], function(){
  Route::get('/contact-us', Contacts::class);
  Route::get('/news', News::class);
  Route::get('/about-us', About::class);
  Route::get('/travelrestrictions', Travrestrict::class);
  Route::get('/touractivities', Touractivity::class);
  Route::get('/touractivities/{id}', Activitypages::class);
  Route::get('/', Main::class);
  Route::get('/register', Main::class);
  Route::get('country/{id}', Countryprofile::class);
  // Route::get('hotels/info/{id}', Hotelsinfo::class);
  Route::get('tourpacks/info/{id}', Tourpacks::class);
  Route::get('offer/tour/{id}', Offerpage::class);
  Route::get('offers', Touroffers::class);
  Route::middleware(['auth:sanctum', 'verified'])->get('dash/analytics', Analytics::class);
  Route::middleware(['auth:sanctum', 'verified'])->get('dash/countrylists/{id}', Countrylist::class);
  Route::middleware(['auth:sanctum', 'verified'])->get('dash/tourpacks', Dashpacks::class);
  Route::middleware(['auth:sanctum', 'verified'])->get('dash/touroffers', Offer::class);
  Route::post('/deleteTours/{id}',[offerposts::class,'deleteTours']);
  Route::post('/requirements/{id}',[visareq::class,'addPost']);
  Route::post('/offerposts',[offerposts::class,'addPost']);
  Route::post('/send-email',[sendEmail::class,'index']);
  Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');
});
