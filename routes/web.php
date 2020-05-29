<?php

use App\Mail\ApplicationCreated;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home',
    'HomeController@index'
)->name('all-applications');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});


/**
 * Landing routes
 */
Route::get('/', function () {
})->name('landing');

Route::get('/{id}',
    'LandingController@showOneTour'
)->name('tour-data-one');

Route::post('/{id}',
    'LandingController@showOneTour'
)->name('tour-data-one');

Route::get('/one-sale{id}',
    'LandingController@showOneSale'
)->name('sale-data-one');

Route::post('/one-sale{id}',
    'LandingController@showOneSale'
)->name('sale-data-one');

Route::get('/email', function (){return new ApplicationCreated();
});

Route::get('/', 'LandingController@allData')->name('landing');


/**
 * Tour routes
 */
Route::get('/tour', 'TourController@allData')->name('tour');

Route::post('/tour{id}',
    'TourController@showOneTour'
)->name('tour-data');

Route::get('tour{id}',
    'TourController@showOneTour'
)->name('tour-data');



/**
 * Cruise routes
 */
Route::get('/cruise', function () {
    return view('container_cruise');
})->name('cruise');

Route::get('/cruise', 'CruiseController@allData')->name('cruise');

Route::get('/cruise{id}',
    'CruiseController@showOneCruise'
)->name('cruise-data-one');

Route::post('/cruise{id}',
    'CruiseController@showOneCruise'
)->name('cruise-data-one');


/**
 * Sale routes
 */
Route::get('/sale', function () {
    return view('sales');
})->name('sale');

Route::get('/sale', 'SaleController@allData')->name('sale');

Route::get('/sale{id}',
    'SaleController@showOneSale'
)->name('sale-data');

Route::post('/sale{id}',
    'SaleController@showOneSale'
)->name('sale-data');


/**
 * About and contact routes
 */
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


/**
 * Send feedback route
 */
Route::post('/contact',
    'AfeedbackController@sendFeedback'
)->name('send_feedback');


/**
 * Application routes
 */

Route::get('/all_applications', function () {
    return view('all_applications');
})->name('all_application');

Route::post('/{id}',
    'ApplicationController@submitPopularTourApplication'
)->name('application-data-popular_tour');

Route::post('/one-sale{id}',
    'ApplicationController@submitSpecialOfferApplication'
)->name('application-data-special_offer');

Route::post('/sale{id}',
    'ApplicationController@submitSpecialOfferApplication'
)->name('application-data-special_offer');

Route::post('/tour{id}',
    'ApplicationController@submitTourApplication'
)->name('tour-data-application');

Route::post('/cruise{id}',
    'ApplicationController@submitCruiseApplication'
)->name('application-data-cruise');

Route::get('/all_applications', 'HomeController@index')->name('home');

Route::post('/home{id}',
    'ApplicationController@showOnePopularTour'
)->name('popular-tour-data-one');
