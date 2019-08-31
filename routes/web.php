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

Route::get('/index', function () {
  return view('index');
});

Route::get('/camperas', function () {
  return view('camperas');
});

Route::get('/remeras', function () {
  return view('remeras');
});

Route::get('/joggers', function () {
  return view('joggers');
});

Route::get('/buzos', function () {
  return view('buzos');
});

Route::get('/jeans', function () {
  return view('jeans');
});

Route::get('/accesorios', function () {
  return view('accesorios');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/agregarProducto", function(){
  return view("agregarProducto");
});

Route::post("/agregarProducto", "ProductosController@agregar");

Route::get("/producto/{id}", "ProductosController@detalle");

Route::post("/borrarProducto", "ProductosController@borrar");

Route::get("/productos", "ProductosController@listado");



Route::get('cart', 'ProductsController@cart');

Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

Route::get("/carrito", function(){
  return view("carrito");
});
