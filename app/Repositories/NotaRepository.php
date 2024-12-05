<?php

namespace App\Repositories;


use App\Models\Nota;

class NotaRepository
{

    public function get()
    {
        return Nota::all();
    }

    public function postNota($data)
    {
        return Nota::create($data);
    }

    public function getById($id)
    {
        $nota = Nota::find($id);
        if($nota)
        {
            return $nota;
        }
        return null;
    }


    public function updateNota($id, $data)
    {
        $notas = Nota::find($id);
        if ($notas) {
            $notas->update($data);
            return $notas;
        }
        return null;
    }

    public function deleteNota($id)
    {
        $nota = Nota::find($id);
        if ($nota) {
            $nota->deleteNota();
            return $nota;
        }
        return null;
    }
}




