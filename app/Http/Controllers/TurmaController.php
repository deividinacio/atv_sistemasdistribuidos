<?php

namespace App\Http\Controllers;

use App\Http\Requests\TurmaPostTurmaRequest;
use App\Http\Requests\TurmaUpdateTurmaRequest;
use App\Http\Resources\TurmaResource;
use App\Services\TurmaService;
use Illuminate\Http\Request;

class TurmaController extends Controller
{

     //  contrutor

     private $turmaService;
     public function __construct(TurmaService $turmaService) {
         $this->turmaService = $turmaService;
     }

     // Listando TODOS os alunos
   public function getAllTurmas()
   {

     //dd('entrou na função get');
     $turmas = $this->turmaService-> get();
     return  TurmaResource::collection($turmas) ;
     
     //return response()-> json ($alunos);
   }

   // Cadastrando novo aluno no banco de dados
   public function postTurma(TurmaPostTurmaRequest $request)
   {

        $data = $request-> validated();
        $turma = $this->turmaService->postTurma($data);
    
        return (new TurmaResource($turma))-> response()-> setStatusCode(201);
   }

   // Pega apenas um aluno pelo seu ID
   public function getTurmaByID($id)
   {
        $turma = $this->turmaService->getById($id);

        if($turma)
        {
            return new TurmaResource($turma);
            return response() -> json($turma);
        }

        return response() ->json(['mensagem' => 'Turma não encontrada'], 404);
   }

   // Atualizar alunos
   public function updateTurma(TurmaUpdateTurmaRequest $request, $id)
   {

        $data = $request-> validated();
        $turma = $this->turmaService->updateTurma($id, $data);

        if($turma)
        {
            return new TurmaResource($turma);
        }
    
        return response ()-> json(['mensagem' => 'Não foi possível atualizar, turma não encontrada'], 404);
   }

   // Deletar item 
    public function deleteTurma($id) //  deleteNota
    {
        $turma = $this->turmaService-> deleteTurma($id);

        if($turma)
        {
            //return response() -> json($aluno. 202);
            return new TurmaResource($turma);
        }

        return response ()-> json(['mensagem' => 'Não foi possível deletar, turma não encontrada'], 404);
    }
}
