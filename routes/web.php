<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\auth\LoginSiswaController;
use App\Http\Controllers\Auth\RegisterSiswaController;
use App\Http\Controllers\Petugas\PinjamPetugasController;
use App\Http\Controllers\petugas\SiswaPetugasController;
use App\Http\Controllers\petugas\HistoryPetugasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\petugas\BukuPetugasController;
use App\Http\Controllers\Petugas\DashboardPetugasController;
use App\Http\Controllers\petugas\ProfilPetugasController;
use App\Http\Controllers\petugas\RakPetugasController;
use App\Http\Controllers\Siswa\PeminjamanController;
use App\Http\Controllers\Siswa\HistoryController;
use App\Http\Controllers\Siswa\BukuControllerSiswa;
use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Controllers\Siswa\UlasanController;

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
})->name('/');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buku', [App\Http\Controllers\DashboardController::class, 'buku'])->name('buku');

//Login users / petugas
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

//Login Siswa
Route::get('loginSiswa',[LoginSiswaController::class,'loginSiswa'])->name('loginSiswa');
Route::post("actionLogin", [LoginSiswaController::class, 'loginAction'])->name('loginAction');
Route::get('actionLogout',[LoginSiswaController::class,'actionLogout'])->name('actionLogout')->middleware('auth');
//register siswa
Route::get('siswa/registerSiswa', [RegisterSiswaController::class, 'registerSiswa'])->name('registerSiswa');
Route::post('registerSiswa/action', [RegisterSiswaController::class, 'registerSiswaAction'])->name('registerSiswaAction');
Route::get('register/verify/{verify_key}', [RegisterSiswaController::class, 'verify'])->name('verify');



Route::middleware(['auth:siswa'])->group(function (){
    Route::get('Buku', [BukuControllerSiswa::class, 'bukuUser'])->name('bukuUser');
    Route::get('siswa/dashboard', [BukuControllerSiswa::class, 'dashboardBook']);
    Route::get('siswa/buku/{id_rak}', [BukuControllerSiswa::class, 'bukuRak'])->name('bukuRak');
    Route::post('siswa/pinjam/{id}', [PeminjamanController::class, 'create'])->name('pinjam');
    Route::get('siswa/pinjam', [PeminjamanController::class, 'index'])->name('peminjaman');
    Route::get('siswa/return/{id}', [PeminjamanController::class, 'return'])->name('return');
    Route::get('siswa/history', [HistoryController::class, 'index'])->name('historyIndex');
    Route::post('siswa/history/{id}', [HistoryController::class, 'history'])->name('history');
    Route::get('profile',  [SiswaController::class, 'index'])->name('profile');
    Route::put('profile/update', [SiswaController::class, 'update'])->name('profileUpdate');
    Route::post('profile/editPhoto', [SiswaController::class, 'editPhoto'])->name('editPhoto');
    Route::post('siswa/bayar', [SiswaController::class, 'bayar'])->name('bayar');
    Route::post('siswa/ulasan/{id}', [UlasanController::class, 'Ulasan'])->name('ulasanPost');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/petugas/dashboard', [DashboardPetugasController::class, 'index'])->name('petugas.dashboard');
    Route::resource('/petugas/buku', BukuPetugasController::class);
    Route::resource('/petugas/rak', RakPetugasController::class);
    Route::get('/petugas/meminjamkan', [PinjamPetugasController::class, 'index'])->name('pinjam.index');
    Route::get('/petugas/history', [HistoryPetugasController::class, 'index'])->name('history.index');
    Route::get('/petugas/siswa', [SiswaPetugasController::class, 'index'])->name('siswa.siswa');
    Route::get('/petugas/siswa/{id}/edit', [SiswaPetugasController::class, 'edit'])->name('edit.siswa');
    Route::post('/petugas/siswa/{id}/edit', [SiswaPetugasController::class, 'update'])->name('siswa.update');
    Route::get('/petugas/siswa/{id}', [SiswaPetugasController::class, 'destroy'])->name('siswa.destroy');

});




Route::get('/about', function () {
    return view('about');
})->name('about');

