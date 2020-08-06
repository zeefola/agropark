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
    return view('welcome');
});

Route::get('/contact-us' , 'homepageController@contactUs');
Route::get('/about-us' , 'homepageController@aboutUs');
Route::get('/our-team' , 'homepageController@ourTeam');
Route::get('/partners' , 'homepageController@partners');
Route::get('/gallery' , 'homepageController@gallery');
Route::get('/bulletin' , 'homepageController@bulletin');
Route::get('/brochure' , 'homepageController@brochure');
Route::get('/faq' , 'homepageController@faq');
Route::get('/graduate-trainee' , 'homepageController@graduateTrainee');


Route::post('/contact-us' , 'homepageController@contactusConfirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
