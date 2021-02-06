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

Route::get('/test', 'TestController@showTestTable');

Route::get('constructors/index', [
    'uses' => 'ConstructorsController@getResults',
    'as' => 'constructors.index'
]);

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

Route::get('track', function() {
   return view('races.index');
});

Route::get('races/circuit', [
    'uses' => 'CircuitController@getCircuit',
    'as' => 'races.circuit'
    ]);

Route::get('driver/index', [
    'uses' => 'DriverController@showErgastDrivers',
    'as' => 'drivers.index'
]);

Route::get('rosterselect/index', [
    'uses' => 'RosterSelectController@ShowAvailableDriver',
    'as' => 'roster.index'
]);
Route::get('scoring/index', [
    'uses' => 'ScoringController@ShowPicksTable',
    'as' => 'scoring.index'
]);
Route::post('/scoring/index', function () {
    //validate
    //persist
    App\Models\Test\Test::create(request(['id', 'name']));
    //redirect
});

Route::post('/teamManagers/index',[
    'uses' => 'TeamManagerController@store',
    'as' => 'teamManagers.index'
]);

Route::get('teamManagers/index',[
   'uses' => 'TeamManagerController@ShowManagers',
    'as' => 'teamManagers.index'
]);

/*Route::get('driver/index', [
    'uses' => 'DriverController@showDriverPortraits',
    'as' => 'drivers.index'
]);*/

Route::get('draft/index', [
    'uses' => 'DraftController@showAvailableDrivers',
    'as' => 'draft.index'
]);

Route::get('ajax',function() {
    return view('message');
});

Route::post('/getmsg','AjaxController@index');

Route::get('ajaxRequest', 'AjaxController@ajaxRequest');

Route::post('ajaxRequest', 'AjaxController@ajaxRequestPost')->name('ajaxRequest.post');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

/*Route::group(['prefix' => 'admin'], function() {
    Route::get('administration', function () {
       return view ('admin.administration');
    })->name('admin.administration');*/

//Route::post('admin/administration', 'AdminController@ajaxRequestPost')->name('zipCheck.post');

/*Route::get('races/circuit', 'CircuitController@getCircuit')->name('races.circuit');*/

/*Route::post('admin/administration', [
    'uses' => 'AdminController@addEditDB',
    'as' => 'admin.administration'
]);*/

/*Route::get('admin/administration', [
    'uses' => 'AdminController@addEditDB',
    'as' => 'admin.administration'
]);*/

/*Route::post("http://fflaravel.test/admin/administration", 'AdminController@addEditDB');*/
