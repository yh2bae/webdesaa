<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\Admin\DesaController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DusunController;
use App\Http\Controllers\ProfileDesaController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DetailDusunController;
use App\Http\Controllers\Admin\StrukturDesaController;
use App\Http\Controllers\Admin\KategoriBeritaController;
use App\Http\Controllers\Admin\AnggaranRealisasiController;
use App\Http\Controllers\Admin\KepalaDesaController;
use App\Http\Controllers\ApbdesController;
use App\Http\Controllers\PemerintahanDesa;

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


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login/check', [AuthController::class, 'check'])->name('check');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin-panel')->group(function () {

    
    // CKeditor Upload
    Route::post('/ckeditor/upload', [CkeditorController::class, 'upload'])->name('upload');

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
// artikel dan kategori
    Route::resource('artikel', ArtikelController::class);
    Route::resource('kategori', KategoriBeritaController::class);
// end 
    Route::resource('configuration', ConfigController::class)->shallow()->only(['index', 'update']);

    Route::resource('slider', SliderController::class);

    Route::resource('anggaran-realisasi', AnggaranRealisasiController::class)->except('create','show');
    // Route::get('/anggaran-realisasi/{anggaran_realisasi}', function (){return abort(404);});
    Route::get('/kelompok-jenis-anggaran/{kelompokJenisAnggaran}', [AnggaranRealisasiController::class, 'kelompokJenisAnggaran']);
    Route::get('/detail-jenis-anggaran/{id}', [AnggaranRealisasiController::class, 'show'])->name('detail-jenis-anggaran.show');
    Route::get('/tambah-anggaran-realisasi', [AnggaranRealisasiController::class, 'create'])->name('anggaran-realisasi.create');

    Route::resource('/kepala-desa', KepalaDesaController::class);
});

// home frontend
 Route::get('/', [HomeController::class, 'index'])->name('home');
 Route::get('/berita/detail/{slug}', [HomeController::class, 'detailArtikel'])->name('detail.artikel');
 Route::get('/profil/sejarah-desa', [ProfileDesaController::class, 'sejarahDesa'])->name('sejarah');
 Route::get('/profil/visi-&-misi', [ProfileDesaController::class, 'visiMisi'])->name('visimisi');
 Route::get('/laporan-apbdes', [ApbdesController::class, 'index'])->name('laporan-apbdes');
 Route::get('/pemerintahan-desa', [PemerintahanDesa::class, 'index'])->name('pemerintahan.index');
 Route::get('/pemerintahan-desa/detail/{name}', [PemerintahanDesa::class, 'detailPemerintah'])->name('pemerintahan.detail');

//  Route::get('/profil/wilayah-desa', [ProfileDesaController::class, 'index'])->name('wilayah');


 Route::get('/statistik-penduduk', [GrafikController::class, 'index'])->name('statistik-penduduk');
 Route::get('/statistik-penduduk/show', [GrafikController::class, 'show'])->name('statistik-penduduk.show');
 Route::get('/anggaran-realisasi-cart', [AnggaranRealisasiController::class, 'cart'])->name('anggaran-realisasi.cart');
