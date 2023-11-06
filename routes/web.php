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
    return view('welcome');
});

Route::resource('listobat160419077','MedicineController');
Route::get('obatbatuk160419077','MedicineController@showobatbatuk')->name('ShowObatBatuk');
Route::get('daftarkategori160419077','CategoryController@showlowesttohighestprice')->name('ShowLowestToHighestPrice');
Route::get('stokobatbanyak160419077','MedicineController@showhigheststock')->name('ShowHighestStock');
