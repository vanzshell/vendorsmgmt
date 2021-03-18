<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\VendorsDocumentsController;
use App\Http\Controllers\VendorsOfficersController;
use App\Http\Controllers\VendorsOfficialRepresentativesController;

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

Route::get('vendors/representatives/get_store', [VendorsOfficialRepresentativesController::class, 'get_store']);
Route::get('vendors/representatives/{id}/get_update', [VendorsOfficialRepresentativesController::class, 'get_update']);
Route::get('vendors/representatives/{id}/get_destroy', [VendorsOfficialRepresentativesController::class, 'get_destroy']);

Route::get('vendors/officers/get_store', [VendorsOfficersController::class, 'get_store']);
Route::get('vendors/officers/{id}/get_update', [VendorsOfficersController::class, 'get_update']);
Route::get('vendors/officers/{id}/get_destroy', [VendorsOfficersController::class, 'get_destroy']);

Route::resource('vendors/documents', VendorsDocumentsController::class);
Route::resource('vendors/officers', VendorsOfficersController::class);
Route::resource('vendors/representatives', VendorsOfficialRepresentativesController::class);
Route::resource('vendors', VendorsController::class);



Route::get('/', function () {
    return view('welcome');
});
