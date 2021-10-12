<?php
use App\Http\Controllers\AddProductController;
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
Route::get('addProduct',[AddProductController::class,'getAddProductPage'])->name('addProduct');
Route::get('/',[ProductController::class,'getProductListPage']);
Route::get('profile',[ProfileController::class,'getProfilePage'])->middleware(['auth'])->name('profile');
Route::post('profile/update',[ProfileController::class,'updateCredentials'])->middleware(['auth'])->name('editProfile');
Route::post('create',[ProductController::class,'create']);
Route::get('productDetailPage/{id}',[ProductController::class,'getProductDetailPage']);
require __DIR__.'/auth.php';
