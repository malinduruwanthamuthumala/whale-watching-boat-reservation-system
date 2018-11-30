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

Route::get('/', 'PagesController@index');
Route::resource('/boats','BoatsController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/edit' ,'HomeController@edit');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/whales',function(){
    return view('whales');
});
Route::get('/dashboardboat',function(){
    return view('users.boatowner');
});
Route::get('/dashboardadmin', function(){
   return view('boatownerfunctions.index');
});
Route::post('/boatregistration','BoatsController@store');
Route::get('/createboat',function(){
    return view('boatownerfunctions.addnewboat');
});
Route::get('/deleteboat','BoatsController@deleteboatview');

Route::post('/boatedit','BoatsController@update');
Route::get('/tripscreate','TripController@index');
Route::post('/addtrip','TripController@AddNewTrip');
Route::get('/reserve','ReservController@index');
Route::post('/changloc','ReservController@selectlocation');
Route::resource('/book','BookingController');

Route::get('/charts', 'ChartController@index');
Route::get('/getPDF', 'PDFController@getPDF');
Route::get('/reports',function(){
    return view('adminfunctions.reports');
}); 

Route::get('/getPDFmirissaa', 'PDFController@getPDFmirissaa');
Route::get('/getPDFtrinco', 'PDFController@getPDFtrinco');
Route::get('/getPDFcolombo', 'PDFController@getPDFcolombo');
Route::get('/month', 'PDFController@month');

Route::get('/ongoing_trips','TripController@OngoingTrips');
Route::get('/res_details','TripController@Resdetails');
Route::get('/endtrip','TripController@endtrip');

//make route to invoice
Route::resource('/invoice', 'BookingController');


// Route::get('/invoice', 'InvoiceController@generateinvoice');
//  Route::get('/invoice2', 'BookingController@generateinvoice');

