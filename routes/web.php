<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice', 'ControllerInvoice@index');
Route::post('/invoice/list', 'ControllerInvoice@list');

Route::post('/getKantor', 'ControllerUser@showkantor');
Route::post('/getHakakses', 'ControllerHakakses@getdata');

Route::get('/hakakses', 'ControllerHakakses@index');
Route::post('/hakakses/list', 'ControllerHakakses@list');

Route::get('/user', 'ControllerUser@index');
Route::post('/user/list', 'ControllerUser@list');
Route::post('/user/save', 'ControllerUser@save');