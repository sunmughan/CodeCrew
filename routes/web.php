<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;


use App\Http\Controllers\MainController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;


Route::get('/', [MainController::class, 'index'])->name('index');



Route::middleware('Madmin')->prefix('Panel')->group( function () {

    Route::get('/', [PanelController::class, 'index'])->name('kontrolPaneli');

    // PAGES ROUTES GET

    Route::get('/Sayfalar', [PageController::class, 'index'])->name('sayfalar');
    Route::get('/Sayfalar/Duzenle/{id}', [PageController::class, 'update'])->name('sayfaGuncelle');
    Route::get('/Sayfalar/Ekle', [PageController::class, 'insert'])->name('sayfaEkle');
    Route::get('/Sayfalar/SayfaSil/{id}', [PageController::class, 'delete'])->name('sayfaSil');

    // PAGES ROUTES POST

    // . values :
    // . pages_name
    // . pages action
    // . pages_author
    // . pages_main ? true : false
    Route::post('/sayfaEklePost', [PageController::class, 'insertPost'])->name('sayfaEklePost');
    Route::post('/sayfaGuncellePost', [PageController::class, 'updatePost'])->name('sayfaGuncellePost');

    // MEMU ROUTES GET

    Route::get('/Menuler', [MenuController::class, 'index'])->name('menuler');

    // MENU ROUTES POST

    Route::post('/MenuInsert', [MenuController::class, 'insertMenu'])->name('insertMenu');

    // LOAD ROUTES HELPER ROUTE

    Route::post('/loadActions', [MainController::class, 'loadActions'])->name('loadActions');



    Route::get('/router', function(Router $route){

        $r = $route->getRoutes();

        foreach ($r as $value) {
            echo $value->uri();
            echo "<br/>";
        }
    });

});
