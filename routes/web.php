<?php

use App\Http\Controllers\AncController;
use App\Http\Controllers\ApotekController;
use App\Http\Controllers\BpjsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncController;
use App\Http\Controllers\KbController;
use App\Http\Controllers\KunjunganancController;
use App\Http\Controllers\KunjunganbpjsController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\LaborController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PasienkunjunganController;
use App\Http\Controllers\PersalinanController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UmumController;
use App\Models\bpjs;
use App\Models\Persalinan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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
    return Redirect::route('login');
});

Auth::routes();

// dashboard

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/apotek', [ApotekController::class, 'apotek'])->name('apotek');



// Route::get('/home', )

// hanya boleh di akses admin
Route::middleware(['admin'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    //isi masien
    Route::get('/pasien', [PasienController::class, 'index_pasien'])->name('index_pasien');


    // search
    Route::get('/search/bpjs', [SearchController::class, 'searchbpjs'])->name('searchbpjs');
    Route::get('/search', [SearchController::class, 'searchumum'])->name('searchumum');
    // Rute-rute yang memerlukan pengguna yang sudah login
    Route::get('/kunjungan/{pasien}', [KunjunganController::class, 'create_kunjungan'])->name('create_kunjungan');
    Route::post('/kunjungan/{pasien}', [KunjunganController::class, 'store_kunjungan'])->name('store_kunjungan');
    Route::get('show/kunjungan', [KunjunganController::class, 'show_kunjungan'])->name('show_kunjungan');

    //route pasien/register

    Route::get('registrasipasien', [PasienController::class, 'registrasipasien'])->name('registrasipasien');
    Route::post('/pasien/create', [PasienController::class, 'store_pasien'])->name('store_pasien');
    Route::get('/pasien/{pasien}/edit', [PasienController::class, 'edit_pasien'])->name('edit_pasien');
    Route::patch('/pasien/{pasien}/update', [PasienController::class, 'update_pasien'])->name('update_pasien');
    Route::delete('/pasien/{pasien}', [PasienController::class, 'delete_pasien'])->name('delete_pasien');
    Route::get('/surat-pendaftaran/{pasien}', [PasienController::class, 'surat_pendaftaran'])->name('surat_pendaftaran');
    Route::get('/pasien/{pasien}/menu', [PasienController::class, 'menu_pasien'])->name('menu_pasien');

    Route::get('/export', [PasienController::class, 'export_pasien'])->name('export_pasien');

    // route pasien umum

    Route::get('/umum', [UmumController::class, 'index_umum'])->name('index_umum');
    Route::get('/umum/{pasien}', [UmumController::class, 'create_umum'])->name('create_umum');
    Route::post('/umum/create/{pasien}', [UmumController::class, 'store_umum'])->name('store_umum');
    Route::get('/kunjungan', [UmumController::class, 'kunjungan'])->name('kujungan');
    Route::delete('/delete/umum/{umum}', [UmumController::class, 'delete_umum'])->name('delete_umum');
    Route::get('/exportumum', [UmumController::class, 'export_umum'])->name('export_umum');
    Route::get('/umum/edit/{umum}', [UmumController::class, 'edit_umum'])->name('edit_umum');
    Route::patch('/umum/update/{umum}', [UmumController::class, 'update_umum'])->name('update_umum');




    // route pasien kb

    Route::get('/kb', [KbController::class, 'show_kb'])->name('show_kb');
    Route::get('/kb/{pasien}', [KbController::class, 'create_kb'])->name('create_kb');
    Route::post('/kb/create/{pasien}', [KbController::class, 'store_kb'])->name('store_kb');
    Route::delete('/delete/kb/{kb}', [KbController::class, 'delete_kb'])->name('delete_kb');
    Route::get('/kb/edit/{kb}', [KbController::class, 'edit_kb'])->name('edit_kb');
    Route::patch('/kb/update/{kb}', [KbController::class, 'update_kb'])->name('update_kb');



    // route pasien labor
    Route::get('/labor', [LaborController::class, 'show_labor'])->name('show_labor');
    Route::get('/labor/{pasien}', [LaborController::class, 'create_labor'])->name('create_labor');
    Route::post('/labor/create/{pasien}', [LaborController::class, 'store_labor'])->name('store_labor');
    Route::delete('/delete/labor/{labor}', [LaborController::class, 'delete_labor'])->name('delete_labor');
    Route::get('/labor/edit/{labor}', [LaborController::class, 'edit_labor'])->name('edit_labor');
    Route::patch('/labor/update/{labor}', [LaborController::class, 'update_labor'])->name('update_labor');

    //route pasien inc
    Route::get('/inc/{pasien}', [IncController::class, 'create_inc'])->name('create_inc');
    Route::post('/inc/create/{pasien}', [IncController::class, 'store_inc'])->name('store_inc');
    Route::get('/inc', [IncController::class, 'show_inc'])->name('show_inc');
    Route::delete('/delete/inc/{pasien}', [incController::class, 'delete_inc'])->name('delete_inc');
    Route::get('/inc/edit/{inc}', [incController::class, 'edit_inc'])->name('edit_inc');
    Route::patch('/inc/update/{inc}', [incController::class, 'update_inc'])->name('update_inc');

    //route pasien anc
    Route::get('/anc', [AncController::class, 'show_anc'])->name('show_anc');
    Route::get('/anc/{pasien}', [AncController::class, 'create_anc'])->name('create_anc');
    Route::post('/anc/create/{pasien}', [AncController::class, 'store_anc'])->name('store_anc');
    Route::get('/anc/show/{anc}', [AncController::class, 'show_anc_utama'])->name('show_anc_utama');
    Route::delete('/delete/anc/{pasien}', [AncController::class, 'delete_anc'])->name('delete_anc');
    Route::get('/anc/edit/{anc}', [AncController::class, 'edit_anc'])->name('edit_anc');
    Route::patch('/anc/update/{anc}', [AncController::class, 'update_anc'])->name('update_anc');




    //kunjungan anc
    Route::get('/kunjungananc', [KunjunganancController::class, 'kunjungananc'])->name('kunjungananc');
    Route::get('/kunjungananc/{anc}', [KunjunganancController::class, 'create_kunjungananc'])->name('create_kunjungananc');
    Route::post('/kunjungananc/create/{anc}', [KunjunganancController::class, 'store_kunjungananc'])->name('store_kunjungananc');
    Route::delete('/kunjungananc/delete/{kunjungananc}', [KunjunganancController::class, 'delete_anc_utama'])->name('delete_anc_utama');
    Route::get('/kunjungananc/edit/{kunjungananc}', [KunjunganancController::class, 'edit_kunjungananc'])->name('edit_kunjungananc');
    Route::patch('/kunjungananc/update/{kunjungananc}', [KunjunganancController::class, 'update_kunjungananc'])->name('update_kunjungananc');

    //route pasien ibu hamil
    Route::get('/persalinan', [PersalinanController::class, 'show_persalinan'])->name('show_persalinan');
    Route::get('/persalinan/{pasien}', [PersalinanController::class, 'create_persalinan'])->name('create_persalinan');
    Route::post('/persalinan/create/{pasien}', [PersalinanController::class, 'store_persalinan'])->name('store_persalinan');
    Route::delete('/persalinan/delete/{persalinan}', [PersalinanController::class, 'delete_persalinan'])->name('delete_persalinan');
    Route::get('/persalinan/edit/{persalinan}', [PersalinanController::class, 'edit_persalinan'])->name('edit_persalinan');
    Route::patch('/persalinan/update/{persalinan}', [PersalinanController::class, 'update_persalinan'])->name('update_persalinan');



    //kunjungan bpjs
    Route::get('/kunjunganbpjs/create', [KunjunganbpjsController::class, 'create_kunjunganbpjs'])->name('create_kunjunganbpjs');
    Route::post('/kunjunganbpjs', [KunjunganbpjsController::class, 'store_kunjunganbpjs'])->name('store_kunjunganbpjs');
    Route::get('/show/kunjunganbpjs', [KunjunganbpjsController::class, 'show_kunjunganbpjs'])->name('show_kunjunganbpjs');
    Route::delete('/delete/kunjungabpjs/{kunjungan_bpjs}', [KunjunganbpjsController::class, 'delete_kunjungan_bpjs'])->name('delete_kunjungan_bpjs');
    Route::get('/kunjunganbpjs/{kunjungan_bpjs}/edit', [KunjunganbpjsController::class, 'edit_kunjunganbpjs'])->name('edit_kunjunganbpjs');
    Route::patch('/kunjunganbpjs/{kunjungan_bpjs}/update', [KunjunganbpjsController::class, 'update_kunjunganbpjs'])->name('update_kunjunganbpjs');



    //bpjs
    Route::get('/bpjs/{pasien}', [BpjsController::class, 'create_bpjs'])->name('create_bpjs');
    Route::post('/bpjs/create/{pasien}', [BpjsController::class, 'store_bpjs'])->name('store_bpjs');
    Route::get('/bpjs', [BpjsController::class, 'show_bpjs'])->name('show_bpjs');
    Route::delete('/delete/bpjs/{bpjs}', [BpjsController::class, 'delete_bpjs'])->name('delete_bpjs');
    Route::get('/bpjs/{bpjs}/edit', [BpjsController::class, 'edit_bpjs'])->name('edit_bpjs');
    Route::patch('/bpjs/{bpjs}/update', [BpjsController::class, 'update_bpjs'])->name('update_bpjs');


    //showPasienkunjungan
    Route::get('/pasien/kunjungan/{pasien}', [PasienkunjunganController::class, 'showpasien'])->name('showpasien');
    Route::get('/suratumum/{umum}', [PasienkunjunganController::class, 'surat_umum'])->name('surat_umum');
    Route::get('/pasien/kunjungan/umum/{pasien}', [PasienkunjunganController::class, 'show_kunjungan_umum'])->name('show_kunjungan_umum');
    Route::get('/pasien/kunjungan/labor/{pasien}', [PasienkunjunganController::class, 'show_kunjungan_labor'])->name('show_kunjungan_labor');
    Route::get('/suratlabor/{labor}', [PasienkunjunganController::class, 'surat_labor'])->name('surat_labor');
    Route::get('/pasien/kunjungan/kb/{pasien}', [PasienkunjunganController::class, 'show_kunjungan_kb'])->name('show_kunjungan_kb');
    Route::get('/suratkb/{kb}', [PasienkunjunganController::class, 'surat_kb'])->name('surat_kb');
    Route::get('/pasien/kunjungan/anc/{pasien}', [PasienkunjunganController::class, 'show_kunjungan_anc'])->name('show_kunjungan_anc');
    Route::get('/pasien/catatan/anc/{anc}', [PasienkunjunganController::class, 'show_catatan_anc'])->name('show_catatan_anc');
    Route::get('/pasien/kunjungan/inc/{pasien}', [PasienkunjunganController::class, 'show_kunjungan_inc'])->name('show_kunjungan_inc');
    Route::get('/suratinc/{inc}', [PasienkunjunganController::class, 'surat_inc'])->name('surat_inc');


    Route::get('/pasien/kunjungan/persalinan/{pasien}', [PasienkunjunganController::class, 'show_kunjungan_persalinan'])->name('show_kunjungan_persalinan');
    Route::get('/suratpersalinan/{persalinan}', [PasienkunjunganController::class, 'surat_persalinan'])->name('surat_persalinan');

    // kunjungan bpjs
    Route::get('/pasien/kunjungan/bpjs/{pasien}', [PasienkunjunganController::class, 'show_kunjungan_bpjs'])->name('show_kunjungan_bpjs');

    //show pasienbpjs
    Route::get('/bpjs/kunjungan/{kunjungan_bpjs}', [PasienkunjunganController::class, 'show_pasienkunjunganbpjs'])
        ->name('show_pasienkunjunganbpjs');
    Route::get('/suratbpjs/{bpjs}', [PasienkunjunganController::class, 'surat_bpjs'])->name('surat_bpjs');
});

