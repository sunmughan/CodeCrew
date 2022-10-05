<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PageController;

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

Route::get('/', [MainController::class, 'index'])->name('index');



Route::middleware('Madmin')->prefix('Panel')->group( function () {

    Route::get('/', [PanelController::class, 'index'])->name('kontrolPaneli');

    // PAGES ROUTES

    Route::get('/Sayfalar', [PageController::class, 'index'])->name('sayfalar');
    Route::get('/Sayfalar/Duzenle/{id}', [PageController::class, 'update'])->name('sayfaGuncelle');
    Route::get('/Sayfalar/Ekle', [PageController::class, 'insert'])->name('sayfaEkle');
    


});