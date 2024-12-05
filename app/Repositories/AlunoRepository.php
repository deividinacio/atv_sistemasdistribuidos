<?php

namespace App\Repositories;

use App\Models\Aluno;

class AlunoRepository
{

    public function get()
    {
        return Aluno::all();
    }

    public function postAluno($data)
    {
        return Aluno::create($data);
    }

    public function getById($id)
    {
        $aluno = Aluno::find($id);
        if($aluno)
        {
            return $aluno;
        }
        return null;
    }


    public function update($id, $data)
    {
        $alunos = Aluno::find($id);
        if ($alunos) {
            $alunos->update($data);
            return $alunos;
        }
        return null;
    }

    public function delete($id)
    {
        $aluno = Aluno::find($id);
        if ($aluno) {
            $aluno->delete();
            return $aluno;
        }
        return null;
    }
}




