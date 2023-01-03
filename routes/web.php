<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('home');
});



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');
    Route::get('/admin/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::post('/admin/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::get('/admin/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    
});