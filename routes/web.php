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

Route::get('/', function () {
    return view('welcome');
});

// for the homepage
Route::get('/homepage', function () {
    return view('homepage');
});
// end of homepage

Route::get('/event', function () {
    return view('event');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/news', function () {
    return view('news');
});

Route::get('/resources', function () {
    return view('resources');
});

//for getting result from database
Route::get('/newsallfeed', 'NewsController@getNews');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// faq for posting forms
Route::post('/contact/submit', 'MessagesController@submit');
// for posting news
Route::post('/news/submit', 'NewsController@submit');


// Route::prefix('admin')->group(function () {
// Route::group(['admin' => ['web']], function () {

// to showlogin form
// Route::get('web-login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// to postlogin form
// Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//mid ware 
// Route::get('/', 'AdminController@index')->name('admin.dashboard');

// });

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/youthreg', 'Auth\LoginController@showYouthregLoginForm');
Route::get('/login/ownedgov', 'Auth\LoginController@showOwnedgovLoginForm');


Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/youthreg', 'Auth\RegisterController@showYouthregRegisterForm');
Route::get('/register/ownedgov', 'Auth\RegisterController@showOwnedgovRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/ownedgov', 'Auth\LoginController@ownedgovLogin');
Route::post('/login/youthreg', 'Auth\LoginController@youthregLogin');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/ownedgov', 'Auth\RegisterController@createOwnedgov');
Route::post('/register/youthreg', 'Auth\RegisterController@createYouthreg');


Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/ownedgov', 'ownedgov');
Route::view('/youthreg', 'youthreg');

// creating route fr post and updates
Route::group(['middleware' => 'admin'], function(){

    Route::resource('admin/users', 'AdminUsersController'  , ['names'=> [
        
        'index'=> 'admin.users.index',
        'create' =>'admin.users.create',
        'store' =>'admin.users.store',
        'show' => 'admin.users.show',
        'edit' =>'admin.users.edit',
    ]]);

});
// Route::delete('delete/user' , 'AdminUsersController@deleteUser');

Route::get('/admin' , function(){

    return view('admin.index');
});



