<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CheckUploadedFile;
use App\Http\Controllers\DependencyUploadController;
use App\Http\Controllers\UploadController;

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

Route::get('/jquery-file-upload', function () {
    return view('jquery-file-upload');
});

Route::get('/dropzone', function () {
    return view('dropzone');
});
Route::get('/resumable', function () {
    return view('resumable');
});

Route::post('upload', [UploadController::class, 'upload']);