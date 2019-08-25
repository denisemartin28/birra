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
Route::get('/home', function () {
    return view('home');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/beers-list', 'BeerController@listado')->name('beers.list');
Route::post('/deleteBeer', 'BeerController@delete');
Route::get('/beer-edit/{id}', 'BeerController@edit');
Route::patch('/beer-edit/{id}', 'BeerController@update');

//Route::get('/faq', function () {
//    return view('');
//});
Route::get('/Registro', 'RegisterController@Validator');
Route::post('/Registro', 'RegisterController@Create');



<<<<<<< HEAD

Route::get('/detalle/{id}', 'CervezasController@detalle');
Route::get('/nueva-cerveza', 'CervezasController@nuevaCerveza');
=======
Route::get('/detalle/{id}', 'BeerController@detalle')->name('details');
Route::get('/new-beer', 'BeerController@createBeer');
Route::post('/new-beer', 'BeerController@newbeer');
>>>>>>> 26e7f16cbcd014466fc883e510531b2df7f91a89
// Route::get('/productos', "ProductosCotroller@listado"  {
// return view("");
// });

//Route::get('/producto/{id}' "ProductosCotroller@detalle" {
//return view("");
//});

Route::get('/search', 'SearchController@search')->name('search');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
