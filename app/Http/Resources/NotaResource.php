<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);

        // AQUI COLOCAMOS SÓ OS CAMPOS QUE QUEREMOS RETORNAR DA CONSULTA

//         $alunos_data = [];
// foreach($this-> alunos as $aluno)
// {
//     array_push($alunos_data,[
//         "nome" => $aluno -> nome,
//         "sobrenome" => $aluno -> sobrenome,
//     ]);
// }


        return [
            'id' => $this->id,
            'nota1' => $this -> nota1,
            'nota2' => $this -> nota2,
            'nota3' => $this -> nota3,
            'aluno' => new AlunoResource($this->aluno),
            'disciplina' => new DisciplinaResource($this-> disciplina),
            // 'aluno' => $alunos_data,
        ];
    }
}
