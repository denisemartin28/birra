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
    return view('home');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/listadoCervezas', function () {
   return view('listadoCervezas');
});

//Route::get('/faq', function () {
//    return view('');
//});
Route::get('/Registro', 'RegisterController@Validator');
Route::post('/Registro', 'RegisterController@Create');

Route::get('/login', 'LoginController@Validar');

//Route::get('/productos', "ProductosCotroller@listado"  {
//return view("");
//});

//Route::get('/producto/{id}' "ProductosCotroller@detalle" {
//return view("");
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
