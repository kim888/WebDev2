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

Route::get('/', 'FillHomePage@returnFilledPage');
Route::get('/test.html', 'FillHomePage@returnFilledPage');
Route::get('/index.html', 'FillHomePage@returnFilledPage');

/* warum geht das so nicht?
Route::get('/{url}', function ($url) {

    return Redirect::to('/', 'FillHomePage@returnFilledPage');

})->where(['url' => '/index.html|/']);
*/


Route::get('/welcome.html', function () {
    return view('welcome');
});
Route::get('/featured.html', 'FillFeaturedPage@returnFilledPage');
Route::get('/genre.html', function () {
    return view('genre');
});
Route::get('/login.html', function () {
    return view('login');
});
Route::get('/signup.html', function () {
    return view('register');
});
Route::get('/cart.html', function () {
    return view('cart');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


