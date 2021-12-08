<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [EmpresaController::class , 'index']);

/*
Route::resource('empresas','App\Http\Controllers\EmpresaController');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

Route::get('empresa', [EmpresaController::class , 'index'])->name('empresa');
Route::get('empresa/create', [EmpresaController::class , 'create'])->name('empresa.create');
Route::post('empresa/almacenar', [EmpresaController::class , 'store'])->name('empresa.store');
Route::get('empresa/eliminar/{empresa}', [EmpresaController::class , 'destroy']);
Route::get('empresa/edit/{empresa}', [EmpresaController::class , 'edit']);
Route::post('empresa/update/{empresa}', [EmpresaController::class , 'update']);