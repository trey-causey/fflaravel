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
    return view('index.index');
});

Route::get('track', function() {
   return view('races.index');
});

/*Route::get('races/circuit', 'CircuitController@getCircuit')->name('races.circuit');*/

Route::get('races/circuit', [
    'uses' => 'CircuitController@getCircuit',
    'as' => 'races.circuit'
    ]);

Route::get('admin/aministration', [
    'uses' => 'AdminController@addEditDB',
    'as' => 'admin.administration'
    ]);

Route::get('child', function() {
    return view('child');
});
