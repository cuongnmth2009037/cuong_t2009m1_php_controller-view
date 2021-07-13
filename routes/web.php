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

//handlePathVariable:
Route::get('/data-handle/{id}/path', [\App\Http\Controllers\DataHandleController::class, 'handlePathVariable']);

//handlePathVariable

//handleQueryString:
Route::get('/data-handle/{request}', [\App\Http\Controllers\DataHandleController::class, 'handleQueryString']);

//handleQueryString

//handleForm:
Route::get('/data-handle-form',[\App\Http\Controllers\DataHandleController::class,'handleForm'])->name('handleForm');
Route::post('/data-handle-form',[\App\Http\Controllers\DataHandleController::class,'processForm'])->name('processForm');
//handleForm
