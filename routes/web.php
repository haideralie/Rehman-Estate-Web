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


/*
	front page of the website 
*/
Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@loginform');


/*
	about page of the web site 		
*/

Route::get('/about', 'HomeController@about');

/*
	contact us  page of the web site 		
*/

Route::get('/contact_us', 'HomeController@contact_us');


/*
	product  page of the web site 		
*/

Route::get('/product', 'ProductController@index');


/*
	contact us  		
*/

Route::POST('/storeContactUs', 'HomeController@storeContactUs');



/*---------------Admin side Route-------------------*/


/**/
Route::get('/admin-home', 'admin\HomeController@index');


/**/
Route::get('/admin-contact', 'admin\HomeController@contact');

/**/
Route::get('/admin-view-single-contact-details/{id}', 'admin\HomeController@view_single_contact_details')
->name('view_single_contact_details');


/**/
Route::get('/admin-plot-type', 'PlotTypeController@create');


Route::POST('/admin-store-plot-type', 'PlotTypeController@store');

/**/
Route::get('/admin-view-plot-type', 'PlotTypeController@index');

Route::get('/admin-view-plot-type', 'PlotTypeController@index');
 

Route::delete('/admin-delete-plot-type/{id}', 'PlotTypeController@destroy');

/**/
Route::get('/admin-view-plot', 'PlotController@index');


/**/
Route::get('/admin-add-plot', 'PlotController@create');


/**/
Route::POST('/admin-store-plot', 'PlotController@store');



Route::get('/admin-view-single-plot-detail/{id}', 'PlotController@view_single_plot_details');

Route::POST('/admin-update-plot', 'PlotController@update');

Route::get('/admin-edit-plot/{id}', 'PlotController@edit');

Route::delete('/admin-delete-plot/{id}', 'PlotController@destroy');

/*
	property types 
*/
Route::get('/view-property-type/{id}', 'HomeController@view_property_type');

Route::get('/user-booking-form/{id}', 'HomeController@view_booking_form');


Route::POST('/user-booked-property', 'BookedPlotController@store');

Route::get('/admin-view-booked-plots', 'BookedPlotController@index');
