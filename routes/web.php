<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
Route::get('/',[LoginController::class, 'index'])->name('index');
Route::post('/login',[LoginController::class, 'proses'])->name('login');

Route::middleware(['login'])->group(function () {
    Route::get('/dashboard', [Dashboardcontroller::class, 'dashboard'])->name('dashboard');

Route::get('admin', [AdminController::class, 'admin'])->name('admin');
Route::get('admin/create', [AdminController::class, 'createadmin'])->name('createAdmin');
Route::post('admin/tambahadmin', [AdminController::class, 'tambahadmin'])->name('tambahAdmin');
Route::get('admin/edit/{id}', [AdminController::class, 'editadmin'])->name('editAdmin');
Route::post('admin/edit/{id}', [AdminController::class, 'prosesedit'])->name('prosesEditAdmin');
Route::get('admin/delete/{id}', [AdminController::class, 'hapusadmin'])->name('hapusAdmin');

Route::get('kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('kelas/create', [KelasController::class, 'create'])->name('createkelas');
Route::post('kelas/tambah', [KelasController::class, 'tambah'])->name('tambahkelas');
Route::get('kelas/edit/{id}',[KelasController::class, 'edit'])->name('editkelas');
Route::post('kelas/edit/{id}',[KelasController::class, 'proses'])->name('proseskelas');
Route::get('kelas/delete/{id}',[KelasController::class, 'hapus'])->name('hapuskelas');

Route::get('dosen', [DosenController::class, 'index'])->name('dosen');
Route::get('dosen/create', [DosenController::class, 'create'])->name('createdosen');
Route::post('dosen/tambah', [DosenController::class, 'tambah'])->name('tambahdosen');
Route::get('dosen/edit/{id}', [DosenController::class, 'edit'])->name('editdosen');
Route::post('dosen/edit/{id}', [DosenController::class, 'proses'])->name('prosesdosen');
Route::get('dosen/delete{id}', [DosenController::class, 'hapus'])->name('hapusdosen');

Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('mahasiswa/create', [MahasiswaController::class, 'create'])->name('createmahasiswa');
Route::post('mahasiswa/tambah', [MahasiswaController::class, 'tambah'])->name('tambahmahasiswa');
Route::get('mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('editmahasiswa');
Route::post('mahasiswa/proses{id}', [MahasiswaController::class, 'proses'])->name('prosesmahasiswa');
Route::get('mahasiswa/delete{id}', [MahasiswaController::class, 'hapus'])->name('hapusmahasiswa');


Route::get('/logout', [LoginController::class,'logout'])->name('logout');

});


// ----

// Route::any('admin/password', [AdminController::class, 'hash_password']);
