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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pages','PageController');
Route::resource('pageA','PageAController');
Route::resource('pageB','PageBController');
Route::resource('pageC','PageCController');
Route::resource('pageD','PageDController');
Route::resource('pageE','PageEController');
Route::resource('pageF','PageFController');
Route::resource('pageG','PageGController');
Route::resource('pageH','PageHController');
Route::resource('pageI','PageIController');
Route::resource('pageJ','PageJController');
Route::resource('pageK','PageKController');
Route::resource('pageL','EndPointController');
