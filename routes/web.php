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

Route::get('/','HomeController@index')->name('welcome');

Route::get('/user', function () {
    return view('user');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/ac', function () {
    return view('ac-repair');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/booking', function () {
    return view('booking');
});





Route::get('pro' , 'ProfilesController@index');

Auth::routes(['register'=>false]);

Route::get('/','HomeController@index')->name('welcome');

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function (){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider','SliderController');
    Route::resource('category','CategoryController');
});