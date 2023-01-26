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


Route::get('home', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('home');
});

// untuk tes main2
// Route::get('x', function () {
    //     return view('main2');
    // });

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@authenticate');
Route::post('/logout', 'loginController@logout');
// Route::get('/regis', 'loginController@regis');

Route::get('/','idProfileController@data');
Route::get('/organisasi','idOrganizationController@data');
Route::get('/program','idProgramsController@data');
Route::get('/registrasi','idRegisTenantController@data');
Route::post('/registrasi','idRegisTenantController@add');
Route::resource('/berita', 'idNewsController');
Route::get('/kontak','idContactController@data');

// dashboard admin
Route::resource('/profile', 'profileController')->middleware('auth');
Route::resource('/organization', 'organizationController')->middleware('auth');
Route::resource('/programs', 'programsController')->middleware('auth');
Route::resource('/news', 'newsController')->middleware('auth');
Route::resource('/contact', 'contactController')->middleware('auth');
Route::resource('/regisTenant', 'regisTenantController')->middleware('auth');