<?php

namespace App\Repositories;

use App\Models\Turma;

class TurmaRepository
{

    public function get()
    {
        return Turma::all();
    }

    public function postTurma($data)
    {
        return Turma::create($data);
    }


    public function getById($id)
    {
        $turma = Turma::find($id);
        if($turma)
        {
            return $turma;
        }
        return null;
    }


    public function updateTurma($id, $data)
    {
        $turmas = Turma::find($id);
        if ($turmas) {
            $turmas->update($data);
            return $turmas;
        }
        return null;
    }

    public function deleteTurma($id)
    {
        $turma = Turma::find($id);
        if ($turma) {
            $turma->delete(); // essa função não pode ter o mesmo nome que a função pai no caso a deleteNota
            return $turma;
        }
        return null;
    }
}




