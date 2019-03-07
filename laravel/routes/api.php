<?php

use Illuminate\Http\Request;

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

//login
Route::group(['namespace' => 'API'], function () {

    Route::post('/login', 'UserController@login');
    Route::post('/register', 'UserController@register');

    //excute senario
    Route::get('/senario', 'SenarioController@set');

});


Route::group(['middleware' => 'auth:api', 'namespace' => 'API'], function () {
    Route::get('/details', 'UserController@details');
    //bedroom control
    Route::get('/mosbedroom', 'BedroomController@getmos');
    Route::get('/bedstate', 'BedroomController@state');
    Route::get('/bedroomturnon', 'BedroomController@on');
    Route::get('/bedroomturnoff', 'BedroomController@off');

    //livingroom control

    //num 5 for status of lamp in living room
    Route::get('/livinglampstate', 'LivingRoomController@statelamp');
    //num 6 for turn on lamp in living room
    Route::get('/livingturnon', 'LivingRoomController@turnon');
    //num 7 for turn off lamp in living room
    Route::get('/livingturnoff', 'LivingRoomController@turnoff');
    //num 8 for status of air
    Route::get('/livingair', 'LivingRoomController@air');
    //num 9 for turn on air in living room
    Route::get('/livingairturnon', 'LivingRoomController@turnonair');
    //num 10 for turn off air in living room
    Route::get('/livingairturnoff', 'LivingRoomController@turnoffair');
    //num 11 for status of cur
    Route::get('/livingcur', 'LivingRoomController@cur');
    //num 12 for turn on cur in living room
    Route::get('/livingcurturnon', 'LivingRoomController@turnoncur');
    //num 13 for turn off cur in living room
    Route::get('/livingcurturnoff', 'LivingRoomController@turnoffcur');

    //kichen control KichenController

    //num 14 for status of sensor in kichen
    Route::get('/kichenstate', 'KichenController@state');
    //num 18 for kichen lamp
    Route::post('/kichencolor', 'KichenController@color');


    //lamp senario
    Route::post('/addlamp', 'LampController@add');
    Route::get('/getlamp', 'LampController@get');
    Route::post('/updatelamp', 'LampController@update');

    //air senario
    Route::post('/addair', 'AirController@add');
    Route::get('/getair', 'AirController@get');
    Route::post('/updateair', 'AirController@update');

    //setting

    // num 15 for status of setting
    Route::get('/settingstate', 'SettingController@state');
    //num 16 for turn on of setting
    Route::get('/settingturnon', 'SettingController@turnon');
    //num 17 for turn off of setting
    Route::get('/settingturnoff', 'SettingController@turnoff');

    //temp
    //num 19 for state of temp
    Route::get('/gettemp', 'TempController@get');
    //num 20 for set temp
    Route::post('/settemp', 'TempController@set');

    //data
    //num 21 for tempbody temp
    Route::get('/insidetemp', 'DatController@inside');
    //num 22 for sensor
    Route::get('/sensor', 'DatController@sensor');
    //num 23 for foren
    Route::get('/foren', 'DatController@foren');
    //num 24 for data
    Route::get('/data', 'DatController@data');


    Route::get('/convert', 'DatController@convert');


});