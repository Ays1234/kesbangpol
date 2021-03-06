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
use App\Http\Controllers\LoginadminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\MenudataController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PerpanjangController;
use App\Http\Controllers\PembaruanController;
use App\Http\Controllers\ForgotPasswordController;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\Perpanjang;
use App\Models\Pembaruan;
use App\Models\Categori;
use App\Models\Home;

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

/**
 * Show the form for creating a new resource.
 * Whatapps 6289631031237
 * email : yogimaulana100@gmail.com
 * https://github.com/Ays1234
 * https://serbaotodidak.com/
 */

// ----------------------------- forget password ----------------------------//
// Route::get('/reset-password', [App\Http\Controllers\AuthUser\ResetPasswordController::class, 'dapatPassword'])->name('reset-password');

Route::get('/verifikasi', [App\Http\Controllers\AuthUser\VerifikasiController::class, 'index'])->name('user.verifikasi');
Route::post('/verifikasi/verifikasi', [App\Http\Controllers\AuthUser\VerifikasiController::class, 'verifikasi'])->name('user.add.verifikasi');
Route::post('/verifikasi/reset', [App\Http\Controllers\AuthUser\VerifikasiController::class, 'reset'])->name('user.reset.verifikasi');

// ----------------------------- reset password -----------------------------//
// Route::get('reset-password/{token}', [App\Http\Controllers\AuthUser\ResetPasswordController::class, 'getPassword']);
// Route::post('reset-password', [App\Http\Controllers\AuthUser\ResetPasswordController::class, 'updatePassword']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/home/{home:slug}', [HomeController::class, 'show']);
Route::get('/categori/{categori:id}', function (Categori $categori) {
    return view('categori_berita', ['judul' => 'Categori Berita', 'beritas' => $categori->home, 'categoris' => $categori->name]);
});
Route::resource('/data', DataController::class);
Route::resource('/perpanjang', PerpanjangController::class);
Route::resource('/pembaruan', PembaruanController::class);

Route::get('/reset-password/{token}', [App\Http\Controllers\AuthUser\ResetPasswordController::class, 'getPassword']);
Route::get('/lupa-password', [App\Http\Controllers\AuthUser\ForgotPasswordController::class, 'getEmail']);
Route::post('/reset-password/updatePassword', [App\Http\Controllers\AuthUser\ResetPasswordController::class, 'updatePassword'])->name('user.updatereset');

Route::post('/forget-password', [App\Http\Controllers\AuthUser\ForgotPasswordController::class, 'postEmail']);

// router bagian loginuser
Route::get('/awal', ['App\Http\Controllers\AuthUser\HomeController', 'index'])->name('user.awal');
Route::get('/login', ['App\Http\Controllers\AuthUser\LoginController', 'index'])->name('user.login');
Route::post('/keluar', ['App\Http\Controllers\AuthUser\LoginController', 'keluar'])->name('user.keluar');
Route::post('/login', ['App\Http\Controllers\AuthUser\LoginController', 'loginuser'])->name('user.login.save');
Route::get('/dashboard', ['App\Http\Controllers\AuthUser\AdminController', 'index'])->name('user.dashboard');
// Route::get('/perpanjang', ['App\Http\Controllers\AuthUser\PerpanjangController', 'index'])->name('user.perpanjang');
// Route::post('/perpanjang', ['App\Http\Controllers\AuthUser\PerpanjangController', 'store'])->name('user.perpanjang.save');
// Route::get('/perpanjang/editperpanjang/{id}', ['App\Http\Controllers\AuthUser\PerpanjangController', 'editperpanjang'])->name('user.perpanjang.save');
Route::get('/profil', ['App\Http\Controllers\AuthUser\ProfilController', 'index'])->name('profil');
Route::post('/profil/update', ['App\Http\Controllers\AuthUser\ProfilController', 'update'])->name('user.update.profil');

Route::get('/daftar', ['App\Http\Controllers\AuthUser\DaftarController', 'index'])->middleware('guest');
Route::post('/daftar', ['App\Http\Controllers\AuthUser\DaftarController', 'store'])->name('user.daftar');

Route::get('/berita', ['App\Http\Controller\AuthUser\BeritaController', 'index']);

// router bagian loginuser

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::middleware(['guest:admin', 'preventBackHistory'])->group(function () {
            Route::view('/login', 'admin.login', ['judul' => 'Home Admin '])->name('login');
            Route::post('/check', ['App\Http\Controllers\AuthAdmin\LoginController', 'loginadmin'])->name('login.save');
        });
        Route::post('/logout', ['App\Http\Controllers\AuthAdmin\LoginController', 'logout'])->name('logout');

        Route::get('/send/mail', ['App\Http\Controllers\SendMailController', 'send_mail'])->name('send_mail');

        Route::middleware(['auth:admin', 'preventBackHistory'])->group(function () {
            Route::get('/dashboard', ['App\Http\Controllers\AuthAdmin\AdminController', 'index'])->name('dashboard');
            Route::get('/profil', ['App\Http\Controllers\AuthAdmin\ProfilController', 'index'])->name('profil');
            Route::post('/profil/update', ['App\Http\Controllers\AuthAdmin\ProfilController', 'update'])->name('update.profil');
            Route::get('/berita', ['App\Http\Controllers\AuthAdmin\BeritaController', 'index'])->name('berita');
            Route::post('/berita', ['App\Http\Controllers\AuthAdmin\BeritaController', 'store'])->name('berita.store');
            Route::post('/berita/update', ['App\Http\Controllers\AuthAdmin\BeritaController', 'update'])->name('berita.update');
            Route::post('/berita/destroy/{id}', ['App\Http\Controllers\AuthAdmin\BeritaController', 'destroy']);
            Route::get('/berita/checkSlug', ['App\Http\Controllers\AuthAdmin\BeritaController', 'checkSlug']);
            Route::get('/menudata', ['App\Http\Controllers\AuthAdmin\MenudataController', 'index'])->name('menudata');
            Route::get('/perpanjang', ['App\Http\Controllers\AuthAdmin\PerpanjangController', 'index'])->name('perpanjang');
            Route::post('/menudata', ['App\Http\Controllers\AuthAdmin\MenudataController', 'update'])->name('menudata.update');
            Route::post('/perpanjang', ['App\Http\Controllers\AuthAdmin\PerpanjangController', 'update'])->name('perpanjang.update');
            Route::post('/editor', ['App\Http\Controllers\AuthAdmin\EditorController', 'uploadimage'])->name('ckeditor.upload');

            Route::get('/menudata/download/{email}', ['App\Http\Controllers\AuthAdmin\MenudataController', 'download'])->name('download-menudata');
            Route::get('/perpanjang/download/{email}', ['App\Http\Controllers\AuthAdmin\PerpanjangController', 'download'])->name('download-perpanjang');
        });
        Route::get('/pembaruan', ['App\Http\Controllers\AuthAdmin\PembaruanController', 'index'])->name('pembaruan');
        Route::post('/pembaruan', ['App\Http\Controllers\AuthAdmin\PembaruanController', 'update'])->name('pembaruan.update');

        Route::get('/pembaruan/download/{email}', ['App\Http\Controllers\AuthAdmin\PembaruanController', 'download'])->name('download-pembaruan');
    });
