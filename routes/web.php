<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\BlogController as ControllersBlogController;
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

Route::get('/', [ControllersBlogController::class,'index']);

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth','checkifAdmin'])->name('dashboard');

Route::any('pages/image', '\App\Http\Controllers\FrontendController@pageImgUpload')->name('pages.image');
Route::any('admin/blogs',[BlogController::class,'index'])->middleware(['auth'])->name('admin.blog');
Route::any('admin/add-blogs',[BlogController::class,'create'])->middleware(['auth'])->name('admin.blog');
Route::any('admin/store-blogs',[BlogController::class,'store'])->middleware(['auth'])->name('admin.blog');
Route::any('admin/edit-blogs/{id}',[BlogController::class,'edit'])->middleware(['auth'])->name('admin.blog');
Route::any('admin/update-blogs/{id}',[BlogController::class,'update'])->middleware(['auth'])->name('admin.blog');
Route::any('show-blogs/{id}',[ControllersBlogController::class,'show'])->middleware(['auth'])->name('admin.blog');

require __DIR__.'/auth.php';
