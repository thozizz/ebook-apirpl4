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

// RETURN STRING
Route::get('coba', function(){
    return "Halooo :D";
});
// array json
Route::get('coba1', function(){
    return ['rapli','jeje','juju'];
});
//json objek
Route::get('coba2', function(){
    return [
        'Nama' => 'Thoriq Aziz',
        'Kelas' => 'XII RPL 7',
        'NIS' => 12345667
    ];
});
//objek json, ubah status code
Route::get('coba3', function(){
    return response()->json(
        [
        'Nama' => 'Thoriq Aziz',
        'Kelas' => 'XII RPL 7',
        'NIS' => 12345667
        ], 201
    );
});
