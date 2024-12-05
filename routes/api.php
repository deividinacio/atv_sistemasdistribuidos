<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(AlunoController::class) -> group(function(){

    Route::get('/alunos',  'getAllAlunos'); 
    Route::get('/alunos/{id}',  'getALunoByID');
    Route::post('/alunos',  'postAluno'); // deletar
    Route::patch('/alunos/{id}',  'updateAluno'); 
    Route::delete('/alunos/{id}',  'deletar');

}) ;

