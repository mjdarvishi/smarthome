<?php

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


 //login
Route::get('/', function () {
    return redirect(url("/lognot"));
});
Route::post('/login', 'auth\LoginController@login');
Route::get('/logdone', function () {
    return "1";
});
Route::get('/lognot', function () {
    return "0";
});
////control of bedroom
Route::get('/mosbedroom', 'BedroomController@getmos');
Route::get('/bedroomturnon', 'BedroomController@on');
Route::get('/bedroomturnoff','BedroomController@off');
//
//
//Route::group(['middleware' => 'auth'], function () {
//    // control lamp of bedroom
//});
