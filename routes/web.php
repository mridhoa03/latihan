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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('index');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/regular', function () {
    return view('regular');
});

Route::get('/contact', function () {
    return view('contact');
});

route::resource('kategori','KategoriController');
route::resource('artikel','ArtikelController');
route::resource('tag','TagController');