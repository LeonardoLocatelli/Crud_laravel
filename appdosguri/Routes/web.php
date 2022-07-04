<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\CidadesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['prefix'=>'estados', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get( '', [EstadosController::class, 'index'] )->name('estados');
    Route::get('create', [EstadosController::class, 'create'] )->name('estados.create');
    Route::get( '{id}/destroy', [EstadosController::class, 'destroy'] )->name('estados.destroy');
    Route::get( '{id}/edit', [EstadosController::class, 'edit'] )->name('estados.edit');
    Route::put( '{id}/update', [EstadosController::class, 'update'] )->name('estados.update');
    Route::post( 'store', [EstadosController::class, 'store'] )->name('estados.store');
});

Route::group(['prefix'=>'cidades', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get( '', [CidadesController::class, 'index'] )->name('cidades');
    Route::get('create', [CidadesController::class, 'create'] )->name('cidades.create');
    Route::get( '{id}/destroy', [CidadesController::class, 'destroy'] )->name('cidades.destroy');
    Route::get( '{id}/edit', [CidadesController::class, 'edit'] )->name('cidades.edit');
    Route::put( '{id}/update', [CidadesController::class, 'update'] )->name('cidades.update');
    Route::post( 'store', [CidadesController::class, 'store'] )->name('cidades.store');
});

require __DIR__.'/auth.php';