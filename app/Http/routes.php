<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Models\Light;

Route::get('/', function () {
    $lights =  Light::orderBy('floor', 'asc')->get();

    return view('index', [
        'lights' => $lights
    ]);
});

//Route::group(['middleware' => ['web']], function () {
//    Route::resource('dashboard', 'DashboardController');
//});