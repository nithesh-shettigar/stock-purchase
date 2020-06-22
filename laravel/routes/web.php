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

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('/', 'welcomeController@index');
Route::get('/a', 'welcomeController@a'); */
Route::get('/', 'welcomeController@index');
Route::post('/authenticate', 'welcomeController@authenticate');
Route::group(['middleware' => 'revalidate'], function () {
Route::group(['middleware' => 'auth'], function () {
		Route::get('/b', 'welcomeController@create');
		Route::get('/postinert', 'welcomeController@postinsert');
		
		Route::get('/dashboard', 'welcomeController@dashboard');
		Route::get('/vendor', 'welcomeController@vendor');
		Route::get('/vendordelete/{id}', 'welcomeController@vendordelete');
		Route::get('/create_vendor', 'welcomeController@create_vendor');
		Route::post('/vendorinsert', 'welcomeController@vendorinsert');
		Route::get('/vendor_edit', 'welcomeController@edit');
		Route::post('/vendorupdate', 'welcomeController@vendorupdate');
		Route::get('/customer', 'welcomeController@customer');
		Route::get('/customer_create', 'welcomeController@customer_create');
		Route::post('/customerinsert', 'welcomeController@customerinsert');
		Route::get('/customerdelete/{customer_id}', 'welcomeController@customerdelete');
		Route::get('/customer_edit', 'welcomeController@customer_edit');
		Route::post('/customerupdate', 'welcomeController@customerupdate');
		Route::get('/item', 'welcomeController@item');
		Route::get('/createitem', 'welcomeController@createitem');
		Route::post('/iteminsert', 'welcomeController@iteminsert');
		Route::get('/itemdelete/{item_id}', 'welcomeController@itemdelete');
		Route::get('/item_edit', 'welcomeController@item_edit');
		Route::post('/itemupdate', 'welcomeController@itemupdate');
		Route::get('logout', 'welcomeController@logout');
		Route::get('/purchase', 'welcomeController@purchase');
		Route::get('/create_purchase', 'welcomeController@create_purchase');
		Route::post('/purchaseinsert', 'welcomeController@purchaseinsert');
		Route::post('/billinginsert', 'welcomeController@billinginsert');
		
Route::get('/billing', 'welcomeController@billing');
Route::get('/createbilling', 'welcomeController@createbilling');
Route::get('/priceenquire', 'welcomeController@priceenquire');
		
});
});

