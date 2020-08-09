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

Route::get('/', function () {
    return view('layouts.items.create');
});

Route::get('/master', function () {
    return view('layouts.master');
});
Route::get('/items', function () {
    return view('layouts.items.index');
});
// Route::get('/create', function () {
//     return view('layouts.items.create');
// });
Route::get('/data-tables', function () {
    return view('layouts.partials.data-tables');
});
route::get('/pertanyaan/create', 'PertanyaanController@create');
route::post('/pertanyaan', 'PertanyaanController@store');
route::get('/pertanyaan', 'PertanyaanController@index');
route::get('/pertanyaan/{id}', 'PertanyaanController@show');
route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
route::put('/pertanyaan/{id}', 'PertanyaanController@update');
route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy');
