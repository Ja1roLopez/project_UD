<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
/*
API Empleados
*/
Route::get('empleados', [EmpleadoController::class, 'index']);
Route::post('empleados', [EmpleadoController::class, 'store']);
Route::put('empleados/{id}', [EmpleadoController::class, 'update']);
Route::delete('empleados/{id}', [EmpleadoController::class, 'destroy']);
/*
API Contacto 
*/
use App\Http\Controllers\FormularioContactoController;

Route::post('/formulario-contacto', [FormularioContactoController::class, 'store'])->name('formulario-contacto.store');
