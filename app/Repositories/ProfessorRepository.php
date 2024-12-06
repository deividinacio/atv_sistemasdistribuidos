<?php

namespace App\Repositories;


use App\Models\Professores;

class ProfessorRepository
{

    public function get()
    {
        return Professores::all();
    }

    public function postProfessor($data)
    {
        return Professores::create($data);
    }


    public function getById($id)
    {
        $professor = Professores::find($id);
        if($professor)
        {
            return $professor;
        }
        return null;
    }


    public function updateProfessor($id, $data)
    {
        $professores = Professores::find($id);
        if ($professores) {
            $professores->update($data);
            return $professores;
        }
        return null;
    }

    public function deleteProfessor($id)
    {
        $professor = Professores::find($id);
        if ($professor) {
            $professor->delete(); // essa função não pode ter o mesmo nome que a função pai no caso a deleteNota
            return $professor;
        }
        return null;
    }
}




