<?php

use App\Http\Controllers\TipeUserController;
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
// Route::auth();
// Route::group(['middleware' => 'auth'], function () {




// });


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/user','UserController@index');
    Route::get('/user/add','UserController@create');
    Route::post('/user/add','UserController@store');
    Route::get('/user/{id}/edit','UserController@edit');
    Route::patch('/user/{id}/edit','UserController@update');
    Route::delete('/user/{id}/delete','UserController@destroy');

    Route::get('/TipeUser','TipeUserController@index');
    Route::get('/TipeUser/add','TipeUserController@create');
    Route::post('/TipeUser/add','TipeUserController@store');
    Route::get('/TipeUser/{id}/edit','TipeUserController@edit');
    Route::patch('/TipeUser/{id}/edit','TipeUserController@update');
    Route::delete('/TipeUser/{id}/delete','TipeUserController@destroy');

    Route::get('/produk','ProdukController@index');
    Route::get('/produk/add','ProdukController@create');
    Route::post('/produk/add','ProdukController@store');
    Route::get('/produk/{id}/edit','ProdukController@edit');
    Route::patch('/produk/{id}/edit','ProdukController@update');
    Route::delete('/produk/{id}/delete','ProdukController@destroy');

    Route::get('/varian','VarianController@index');
    Route::get('/varian/add','VarianController@create');
    Route::post('/varian/add','VarianController@store');
    Route::get('/varian/{id}/edit','VarianController@edit');
    Route::patch('/varian/{id}/edit','VarianController@update');
    Route::delete('/varian/{id}/delete','VarianController@destroy');

    Route::get('/dftproses','DaftarProsesController@index');
    Route::get('/dftproses/add','DaftarProsesController@create');
    Route::post('/dftproses/add','DaftarProsesController@store');
    Route::get('/dftproses/{id}/edit','DaftarProsesController@edit');
    Route::patch('/dftproses/{id}/edit','DaftarProsesController@update');
    Route::delete('/dftproses/{id}/delete','DaftarProsesController@destroy');

    Route::get('/proses','ProsesController@index');
    Route::get('/proses/{id}/add','ProsesController@create');
    Route::post('/proses/add','ProsesController@store');
    Route::get('/proses/{id}/edit','ProsesController@edit');
    Route::patch('/proses/{id}/edit','ProsesController@update');
    Route::delete('/proses/{id}/delete','ProsesController@destroy');

    Route::get('/tugas','TugasController@index');
    Route::patch('/tugas/{id}/start','TugasController@start');
    Route::patch('/tugas/{id}/finish','TugasController@finish');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
