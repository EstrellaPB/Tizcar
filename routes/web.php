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
    return view('welcome');
});
// DB::listen(function($query){
//   echo "<pre>{$query->sql}</pre>";
// });

Route::resource('customers', 'CustomerController');
Route::resource('employees', 'EmployeeController');
Route::resource('automobiles', 'AutomobileController');
Route::resource('sales', 'SaleController');

