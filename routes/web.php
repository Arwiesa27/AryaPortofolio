<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('login');


// Route::get('portofolio', function () {
//     return view('portofolio');
// });

Route::get('profile', function () {
    return view('profile');
});


Route::middleware('auth')->group(function (){
    Route::get('admin',[AdminController::class,'show']);
    Route::get('portofolio',[PortofolioController::class,'show']);
    Route::get('admin/add',[AdminController::class,'add']);
    Route::post('admin/create',[AdminController::class,'create']);
    Route::get('admin/hapus/{id}',[AdminController::class,'hapus']);
    Route::post('admin/update/{id}',[AdminController::class,'update']);
    Route::get('admin/edit/{id}',[AdminController::class,'edit']);
    Route::get('admin/cari',[AdminController::class,'cari']);
});
// Route::get('portofolio',[ProfileController::class,'show']);

// login
Route::get('daftar',[UserController::class,'daftar']);
Route::post('daftar/create',[UserController::class,'create']);
Route::post('auth',[UserController::class,'auth']);
Route::get('logout',[UserController::class,'logout']);

// profil
Route::get('profile',[ProfileController::class,'edit']);
Route::get('profile/add',[ProfileController::class,'add']);
Route::post('profile/create',[ProfileController::class,'create']);
Route::post('profile/update/{id}',[ProfileController::class,'update']);
Route::get('profile/edit/{id}',[ProfileController::class,'edit']);
