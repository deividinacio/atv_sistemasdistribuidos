<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoPostAlunoRequest;
use App\Http\Requests\AlunoUpdateAlunoRequest;
use App\Http\Resources\AlunoResource;
use App\Models\Aluno;
use App\Services\AlunoService;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    private $alunoService;
    public function __construct(AlunoService $alunoService) {
        $this->alunoService = $alunoService;
    }

    // Listando TODOS os alunos
   public function getAllAlunos ()
   {
     //dd('entrou na função get');
     $alunos = $this->alunoService-> get();
     return  AlunoResource::collection($alunos) ;
     
     //return response()-> json ($alunos);
   }

   
// Cadastrando novo aluno no banco de dados
   public function postAluno(AlunoPostAlunoRequest $request)
   {

        $data = $request-> validated();
        $aluno = $this->alunoService->postAluno($data);
    
        return (new AlunoResource($aluno))-> response()-> setStatusCode(201);
   }

   // Pega apenas um aluno pelo seu ID
   public function getALunoByID($id)
   {
        $aluno = $this->alunoService->getById($id);

        if($aluno)
        {
            return new AlunoResource($aluno);
            return response() -> json($aluno);
        }

        return response() ->json(['mensagem' => 'Aluno não encontrado'], 404);
   }

   // Atualizar alunos
   public function updateAluno(AlunoUpdateAlunoRequest $request, $id)
   {

        $data = $request-> validated();
        $aluno = $this->alunoService->update($id, $data);

        if($aluno)
        {
            return new AlunoResource($aluno);
        }
    
        return response ()-> json(['mensagem' => 'Não foi possível atualizar, aluno não encontrado'], 404);
   }

   // Deletar item 
    public function deletar($id)
    {
        $aluno = $this->alunoService-> delete($id);

        if($aluno)
        {
            //return response() -> json($aluno. 202);
            return new AlunoResource($aluno);
        }

        return response ()-> json(['mensagem' => 'Não foi possível deletar, aluno não encontrado'], 404);
    }
}
