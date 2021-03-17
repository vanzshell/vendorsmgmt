<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorsController;
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
Route::get('vendors/get_store', [VendorsController::class, 'get_store']);
Route::get('vendors/{id}/get_update', [VendorsController::class, 'get_update']);
Route::get('vendors/{id}/get_destroy', [VendorsController::class, 'get_destroy']);


Route::resource('vendors', VendorsController::class);

Route::get('/', function () {
    return view('welcome');
});
