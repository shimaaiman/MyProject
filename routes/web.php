<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });


Route::prefix('dashboard')->group(function(){
	Route::get('/','Dashboard\DashboardController@index');
	Route::resource('posts', 'Dashboard\postController');

});

Route::get('/','frontsitecontroller@showhome')->name('frontsite.home');
Route::get('/contact','frontsitecontroller@showcontact')->name('frontsite.contact');
Route::get('/about','frontsitecontroller@showabout')->name('frontsite.about');


//Route::resource('users', 'Dashboard\UserController');








