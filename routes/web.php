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

Route::get('/', function () {
    return view('main');
});
// Route::get('/about', function () {
//     return view('inc.about');
// });
// Route::get('/projects', function () {
//     return view('inc.projects');
// });
// Route::get('/interests', function () {
//     return view('inc.interests');
// });

Route::get('sign-in/start', 'LoginController@start');   
// Route::get('sign-in/github', 'LoginController@start');   

Route::get('sign-in/github/redirect', 'LoginController@githubRedirect');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
