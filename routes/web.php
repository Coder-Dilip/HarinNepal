<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', function(){
   return view('harin');
});

Route::get('/intro', function(){
   return view('intro');
});

Route::get('/initiatives/save-nijgadh', function(){
   return view('savenijgadh');
});

Route::get('/initiatives/oxygen-is-my-birthright', function(){
   return view('oxygen_is_my_birthright');
});

Route::get('/initiatives', function(){
   return view('initiatives');
});
