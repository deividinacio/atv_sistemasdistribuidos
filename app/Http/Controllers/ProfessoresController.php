<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorPostProfessorRequest;
use App\Http\Requests\ProfessorUpdateProfessorRequest;
use App\Http\Resources\ProfessorResource;
use App\Services\ProfessorService;
use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    //  contrutor

    private $professorService;
    public function __construct(ProfessorService $professorService) {
        $this->professorService = $professorService;
    }

    // Listando TODOS os alunos
   public function getAllProfessores()
   {

     //dd('entrou na função get');
     $professores = $this->professorService-> get();
     return  ProfessorResource::collection($professores) ;
     
     //return response()-> json ($alunos);
   }

   // Cadastrando novo aluno no banco de dados
   public function postProfessor(ProfessorPostProfessorRequest $request)
   {

        $data = $request-> validated();
        $professor = $this->professorService->postProfessor($data);
    
        return (new ProfessorResource($professor))-> response()-> setStatusCode(201);
   }

   // Pega apenas um aluno pelo seu ID
   public function getProfessorByID($id)
   {
        $professor = $this->professorService->getById($id);

        if($professor)
        {
            return new ProfessorResource($professor);
            return response() -> json($professor);
        }

        return response() ->json(['mensagem' => 'Professor não encontrado'], 404);
   }

   // Atualizar alunos
   public function updateProfessor(ProfessorUpdateProfessorRequest $request, $id)
   {

        $data = $request-> validated();
        $professor = $this->professorService->updateProfessor($id, $data);

        if($professor)
        {
            return new ProfessorResource($professor);
        }
    
        return response ()-> json(['mensagem' => 'Não foi possível atualizar, professor não encontrado'], 404);
   }

   // Deletar item 
    public function deleteProfessor($id) //  deleteNota
    {
        $professor = $this->professorService-> deleteProfessor($id);

        if($professor)
        {
            //return response() -> json($aluno. 202);
            return new ProfessorResource($professor);
        }

        return response ()-> json(['mensagem' => 'Não foi possível deletar, professor não encontrado'], 404);
    }



}
