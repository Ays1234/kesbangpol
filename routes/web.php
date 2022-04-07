<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\DashboardController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);
Route::get('/berita',[BeritaController::class, 'index']);
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/tutorial',[TutorialController::class, 'index']);
Route::get('/user',[UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/user',[UserController::class, 'authenticate']);
Route::post('/keluar',[UserController::class, 'keluar']);


Route::resource('/data/posts',DataController::class)->middleware('auth');

//Route::post('/login',[LoginController::class, 'authenticate']);
//Route::post('/user',[UserController::class, 'authenticate']);

Route::get('/daftar',[DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar',[DaftarController::class, 'store']);