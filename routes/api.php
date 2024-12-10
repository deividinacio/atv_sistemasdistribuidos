<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\TurmasController;
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

Route::controller(DisciplinaController::class) -> group(function(){

    Route::get('/disciplinas',  'getAllDisciplinas'); 
    Route::get('/disciplinas/{id}',  'getDisciplinaByID');
    Route::post('/disciplinas',  'postDisciplina'); 
    Route::patch('/disciplinas/{id}',  'updateDisciplina'); 
    Route::delete('/disciplinas/{id}',  'deleteDisciplina');

}) ;

Route::controller(ProfessoresController::class) -> group(function(){

    Route::get('/professores',  'getAllProfessores'); 
    Route::get('/professores/{id}',  'getProfessorByID');
    Route::post('/professores',  'postProfessor'); 
    Route::patch('/professores/{id}',  'updateProfessor'); 
    Route::delete('/professores/{id}',  'deleteProfessor');

}) ;

Route::controller(TurmaController::class) -> group(function(){

    Route::get('/turmas',  'getAllTurmas'); 
    Route::get('/turmas/{id}',  'getTurmaByID');
    Route::post('/turmas',  'postTurma'); 
    Route::patch('/turmas/{id}',  'updateTurma'); 
    Route::delete('/turmas/{id}',  'deleteTurma');

}) ;



