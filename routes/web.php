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

// Route::get('/aaa', 'ProductController@addProduct');

// Route::post('/aaaa', 'ProductController@addProduct1');

Auth::routes();

// Check Role Middleware
Route::middleware(['roles'])->group(function () {
	Route::get('/superadmin', [
		'uses'=>'TestController@superadmin',
		'roles' => ['superadmin']
	]);
	Route::get('/admin', [
		'uses'=>'TestController@admin',
		'roles' => ['admin']
	]);
	Route::get('/user', [
		'uses'=>'TestController@user',
		'roles' => ['user']
	]);
	Route::get('/all', [
		'uses'=>'TestController@all',
		'roles' => ['superadmin','admin','user']
	]);
	Route::get('/listProduct', [
		'uses'=>'ProductController@listPorduct',
		'roles' => ['superadmin','admin','user']
	]);
	Route::get('/addProduct', [
		'uses'=>'ProductController@addProduct',
		'roles' => ['superadmin','admin','user']
	]);
	Route::get('/editProduct/{id}', [
		'uses'=>'ProductController@editProduct',
		'roles' => ['superadmin','admin','user']
	]);

	
});
// Form submit process
Route::post('/addProduct', 'ProductController@addNewProduct');
Route::post('/editProduct', 'ProductController@editProductAction');

// end form submit process
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@sams')->name('home');

Route::get("/download-pdf","HomeController@downloadPDF");


// Unautorized URL
Route::get('/securePage', 'TestController@unauthrize');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout'); //Just added to fix issue

