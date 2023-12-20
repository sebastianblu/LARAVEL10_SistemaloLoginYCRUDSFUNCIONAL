<?php

// use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EventoController;

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::post('/eventos/controlar-ingreso', [EventoController::class, 'controlarIngreso'])->name('eventos.controlar_ingreso');
Route::get('/eventos/reporte', [EventoController::class, 'reporteIngresos'])->name('eventos.reporte');
