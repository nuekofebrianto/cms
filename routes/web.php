<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice', 'ControllerInvoice@index');
Route::post('/invoice/list', 'ControllerInvoice@list');

Route::post('/getKantor', 'ControllerUser@showkantor');

Route::get('/user', 'ControllerUser@index');
Route::post('/user/list', 'ControllerUser@list');