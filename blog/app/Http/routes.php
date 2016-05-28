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


    //routes here

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/index', function () {
    return view('5home');
    // return "home";
});
Route::get('3Add', 'PhotoController@addPicture');
Route::post('3Add', 'PhotoController@savePicture');
Route::get('list', 'PhotoController@showPictureList');
Route::get('2search','searchcontroller@show');
Route::resource('course1','search1');
Route::resource('course2','addlistcontroller');
Route::get('/addlist', 'addlistcontroller@index');
Route::get('edit', function () {
    return view('edit');
    //return "home";
});



    //return "home";

Route::get('/', function () {
    return view('welcome');
    //return "home";
});
Route::get('add', function () {
    return view('addpicture');
    //return "home";
});





Route::get('/55offers','55offerscontrollerer@show55offers');


Route::resource('course','coursecontroller');



Route::post('/store', 'coursecontroller@store');
Route::get('/55offers', 'coursecontroller@index');
Route::get('/55offers2', 'search1@index');


Route::get('/33Add', 'coursecontroller@create');



Route::get('pic/{id}', 'PhotoController@showPicture');







Route::auth();

Route::get('/home', 'HomeController@index');
