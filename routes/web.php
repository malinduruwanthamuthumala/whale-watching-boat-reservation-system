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
Route::resource('/invoice', 'BookingController');
Route::get('/ongoing_trips','TripController@OngoingTrips');
Route::get('/res_details','TripController@Resdetails');
Route::get('/endtrip','TripController@endtrip');
Route::get('/payement_details','TripController@payement_details');
Route::get('/payement_history','TripController@payement_history');
Route::get('/payhistory','TripController@payhistory');


Route::get('/reportsboat','ReportboatownerController@index');
Route::get('/monthearnBoat','ReportboatownerController@monthreportBoat');

Route::get('/confirmboat','AdminController@confirmboat');
Route::get('/moredetailsboats','AdminController@getmoredetails');

Route::get('/setconfirmation','AdminController@setconfirmation');
Route::get('/set_price','AdminController@set_price');
Route::get('/update_pricing','AdminController@update_pricing');
Route::get('/update_discounts','AdminController@update_discounts');
Route::get('/admin_payement_info','AdminController@admin_payement_info');
Route::get('/searchpayement','AdminController@searchpayement');
Route::get('/payinfo','AdminController@payinfo');
Route::get('/ongoing_reserve_admin','AdminController@ongoing_reserve_admin'); 
Route::get('/search','Admincontroller@search');
Route::get('/earning_reports_annual','Admincontroller@earning_reports_annual');
Route::get('/live_search', 'AdminController@index');
Route::get('/live_search/action', 'AdminController@action')->name('live_search.action');
Route::get('/reports_annual',function(){
    return view('adminfunctions.reports_annual');
}); 
Route::get('/reports_revenue_annual',function(){
    return view('adminfunctions.reports_annual_revenue');
}); 
Route::get('/earning_reports_revenue','Admincontroller@earning_reports_revenue');

Route::get('/getPDFmirissaa', 'PDFController@getPDFmirissaa');
Route::get('/displayPDFmirissaa','PDFController@displayPDFmirissaa');
Route::get('/displayPDFcolombo','PDFController@displayPDFcolombo');
Route::get('/getPDFtrinco', 'PDFController@getPDFtrinco');
route::get('/displayPDFtrinco','PDFController@displayPDFtrinco');
Route::get('/getPDFcolombo', 'PDFController@getPDFcolombo');
Route::get('/month', 'PDFController@month');

Route::get('/displymonth', 'PDFController@displymonth');
// Route::get('/live_search/action', 'AdminController@action')->name('live_search.action');
Route::get('/live/action','TripController@action')->name('live.action');
Route::get('/search_history','TripController@search_history');
Route::get('/status',function(){
    return view('comment');


}); 
Route::get('sendmail','CommentsControlle@mail');
Route::get('/show','CommentsControlle@show');
Route::get('/user_details','AdminController@view_user');
Route::get('/payement_details_admin','TripController@payement_details_admin');
Route::get('/pay','TripController@pay');
