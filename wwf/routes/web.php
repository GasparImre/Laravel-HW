<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

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
//Photo
Route::get('/image-gallery',[\App\Http\Controllers\ImageGalleryController::class, 'index'])->name('image-gallery');
Route::post('/image-gallery',[\App\Http\Controllers\ImageGalleryController::class, 'upload'])->name('image-upload');
Route::delete('/image-gallery/{id}',[\App\Http\Controllers\ImageGalleryController::class, 'destroy'])->name('image-destroy');
//Contact page
Route::get('/contactus',[\App\Http\Controllers\ContactUsController::class,'create'])->name('contactus');
Route::post('/contactus',[\App\Http\Controllers\ContactUsController::class, 'store']);
//Video page
Route::get('/videos',[\App\Http\Controllers\Controller::class, 'play'])->name('play');

Auth::routes();
//Articles
Route::get('/articles',[ArticleController::class,'index'])->name('articles.index');
Route::get('/articles/create',[ArticleController::class,'create'])->name('articles.create');
Route::post('/articles',[ArticleController::class,'store'])->name('articles.store');
Route::get('/articles/{article}',[ArticleController::class,'show'])->name('articles.show');
Route::get('/articles/{article}/edit',[ArticleController::class,'edit'])->name('articles.edit');
Route::put('/articles/{article}',[ArticleController::class,'update'])->name('articles.update');
Route::delete('/articles/{article}',[ArticleController::class,'destroy'])->name('articles.destroy');

//Users
//Route::group(['middleware'=> 'auth2'],function() {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
