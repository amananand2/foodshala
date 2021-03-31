<?php
Route::view('/', 'welcome');
Route::get('/login/restaurant', 'Auth\LoginController@showRestaurantLoginForm');
Route::get('/login/customer', 'Auth\LoginController@showCustomerLoginForm');
Route::get('/register/restaurant', 'Auth\RegisterController@showRestaurantRegisterForm');
Route::get('/register/customer', 'Auth\RegisterController@showCustomerRegisterForm');

Route::post('/login/restaurant', 'Auth\LoginController@restaurantLogin');
Route::post('/login/customer', 'Auth\LoginController@customerLogin');
Route::post('/register/restaurant', 'Auth\RegisterController@createRestaurant');
Route::post('/register/customer', 'Auth\RegisterController@createCustomer');

/**** Customer Routes ****/
Route::group(['middleware' => 'auth:customer'], function ()
{
Auth::routes();
Route::view('/customer', 'customer');
Route::any('/order', 'CustomerController@order')->name('order');
});
Route::get('/view_menu', 'CustomerController@view_menu')->name('view_menu');

/**** Restaurant Routes ****/
Route::group(['middleware' => 'auth:restaurant'], function ()
{
    Auth::routes();
    Route::get('/restaurant', function(){
        return view('restaurant');
    })->name('restaurant');
    Route::get('/menu', 'RestaurantController@menu')->name('menu');
    Route::get('/add_menu', 'RestaurantController@add_menu')->name('add_menu');
    Route::post('/add_item', 'RestaurantController@add_item')->name('add_item');
    Route::get('/view_order', 'RestaurantController@view_order')->name('view_order');
});