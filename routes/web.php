<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\logsController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('inicio', function (){
    return view('inicio');
})->name('inicio');

Route::get('blog/busqueda', [EntradasController::class, 'buscar'])->name('entradas.buscar');
Route::get('blog/entradas', [EntradasController::class, 'index'])->name('entradas.index');
Route::get('blog/entradas/create', [EntradasController::class, 'create'])->name('entradas.create');
Route::post('blog/entradas', [EntradasController::class, 'store'])->name('entradas.store');
Route::get('blog/entradas/{entrada}', [EntradasController::class, 'show'])->name('entradas.show');
Route::get('blog/entradas{entrada}/edit', [EntradasController::class, 'edit'])->name('entradas.edit');
Route::put('blog/entradas/{entrada}', [EntradasController::class, 'update'])->name('entradas.update');
Route::get('blog/entradas{entrada}', [EntradasController::class, 'destroy'])->name('entradas.destroy');
Route::get('blog/pdf', [EntradasController::class, 'pdf'])->name('entradas.pdf');
Route::get('blog/excel', [EntradasController::class, 'excel'])->name('entradas.excel');


Route::get('blog/usuarios/acceso', [UserController::class, 'acceso'])->name('entradas.acceso');
Route::post('blog/inicia-sesion',[UserController::class,'login'])->name('inicia-sesion');
Route::get('blog/logout',[UserController::class,'logout'])->name('logout');
Route::get('blog/logs',[logsController::class,'index'])->name('entradas.listarLogs');
Route::get('blog/logsPDF',[logsController::class,'logsPDF'])->name('entradas.logsPDF');
Route::get('blog/logs/{listaLogs}',[logsController::class,'destroyLogs'])->name('entradas.destroyLogs');