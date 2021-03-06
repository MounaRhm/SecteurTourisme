<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\BateauController;
use App\Http\Controllers\VolController;
use App\Models\Bateau;
use Illuminate\Support\Facades\Route;
use App\Models\Vol;
use App\Models\Voyage;



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


Route::get('/', function () {
    return view('accueil');
    
});
Route::get('/vols', function () {
    return view("vols",["vols" => Vol::all()]); 
    
});
Route::get('/voyages', function () {
    return view("voyages",["voyages" => Voyage::all()]); 
    
});
Route::get('/bateaux','BateauController@index'); 
    



    Route::get('hotels',[HotelController::class,'allHotels']);


   // Route::get('users',[UserController::class,'allUsers']);
    
    //Route::get('voyages',[VoyageController::class,'allVoyages']);


    //Route::get('bateaux',[BateauController::class,'allBateaux']);

Route::get('/contact', function () {
    return view('contact');
});

// ADMIN ROUTEs

Route::get('/admin','Admin\AdminController@statistique');

// ADMIN HOTEL
Route::get('/admin/hotels','Admin\HotelController@index')->name('hotels');
Route::get('/admin/hotels/create','Admin\HotelController@create')->name('newHotel');
Route::put('/admin/hotels','Admin\HotelController@update');
Route::post('/admin/hotels','Admin\HotelController@store');
Route::get('/admin/hotels/{id}','Admin\HotelController@edit');
Route::delete('/admin/hotels/{id}','Admin\HotelController@destroy');

//ADMIN VOLS
Route::get('/admin/vols','Admin\VolController@index');
Route::get('/admin/vols/create','Admin\VolController@create');
Route::put('/admin/vols','Admin\VolController@update');
Route::post('/admin/vols','Admin\VolController@store');
Route::get('/admin/vols/{id}','Admin\VolController@edit');
Route::delete('/admin/vols/{id}','Admin\VolController@destroy');
//ADMIN BATEAU
Route::get('/admin/bateaux','Admin\BateauController@index');
Route::put('/admin/bateaux','Admin\BateauController@update');
Route::get('/admin/bateaux/create','Admin\BateauController@create');
Route::post('/admin/bateaux','Admin\BateauController@store');
Route::get('/admin/bateaux/{id}','Admin\BateauController@edit');
Route::delete('/admin/bateaux/{id}','Admin\BateauController@destroy');
//ADMIN ABonnnes
Route::get('/admin/abonnes','Admin\AbonneController@index');
Route::get('/admin/abonnes/create','Admin\AbonneController@create');
Route::put('/admin/abonnes','Admin\AbonneController@update');
Route::post('/admin/abonnes','Admin\AbonneController@store');
Route::get('/admin/abonnes/{id}','Admin\AbonneController@edit');
Route::delete('/admin/abonnes/{id}','Admin\AbonneController@destroy');

//ADMIN VOYAGE
Route::get('/admin/voyages','Admin\VoyageController@index');
Route::get('/admin/voyages/create','Admin\VoyageController@create');
Route::put('/admin/voyages','Admin\VoyageController@update');
Route::post('/admin/voyages','Admin\VoyageController@store');
Route::get('/admin/voyages/{id}','Admin\VoyageController@edit');
Route::delete('/admin/voyages/{id}','Admin\VoyageController@destroy');

//ADMIN Useres
Route::get('/admin/users','Admin\UserController@index');
Route::get('/admin/users/create','Admin\UserController@create');
Route::put('/admin/users','Admin\UserController@update');
Route::post('/admin/users','Admin\UserController@store');
Route::get('/admin/users/{id}','Admin\UserController@edit');
Route::delete('/admin/users/{id}','Admin\UserController@destroy');
