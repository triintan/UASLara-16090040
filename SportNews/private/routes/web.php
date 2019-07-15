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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.admin.pengunjung');
});

Route::get('post', function () {
    return view('pages.admin.post');
});

Route::resource('/list-post', 'BlogController');
Route::get('/post-post', 'BlogController@create')->name('post');
Route::get('/list-post', 'BlogController@index')->name('list');
Route::post('/add-post/post', 'BlogController@store');
Route::get('/list-post/delete/{id}', 'BlogController@destroy');
Route::get('/list-post/view/{id}', 'BlogController@show');
Route::get('/list-post/edit/{id}', 'BlogController@edit');
Route::get('/list-post/update/{id}', 'BlogController@update');


Route::get('/lihat', 'BlogController@index');
Route::get('lihat', function () {
    return view('pages.admin.lihat');
});

//user
Route::resource('/home', 'HomeController');
Route::get('/home', 'HomeController@index')->name('list');
Route::get('/home/view/{id}', 'HomeController@show');

Route::get('pengunjung', function () {
    return view('pages.admin.pengunjung');
});

Route::get('profil', function () {
    return view('pages.admin.profil');
});

Route::get('/aktivitas', function () {
    return view('pages.admin.logaktivitas');
});

Route::get('/login', function () {
    return view('login/');
});

// Route::get('/', function () {
//     return view('login');
// });

//user
Route::get('home', function () {
    return view('pages.user.home');
});

Route::get('basket', function () {
    return view('pages.user.basket');
});

Route::get('badminton', function () {
    return view('pages.user.badminton');
});

Route::get('sepakbola', function () {
    return view('pages.user.sepakbola');
});

Route::get('about', function () {
    return view('pages.user.about');
});

Route::get('readmore', function () {
    return view('pages.user.readmore');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
