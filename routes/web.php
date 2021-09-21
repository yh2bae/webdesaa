<?php

use App\Http\Controllers\Admin\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\Admin\CkeditorController;
use App\Http\Controllers\Admin\DesaController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DusunController;
use App\Http\Controllers\ProfileDesaController;
use App\Http\Controllers\KarangTarunaController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DetailDusunController;
use App\Http\Controllers\Admin\KategoriBeritaController;
use App\Http\Controllers\Admin\StrukturDesaController;

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

Route::post('/ckeditor/upload', [CkeditorController::class, 'upload'])->name('upload');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login/check', [AuthController::class, 'check'])->name('check');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin-panel')->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // User
    Route::resource('user', UserController::class);

    // Route::resource('role', RoleController::class);
    Route::get('roles', [RoleController::class, 'index'])->name('role.index');
    Route::get('roles/create', [RoleController::class, 'index'])->name('role.create');
    Route::post('roles/store', [RoleController::class, 'store'])->name('role.store');
    Route::get('roles/edit/{id_role}', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('roles/update/{id_role}', [RoleController::class, 'update'])->name('role.update');
    Route::delete('roles/delete/{id_role}', [RoleController::class, 'destroy'])->name('role.destroy');
    Route::get('roles/access/{id_role}', [RoleController::class, 'role_access'])->name('role.access');
    Route::post('roles/proses_role_access', [RoleController::class, 'proses_role_access'])->name('role.proses');

    Route::resource('desa', DesaController::class)->shallow()->only(['index', 'update']);

    Route::resource('dusun', DusunController::class);
    Route::resource('detailDusun', DetailDusunController::class)->except('create','edit');
    
    Route::resource('penduduk', PendudukController::class);
    Route::resource('struktur', StrukturDesaController::class);

    Route::resource('artikel', ArtikelController::class);
    Route::resource('kategori', KategoriBeritaController::class);
});

// home frontend
 Route::get('/', [HomeController::class, 'index'])->name('home');
 Route::get('/pemerintahan/visi&misi', [VisiController::class, 'index'])->name('pemerintahan');
 Route::get('/profil/sejarah-desa', [ProfileDesaController::class, 'sejarahDesa'])->name('sejarah');
 Route::get('/profil/wilayah-desa', [ProfileDesaController::class, 'index'])->name('wilayah');
 Route::get('/karang-taruna', [KarangTarunaController::class, 'index'])->name('karang.taruna');

