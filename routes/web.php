<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PescariaController;
use App\Http\Controllers\PeixesController;

//Pagina Index para acesso aos peixes
Route::get('/', [PescariaController::class, 'index'])->name('pescaria.index');

//Pagina para Listar a peixarada.
Route::get('/peixes/index', [PeixesController::class, 'index'])->name('peixes.index');

//Pagina para Criar peixe.
Route::get('/peixes/paginaCriacao', [PeixesController::class, 'paginaCriacao'])->name('peixes.paginaCriacao');

//Método para criação do peixe (post).
Route::post('/peixes/peixecriado', [PeixesController::class, 'peixecriado'])->name('peixes.peixecriado');

//Pagina para Editar peixe.
Route::get('/peixes/editar/{id}', [PeixesController::class, 'editar'])->name('peixes.editar');

//Método para edição do peixe (put).
Route::put('/peixes/atualizar/{id}', [PeixesController::class, 'atualizar'])->name('peixes.atualizar');

//Método para deletar o peixe (delete).
Route::delete('/peixes/deletar/{id}', [PeixesController::class, 'deletar'])->name('peixes.deletar');