<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/redirects', [HomeController::class,'redirects']);
//
Route::get('/about', [UserController::class,'about'])->name('about');
Route::get('/food-menu', [UserController::class,'menu'])->name('menu');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/all-users', [AdminController::class,'getAllusers'])->name('allusers');

Route::get('/delete-user/{id}', [AdminController::class,'deleteuser'])->name('deleteuser');

Route::post('/edit-user', [AdminController::class,'edituser'])->name('edituser');

Route::get('/add-food', [AdminController::class,'addFood'])->name('addfood');

Route::post('/upload-food', [AdminController::class,'uploadFood'])->name('upload-food');