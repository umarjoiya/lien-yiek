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


Route::get('/Dashboard', function () {
    return view('Dashboard');
});

Route::get('/machine-database', function () {
    return view('machine-database');
});

Route::get('/machine-database-list', function () {
    return view('machine-database-list');
});

Route::get('/operater-list', function () {
    return view('operater-list');
});

Route::get('/material-InOut', function () {
    return view('material-InOut');
});

Route::get('/batch', function () {
    return view('batch');
});

Route::get('/production-order', function () {
    return view('production-order');
});

Route::get('/warehouse-stock', function () {
    return view('warehouse-stock');
});

Route::get('/grind', function () {
    return view('grind');
});

Route::get('/drilling', function () {
    return view('drilling');
});

Route::get('/finalchecking', function () {
    return view('finalchecking');
});

Route::get('/shotblast', function () {
    return view('shotblast');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/packing', function () {
    return view('packing');
});

Route::get('/grinding', function () {
    return view('grinding');
});

Route::get('/shotblast-form', function () {
    return view('shotblast-form');
});

Route::get('/purchase-order', function () {
    return view('purchase-order');
});

Route::get('/batch-list', function () {
    return view('batch-list');
});

Route::get('/production-order-list', function () {
    return view('production-order-list');
});

Route::get('/warehouse', function () {
    return view('warehouse');
});
