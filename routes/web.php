<?php

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Seguridad\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('seguridad.login.index');
});

// Route::get('login', function () {
//     return view('layouts.back.app');
// });

Route::controller(LoginController::class)->prefix('seguridad')->group(function () {
    Route::get('login', 'index')->middleware('guest')->name('login');
    Route::post('login', 'login')->middleware('guest')->name('login.acceso');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::prefix('admin-backend')->middleware('auth')->group(function () {
    Route::get('', function () {
        return view('layouts.back.app');
    })->name('admin');

    /* RUTAS DEL MENU */
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::get('menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('menu', [MenuController::class, 'store'])->name('menu.store');
    Route::put('menu/{id}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('menu/{id}/delete', [MenuController::class, 'destroy'])->name('menu.delete');
    Route::post('menu/guardar-orden', [MenuController::class, 'guardarOrden'])->name('menu.orden');
});
