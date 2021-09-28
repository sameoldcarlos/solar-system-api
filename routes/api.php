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

Route::get('planets', 'PlanetController@index');

Route::get('planet/{id}', 'PlanetController@show');

Route::post('planet', 'PlanetController@store');

Route::put('planet/{id}', 'PlanetController@update');

Route::delete('planet/{id}', 'PlanetController@destroy');
