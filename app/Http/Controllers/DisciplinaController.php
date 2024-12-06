<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisciplinaPostDisciplinaRequest;
use App\Http\Requests\DisciplinaUpdateDisciplinaRequest;
use App\Http\Resources\DisciplinaResource;
use App\Services\DisciplinaService;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    // contrutor

    private $disciplinaService;
    public function __construct(DisciplinaService $disciplinaService) {
        $this->disciplinaService = $disciplinaService;
    }


    // Listando TODOS os alunos
   public function getAllDisciplinas ()
   {

     //dd('entrou na função get');
     $disciplinas = $this->disciplinaService-> get();
     return  DisciplinaResource::collection($disciplinas) ;
     
     //return response()-> json ($alunos);
   }

   // Cadastrando novo aluno no banco de dados
   public function postDisciplina(DisciplinaPostDisciplinaRequest $request)
   {

        $data = $request-> validated();
        $disciplina = $this->disciplinaService->postDisciplina($data);
    
        return (new DisciplinaResource($disciplina))-> response()-> setStatusCode(201);
   }

   // Pega apenas um aluno pelo seu ID
   public function getDisciplinaByID($id)
   {
        $disciplina = $this->disciplinaService->getById($id);

        if($disciplina)
        {
            return new DisciplinaResource($disciplina);
            return response() -> json($disciplina);
        }

        return response() ->json(['mensagem' => 'Disciplina não encontrada'], 404);
   }

   // Atualizar alunos
   public function updateDisciplina(DisciplinaUpdateDisciplinaRequest $request, $id)
   {

        $data = $request-> validated();
        $disciplina = $this->disciplinaService->updateDisciplina($id, $data);

        if($disciplina)
        {
            return new DisciplinaResource($disciplina);
        }
    
        return response ()-> json(['mensagem' => 'Não foi possível atualizar, disciplina não encontrada'], 404);
   }

   // Deletar item 
    public function deleteDisciplina($id) //  deleteDisciplina
    {
        $disciplina = $this->disciplinaService-> deleteDisciplina($id);

        if($disciplina)
        {
            //return response() -> json($aluno. 202);
            return new DisciplinaResource($disciplina);
        }

        return response ()-> json(['mensagem' => 'Não foi possível deletar, disciplina não encontrada'], 404);
    }

}
