<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice', 'ControllerInvoice@index');
Route::post('/invoice/list', 'ControllerInvoice@list');

Route::get('/transaksi', 'TransaksiController@index');
Route::post('/transaksi/list', 'TransaksiController@list');
Route::post('/transaksi/getdata', 'TransaksiController@getdata');

Route::post('/getKantor', 'ControllerUser@showkantor');
Route::post('/getHakakses', 'ControllerHakakses@getdata');

Route::get('/hakakses', 'ControllerHakakses@index');
Route::post('/hakakses/list', 'ControllerHakakses@list');

Route::get('/user', 'ControllerUser@index');
Route::post('/user/list', 'ControllerUser@list');
Route::post('/user/save', 'ControllerUser@save');
Route::post('/user/delete', 'ControllerUser@delete');
Route::post('/user/update', 'ControllerUser@update');

Route::get('/tracking', 'ControllerTracking@index');
Route::post('/tracking/list', 'ControllerTracking@list');