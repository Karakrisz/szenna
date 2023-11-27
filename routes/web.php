<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/header', 'HeaderFooterController@getHeaderContent');

Route::get('/', [PostController::class, 'index']);

Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/json-posts', [PostController::class, 'jsonPosts']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/etlap', [MenuController::class, 'index'])->name('etlap');
Route::get('/rolunk', [AboutController::class, 'index'])->name('rolunk');
Route::get('/kapcsolat', [ContactController::class, 'index'])->name('kapcsolat');

Route::get('/footer', 'HeaderFooterController@getFooterContent');