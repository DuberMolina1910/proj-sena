<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FichasController;
use App\Http\Controllers\JornadasController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\UsuariosController;


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

Route::get('/', function () {
    return view('index');
});

Route::get('management', function (){
    return view('layouts.content');
})->name('index.manage');


//JORNADAS
Route::get('jornadas',[JornadasController::class, 'index'])->name('jornadas.index');

//PROGRAMAS
Route::get('programas',[ProgramasController::class, 'index'])->name('programas.index');
Route::get('programas/create',[ProgramasController::class, 'create'])->name('programas.create');
Route::post('programas',[ProgramasController::class, 'store'])->name('programas.store');
Route::get('programas/edit/{codPrograma}',[ProgramasController::class, 'edit'])->name('programas.edit');
Route::put('programas/{codPrograma}',[ProgramasController::class, 'update'])->name('programas.update');
Route::get('programas/show/{codPrograma}',[ProgramasController::class, 'show'])->name('programas.show');
Route::delete('programas/{codPrograma}',[ProgramasController::class, 'delete'])->name('programas.delete');

//FICHAS
Route::get('fichas',[FichasController::class, 'index'])->name('fichas.index');
Route::get('fichas/create',[FichasController::class, 'create'])->name('fichas.create');
Route::post('fichas',[FichasController::class, 'store'])->name('fichas.store');
Route::get('fichas/edit/{numFicha}',[FichasController::class, 'edit'])->name('fichas.edit');
Route::put('fichas/{numFicha}',[FichasController::class, 'update'])->name('fichas.update');
Route::get('fichas/show/{numFicha}',[FichasController::class, 'show'])->name('fichas.show');

//PERFILES
Route::get('perfiles',[PerfilesController::class, 'index'])->name('perfiles.index');
Route::get('perfiles/create',[PerfilesController::class, 'create'])->name('perfiles.create');
Route::post('perfiles',[PerfilesController::class, 'store'])->name('perfiles.store');
Route::get('perfiles/edit/{codPerfil}',[PerfilesController::class, 'edit'])->name('perfiles.edit');
Route::put('perfiles/{codPerfil}',[PerfilesController::class, 'update'])->name('perfiles.update');
Route::get('perfiles/show/{codPerfil}',[PerfilesController::class, 'show'])->name('perfiles.show');
Route::delete('perfiles/{codPerfil}',[PerfilesController::class, 'delete'])->name('perfiles.delete');

//USUARIOS
Route::get('usuarios',[UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('usuarios/create',[UsuariosController::class, 'create'])->name('usuarios.create');
Route::post('usuarios',[UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('usuarios/edit/{docUsuario}',[UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::put('usuarios/{docUsuario}',[UsuariosController::class, 'update'])->name('usuarios.update');
Route::get('usuarios/show/{docUsuario}',[UsuariosController::class, 'show'])->name('usuarios.show');
Route::delete('usuarios/{docUsuario}',[UsuariosController::class, 'delete'])->name('usuarios.delete');
