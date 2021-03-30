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

Route::get('/', function () {
    return view('welcome');
   
});
Route::get("/signups","App\Http\Controllers\SignupController@index");
Route::get("/signups/create","App\Http\Controllers\SignupController@create");
Route::post("/signups","App\Http\Controllers\SignupController@store");
Route::get("/signups{signup}","App\Http\Controllers\SignupController@show");
Route::get("/signups{signup}/edit","App\Http\Controllers\SignupController@edit");
Route::put("/signups{signup}","App\Http\Controllers\SignupController@update");
Route::delete("/signups{signup}","App\Http\Controllers\SignupController@destroy");