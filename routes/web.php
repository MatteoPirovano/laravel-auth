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
    return view('welcome');
});

Auth::routes();
//rotte pubbliche
Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/home', 'HomeController@index')->name('home');

// rotte che sono protette da autenticazione
Route::prefix('admin') //prefisso delle rotte
    ->namespace('Admin') //namespace della sottocartella Controller
    ->middleware('auth') //filtro dell'autenticazione
    ->name('admin.') //prefisso di tutti i nomi delle rotte
    ->group(function(){
        Route::resource('posts', 'PostController');
});