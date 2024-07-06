<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/tareas', [TareaController::class, 'index']);
Route::get('/tareas/overdue', [TareaController::class, 'overdue']);
Route::get('/proyectos', [ProyectoController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
