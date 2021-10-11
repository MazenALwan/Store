<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
Route::get('/',[ProductController::class,'getProductListPage']);
Route::get('/Profile',[UserController::class,'getUser']);
Route::get('/Profile',[ProfileController::class,'getProfilePage'])->middleware(['auth'])->name('Profile');
Route::post('create',[ProductController::class,'create']);
require __DIR__.'/auth.php';
