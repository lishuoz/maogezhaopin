<?php

// use App\Job;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/filter', 'JobController@filter');

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::resource('jobs', 'JobController');

Route::get('/home', 'HomeController@index');

