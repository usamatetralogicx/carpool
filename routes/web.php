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
    return view('index');
});
Route::get('/login','LoginController@index');
Route::get('/sign-up','SignUpController@index');
Route::get('/home','HomeController@index');
Route::get('/about','AboutController@index');
Route::get('/driver','DriverController@index');
Route::get('/taxi','TaxiController@index');
Route::get('/single-taxi','SingleTaxiController@index');
Route::get('/book-ride','BookRideController@index');
Route::get('offer-ride','OfferRideController@index');
Route::post('post_offer_ride','OfferRideController@create');
Route::any('search_ride','OfferRideController@search');
Route::get('single/{id}','OfferRideController@single');
Route::post('confirm/{id}','OfferRideController@confirm');
Route::get('driver_list/{id}','OfferRideController@get');
Route::get('confirm/{id}','OfferRideController@ride_status');
Route::get('/blog','BlogController@index');
Route::post('update_photo','ProfileController@update_photo');
Route::get('/blog-details','BlogDetailController@index');
Route::get('/contact','ContactController@index');
Route::get('/dashboard','DashboardController@index');
Route::get('/profile','ProfileController@index');
Route::post('post','CarController@save');
Route::post('post_company','CarController@save_model');
Route::post('signup','SignUpController@save');
Route::get('verify_get','SignUpController@verify_get');
Route::post('verify','SignUpController@verify');
Route::post('Login','SignUpController@login');
Route::get('forgot','SignUpController@forgot');
Route::post('update','ProfileController@update');
Route::post('closed_account','ProfileController@closed_account');
Route::post('sendpasswordtoken','SignupController@sentPasswordResetLink');
Route::post('newpassword','SignupController@newPassword');
Route::post('updatepassword','SignupController@updatePassword');
Route::get('logout','SignupController@logout');
Route::get('photo','ProfileController@photo');
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Route::get('/redirect/google', 'SocialAuthFacebookController@redirectgoogle');
Route::get('/callback/google', 'SocialAuthFacebookController@callbackgoogle');
Route::get('transactions','ProfileController@transactions');
Route::get('new_password','ProfileController@password');
Route::post('update_password','ProfileController@update_password');
Route::get('close_account','ProfileController@close');
Route::get('car','CarController@car');
Route::get('phone_verification','ProfileController@phone_verification');

#admin panel starts
Route::get('admin', function () {
    return view('admin/login');
});
Route::get('admin_logout','UserController@logout');
Route::post('admin_login','UserController@login');
Route::get('users_table','UserController@index');
Route::group(['prefix'=>'users'],function(){
	Route::post('delete/{id}','UserController@delete');
	Route::get('block/{id}','UserController@status');	
});
Route::get('drivers_table','DriverController@index');
Route::group(['prefix'=>'drivers'],function(){
Route::post('delete/{id}','DriverController@delete');
	Route::get('block/{id}','DriverController@status');
});
Route::group(['prefix'=>'routes'],function(){
	Route::get('form','RouteController@index');
	Route::post('add','RouteController@create');
	Route::get('allroute','RouteController@viewall');
	Route::post('delete/{id}','RouteController@delete');
	Route::get('edit/{id}','RouteController@edit');
	Route::post('update','RouteController@update');
});
