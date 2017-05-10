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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/add-to-cart/{id}', 'MenuController@getCartItem')->name('menu.addItemToCart');
Route::get('/cart', 'MenuController@getItemFromCart')->name('menu.cart');
Route::get('/Shop', 'MenuController@display')->name('shop.index');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index')->name('home');

Route::post('/login/custom', [
				'uses'=>'LoginController@login',
				'as'=>'login.custom'
			]);

Route::get('/users/confirmation/{id}','Auth\RegisterController@confirmation')->name('confirmation');
Route::group(['prefix'=>'admin','middleware'=>['auth', 'admin']], function(){		
		Route::get('/dashboard', 'DashboardController@index')->name('admin.index');
		Route::resource('menu', 'MenuController');
		Route::resource('user', 'UserController');
});
Route::resource('About', 'AboutController');

Route::resource('Profile', 'ProfileController');


Route::get('Contact', 
  ['as' => 'Contact', 'uses' => 'ContactController@create']);
Route::post('Contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);
