<?php

namespace App\Repositories;


use App\Models\Disciplinas; // model

class DisciplinaRepository
{

    public function get()
    {
        return Disciplinas::all(); // chama o nome da model
    }

    public function postDisciplina($data)
    {
        return Disciplinas::create($data);
    }

    public function getById($id)
    {
        $disciplina = Disciplinas::find($id);
        if($disciplina)
        {
            return $disciplina;
        }
        return null;
    }


    public function updateDisciplina($id, $data)
    {
        $disciplinas = Disciplinas::find($id);
        if ($disciplinas) {
            $disciplinas->update($data);
            return $disciplinas;
        }
        return null;
    }

    public function deleteDisciplina($id)
    {
        $disciplina = Disciplinas::find($id);
        if ($disciplina) {
            $disciplina->delete(); // essa função não pode ter o mesmo nome que a função pai no caso a deleteNota
            return $disciplina;
        }
        return null;
    }
}




