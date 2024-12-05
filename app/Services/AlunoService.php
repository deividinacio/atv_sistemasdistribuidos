<?php

namespace App\Services;


use AlunoRepository;
use App\Models\Aluno;
use App\Repositories\AlunoRepository as RepositoriesAlunoRepository;

class AlunoService 
{
    private $alunoRepository;
    public function __construct(RepositoriesAlunoRepository $alunoRepository) {
        $this->alunoRepository = $alunoRepository;
    }
    public function get()
    {
        return $this->alunoRepository->get();
    }

    public function getById($id){
        return $this->alunoRepository->getById($id);
        
    }

    public function postAluno($data)
    {
        return $this->alunoRepository->postAluno($data);
    }

    public function update ($id, $data)
    {
        return $this-> alunoRepository->update($id, $data);
    }

    public function delete( $id)  {
        
        return $this-> alunoRepository-> delete($id);
    }


}