Route::middleware(['auth'])->group(function () {

    //anc
    Route::get('/anc/show/{anc}', [AncController::class, 'show_anc_utama'])->name('show_anc_utama');

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    //isi masien
    Route::get('/pasien', [PasienController::class, 'index_pasien'])->name('index_pasien');


    // search
    Route::get('/search', [SearchController::class, 'searchumum'])->name('searchumum');


    // Rute-rute yang memerlukan pengguna yang sudah login
    Route::get('/kunjungan/{pasien}', [KunjunganController::class, 'create_kunjungan'])->name('create_kunjungan');
    Route::post('/kunjungan/{pasien}', [KunjunganController::class, 'store_kunjungan'])->name('store_kunjungan');
    Route::get('show/kunjungan', [KunjunganController::class, 'show_kunjungan'])->name('show_kunjungan');

    //route pasien/register

    Route::get('registrasipasien', [PasienController::class, 'registrasipasien'])->name('registrasipasien');
    Route::post('/pasien/create', [PasienController::class, 'store_pasien'])->name('store_pasien');
    Route::get('/pasien/{pasien}/edit', [PasienController::class, 'edit_pasien'])->name('edit_pasien');
    Route::patch('/pasien/{pasien}/update', [PasienController::class, 'update_pasien'])->name('update_pasien');
    Route::delete('/pasien/{pasien}', [PasienController::class, 'delete_pasien'])->name('delete_pasien');
    Route::get('/pasien/{pasien}/menu', [PasienController::class, 'menu_pasien'])->name('menu_pasien');

    // route pasien umum

    Route::get('/umum', [UmumController::class, 'index_umum'])->name('index_umum');
    Route::get('/umum/{pasien}', [UmumController::class, 'create_umum'])->name('create_umum');
    Route::post('/umum/create/{pasien}', [UmumController::class, 'store_umum'])->name('store_umum');
    Route::get('/kunjungan', [UmumController::class, 'kunjungan'])->name('kujungan');

    // route pasien kb

    Route::get('/kb', [KbController::class, 'show_kb'])->name('show_kb');
    Route::get('/kb/{pasien}', [KbController::class, 'create_kb'])->name('create_kb');
    Route::post('/kb/create/{pasien}', [KbController::class, 'store_kb'])->name('store_kb');

    // route pasien labor

    Route::get('/labor', [LaborController::class, 'show_labor'])->name('show_labor');
    Route::get('/labor/{pasien}', [LaborController::class, 'create_labor'])->name('create_labor');
    Route::post('/labor/create/{pasien}', [LaborController::class, 'store_labor'])->name('store_labor');
});



