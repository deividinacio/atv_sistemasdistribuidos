<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotaPostNotaRequest;
use App\Http\Requests\NotaUpdateNotaRequest;
use App\Http\Resources\NotaResource;
use App\Services\NotaService;

use Illuminate\Http\Request;

class NotaController extends Controller
{
    // contrutor

    private $notaService;
    public function __construct(NotaService $notaService) {
        $this->notaService = $notaService;
    }

     // Listando TODOS os alunos
   public function getAllNotas ()
   {

     //dd('entrou na função get');
     $notas = $this->notaService-> get();
     return  NotaResource::collection($notas) ;
     
     //return response()-> json ($alunos);
   }

   // Cadastrando novo aluno no banco de dados
   public function postNota(NotaPostNotaRequest $request)
   {

        $data = $request-> validated();
        $nota = $this->notaService->postNota($data);
    
        return (new NotaResource($nota))-> response()-> setStatusCode(201);
   }

   // Pega apenas um aluno pelo seu ID
   public function getNotaByID($id)
   {
        $nota = $this->notaService->getById($id);

        if($nota)
        {
            return new NotaResource($nota);
            return response() -> json($nota);
        }

        return response() ->json(['mensagem' => 'Nota não encontrada'], 404);
   }

   // Atualizar alunos
   public function updateNota(NotaUpdateNotaRequest $request, $id)
   {

        $data = $request-> validated();
        $nota = $this->notaService->updateNota($id, $data);

        if($nota)
        {
            return new NotaResource($nota);
        }
    
        return response ()-> json(['mensagem' => 'Não foi possível atualizar, nota não encontrada'], 404);
   }

   // Deletar item 
    public function deletarNota($id)
    {
        $nota = $this->notaService-> deleteNota($id);

        if($nota)
        {
            //return response() -> json($aluno. 202);
            return new NotaResource($nota);
        }

        return response ()-> json(['mensagem' => 'Não foi possível deletar, nota não encontrada'], 404);
    }

   
}

