<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('country','Country\CountryController@country');
Route::get('country/{id}','Country\CountryController@countryByID');
Route::post('country','Country\CountryController@countrySave');

//for updating the record
Route::put('country/{country}','Country\CountryController@countryUpdate');

//for deleting the record
Route::delete('country/{country}','Country\CountryController@countryDelete');
