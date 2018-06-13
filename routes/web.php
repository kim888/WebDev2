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
Route::get('/home', 'FillHomePage@returnFilledPage');

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
    return view('auth/login');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/signup.html', function () {
    //Mail::to("test@test.de")->send(new \App\Mail\RegisterMail());
    return view('auth/register');
});
Route::get('/warenkorb.html', function () {
    return view('warenkorb');
});
Route::get('/location.html', function (){
    return view('location');
});
Route::get('/userProfil.html', function (){
    return view('userProfil');
});
Route::get('/profilBearbeiten.html', function (){
    return view('profilBearbeiten');
});
Route::get('/artist.html', function (){
    return view('artist');
});

Route::get('/loggedIn.html', function (){
    return view('loggedIn');
});

Route::get('/platzwahl.html', function (){
    return view('platzwahl');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

