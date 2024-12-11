<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlunoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
      //  return parent::toArray($request);

      // AQUI COLOCAMOS SÓ OS CAMPOS QUE QUEREMOS RETORNAR DA CONSULTA
      
      

      
      return[
        'id' => $this->id,
        'nome' => $this -> nome,
        'sobrenome' => $this -> sobrenome,
        'data_nascimento' => $this -> data_nascimento,
        'turma'=> new TurmaResource($this->turma),
      ];
    }
}
