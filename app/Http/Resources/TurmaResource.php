<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TurmaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       // return parent::toArray($request);

       // AQUI COLOCAMOS SÓ OS CAMPOS QUE QUEREMOS RETORNAR DA CONSULTA

        $alunos_data = [];
        foreach($this-> alunos as $alunos)
        {
            array_push($alunos_data,[
                "nome" => $alunos -> nome,
                "sobrenome" => $alunos -> sobrenome,
                "data_nascimento" => $alunos -> data_nascimento,
            ]);
        }

       return [
        'id' => $this->id,
        'nome' => $this -> nome,
        'data_inicio' => $this -> data_inicio,
        'data_fim' => $this -> data_fim,
        'alunos' => $alunos_data
       ];

    }
}
