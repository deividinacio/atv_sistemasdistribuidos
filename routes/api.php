<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\NotaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(AlunoController::class) -> group(function(){

    Route::get('/alunos',  'getAllAlunos'); 
    Route::get('/alunos/{id}',  'getALunoByID');
    Route::post('/alunos',  'postAluno'); 
    Route::patch('/alunos/{id}',  'updateAluno'); 
    Route::delete('/alunos/{id}',  'deletar');

}) ;

Route::controller(NotaController::class) -> group(function(){

    Route::get('/notas',  'getAllNotas'); 
    Route::get('/notas/{id}',  'getNotaByID');
    Route::post('/notas',  'postNota'); 
    Route::patch('/notas/{id}',  'updateNota'); 
    Route::delete('/notas/{id}',  'deleteNota');

}) ;

