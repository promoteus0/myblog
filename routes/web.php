<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AktifitasController;
use App\Http\Controllers\publicController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ArtikerController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/home-artikel', [PublicController::class, 'homeArtikel'])->name('home.artikel');
Route::get('/view-artikel/{slug}', [PublicController::class, 'viewArtikel'])->name('artikel.view');
Route::get('/view-aktifitas/{slug}', [PublicController::class, 'viewAktifitas'])->name('aktifitas.view');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [ProfileController::class, 'updatenew'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/aktifitas', [AktifitasController::class,'create'])->name('aktifitas');
    Route::get('/aktifitasBaru', [AktifitasController::class,'baru'])->name('aktifitas.baru');
    Route::post('/aktifitasStor', [AktifitasController::class,'store'])->name('aktifitas.store');
    Route::get('/list-aktifitas', [AktifitasController::class, 'listAktifitas'])->name('list.aktifitas');
    Route::get('/edit-aktifitas/{id}', [AktifitasController::class, 'editAktifitas'])->name('edit.aktifitas');
    Route::put('update-aktifitas/{id}', [AktifitasController::class, 'updateAktifitas'])->name('update.aktifitas');
    Route::delete('delete-aktifitas/{id}', [AktifitasController::class, 'deleteaktifitas'])->name('delete.aktifitas');

    Route::get('/dashboard', [dashboardController::class, 'dashboardContent'])->name('dashboard');

    Route::get('/artikel', [ArtikerController::class, 'artikelIndex'])->name('artikel');
    Route::get('/artikelCreat', [ArtikerController::class, 'artikelCreat'])->name('artikel.creat');
    Route::post('/artikelStore', [ArtikerController::class,'artikelStore'])->name('artikel.store');
    Route::get('/edit-artikel/{id}', [ArtikerController::class, 'editArtikel'])->name('artikel.edit');
    Route::put('update-artikel/{id}', [ArtikerController::class, 'updateArtikel'])->name('atikel.update');
    Route::delete('delete-artikel/{id}', [ArtikerController::class, 'deleteArtikel'])->name('artikel.delete');

    

});

require __DIR__.'/auth.php';
