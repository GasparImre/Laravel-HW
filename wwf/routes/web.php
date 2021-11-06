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
    return view('main');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/image-gallery',[\App\Http\Controllers\ImageGalleryController::class, 'index'])->name('image-gallery');
Route::post('/image-gallery',[\App\Http\Controllers\ImageGalleryController::class, 'upload'])->name('image-upload');
Route::delete('/image-gallery/{id}',[\App\Http\Controllers\ImageGalleryController::class, 'destroy'])->name('image-destroy');

Route::get('/contactus',[\App\Http\Controllers\ContactUsController::class,'create'])->name('contactus');
Route::post('/contactus',[\App\Http\Controllers\ContactUsController::class, 'store']);
Route::get('/videos',[\App\Http\Controllers\Controller::class, 'play'])->name('play');
