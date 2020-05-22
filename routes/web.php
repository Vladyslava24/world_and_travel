<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/**
 * Basic routes
 */


Route::get('/', function () {
})->name('landing');


Route::post('/send', 'MailController@send')->name('send');

//Route::get('/', 'SpecialOfferController@allData')->name('landing');

Route::get('/', 'LandingController@allData')->name('landing');



/*
Route::get('/tour', function () {
    return view('container_tour');
})->name('tour');
*/

Route::get('/tour', 'TourController@allData')->name('tour');

Route::post('/tour{id}',
    'TourController@showOneTour'
)->name('tour-data');

Route::get('tour{id}',
    'TourController@showOneTour'
)->name('tour-data');



/*
Route::get('/tour/{id}',
    'TourController@showOneTour'
)->name('tour-data');

Route::post('/tour/{id}',
    'TourController@showOneTour'
)->name('tour-data');
*/


Route::get('/cruise', function () {
    return view('container_cruise');
})->name('cruise');

Route::get('/cruise', 'CruiseController@allData')->name('cruise');

Route::get('/sale', function () {
    return view('sales');
})->name('sale');

Route::get('/sale', 'SaleController@allData')->name('sale');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/all_applications', function () {
    return view('all_applications');
})->name('all_application');


/*******************/

Route::get('/one-sale{id}',
    'LandingController@showOneSale'
)->name('sale-data-one');

Route::post('/one-sale{id}',
    'LandingController@showOneSale'
)->name('sale-data-one');


Route::get('/sale{id}',
    'SaleController@showOneSale'
)->name('sale-data');

Route::post('/sale{id}',
    'SaleController@showOneSale'
)->name('sale-data');


Route::get('/{id}',
    'LandingController@showOneTour'
)->name('tour-data-one');

Route::post('/{id}',
    'LandingController@showOneTour'
)->name('tour-data-one');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/all_applications', 'HomeController@index')->name('home');


Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});





