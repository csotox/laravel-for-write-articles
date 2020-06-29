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

Route::get('/posts/{id}', function ($id) {
    return "Calling the Post # $id";
})->where('id', '[0-9]+');

Route::get('/searches/{value}', function ($value) {
    return "You are looking for: $value";
})->where('value', '[A-Za-z]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/vue-comunicacion-componente-padre-hijo', function () {
    return view('ejemplos.vue.comunicaPadreHijo');
});
