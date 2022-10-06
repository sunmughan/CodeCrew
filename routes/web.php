<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PageController;


Route::get('/', [MainController::class, 'index'])->name('index');



Route::middleware('Madmin')->prefix('Panel')->group( function () {

    Route::get('/', [PanelController::class, 'index'])->name('kontrolPaneli');

    // PAGES ROUTES GET

    Route::get('/Sayfalar', [PageController::class, 'index'])->name('sayfalar');
    Route::get('/Sayfalar/Duzenle/{id}', [PageController::class, 'update'])->name('sayfaGuncelle');
    Route::get('/Sayfalar/Ekle', [PageController::class, 'insert'])->name('sayfaEkle');

    // PAGES ROUTES POST

    // . values :
    // . pages_name
    // . pages action
    // . pages_author
    // . pages_main ? true : false
    Route::post('/sayfaEklePost', [PageController::class, 'insertPost'])->name('sayfaEklePost');




});