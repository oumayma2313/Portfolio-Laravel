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

Route::get('/','App\Http\Controllers\homecontroller@index')->name('Home.index');
Route::get('/AboutUs','App\Http\Controllers\aboutuscontroller@index')->name('AboutUs.index');
Route::get('/Contact','App\Http\Controllers\contactcontroller@index')->name('Contact.index');
Route::get('/Projects','App\Http\Controllers\projectscontroller@index')->name('Projects.index');
Route::get('/Resume','App\Http\Controllers\resumecontroller@index')->name('Resume.index');
Route::get('/Services','App\Http\Controllers\servicescontroller@index')->name('Services.index');

Route::get('/Services/{id}', 'App\Http\Controllers\servicescontroller@Detail')->name('Services.details');
Route::get('/Projects/{id}', 'App\Http\Controllers\projectscontroller@Detail')->name('Projects.details');
Route::post('/contact-me', 'App\Http\Controllers\homecontroller@contactme');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
