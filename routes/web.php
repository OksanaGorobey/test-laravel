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
    return view('main');
});
Route::get('/counteragent/list', [ \App\Http\Controllers\CounteragentControllerAjax::class, 'index' ] );
Route::post('/counteragent/add', [ \App\Http\Controllers\CounteragentControllerAjax::class, 'add' ] );
Route::get('/counteragent/one', [ \App\Http\Controllers\CounteragentControllerAjax::class, 'getOne' ] );
Route::post('/counteragent/edit', [ \App\Http\Controllers\CounteragentControllerAjax::class, 'edit' ] );
Route::post('/counteragent/delete', [ \App\Http\Controllers\CounteragentControllerAjax::class, 'delete' ] );



