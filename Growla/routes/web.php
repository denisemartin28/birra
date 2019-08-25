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



Route::get('/detalle/{id}', 'BeerController@detalle')->name('details');
Route::get('/new-beer', 'BeerController@createBeer');
Route::post('/new-beer', 'BeerController@newbeer');
// Route::get('/productos', "ProductosCotroller@listado"  {
// return view("");
// });

//Route::get('/producto/{id}' "ProductosCotroller@detalle" {
//return view("");
//});

Route::get('/search', 'SearchController@search')->name('search');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
