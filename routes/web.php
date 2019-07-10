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

Route::group(['prefix'=>'admin','middleware'=>['auth']],
function () {
    Route::resource('kategori','KategoriController');
    Route::resource('tag','TagController');
    Route::resource('artikel','ArtikelController');
}
);

Route::get('/siswa', function () {
    return view('siswa');
});