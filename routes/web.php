<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('alumnos/crear', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('alumnos/{id}', [AlumnoController::class, 'show'])->name('alumnos.show');
