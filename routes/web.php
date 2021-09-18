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
Route::get('/file-manager' , [\App\Http\Controllers\FileManagerController::class , 'index'])->name('s3.index');
Route::get('/upload' , [\App\Http\Controllers\S3Controller::class , 'upload'])->name('s3.upload');
Route::post('/upload-post' , [\App\Http\Controllers\S3Controller::class , 'store'])->name('s3.store');
Route::get('/total-size' , [\App\Http\Controllers\S3Controller::class , 'TotalSizeFolders'])->name('s3.total.size');

