<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;



//Landing Page
Route::get('/', function () {
    return view('welcome');
});


//Criar Usuario
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/criar_usuario', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/criar_usuario', [UsuarioController::class, 'store'])->name('usuarios.store');

// Alterar
Route::get('/usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}/update_user', [UsuarioController::class, 'update_user'])->name('usuarios.update_user');

// Deletar
Route::delete('/usuarios/{usuario}/delete', [UsuarioController::class, 'delete'])->name('usuarios.delete');

