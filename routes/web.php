<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_usuario', [UserController::class,'formCriarUsuario']);
Route::get('/listar_usuarios', [UserController::class, 'listar']);
Route::post('/criar_usuario', [UserController::class, 'criar']);



Route::get('/cadastrar_produto', [ProductController::class,'formCriarProduto']);
Route::get('/listar_produto', [ProductController::class,'listarProduto']);
Route::post('/criar_produto', [ProductController::class,'criarProduto']);
