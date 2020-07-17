<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
    return view('index.index');
});

/*Route::group(['prefix' => 'admin'], function() {
    Route::get('administration', function () {
       return view ('admin.administration');
    })->name('admin.administration');*/

Route::group(['prefix' => 'admin'], function() {
    Route::get('administration', [
        'uses' => 'AdminController@addEditDB',
        'as' => 'admin.administration'
    ]);
    Route::post('administration', [
        'uses' => 'AdminController@addZipCodeToDB',
        'as' => 'admin.zipCodePost'
    ])->name('zipCodePost');
});
/*Route::get('admin/administration', [
    'uses' => 'AdminController@addEditDB',
    'as' => 'admin.administration'
]);*/

/*Route::post('admin/administration', 'AdminController@addEditDB')->name('zipCheck.post');*/

Route::get('track', function() {
   return view('races.index');
});

Route::get('races/circuit', [
    'uses' => 'CircuitController@getCircuit',
    'as' => 'races.circuit'
    ]);

Route::get('driver/index', [
    'uses' => 'DriverController@showDrivers',
    'as' => 'drivers.index'
]);

Route::get('ajax',function() {
    return view('message');
});

Route::post('/getmsg','AjaxController@index');

Route::get('ajaxRequest', 'AjaxController@ajaxRequest');
//*************************************************************//

Route::post('ajaxRequest', 'AjaxController@ajaxRequestPost')->name('ajaxRequest.post');
//Route::post('admin/administration', 'AdminController@ajaxRequestPost')->name('zipCheck.post');

/*Route::get('races/circuit', 'CircuitController@getCircuit')->name('races.circuit');*/

/*Route::post('admin/administration', [
    'uses' => 'AdminController@addEditDB',
    'as' => 'admin.administration'
]);*/

