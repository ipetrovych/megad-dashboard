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

Route::get('/', 'DashboardController@index');

Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('megad', 'MegaDController');
});