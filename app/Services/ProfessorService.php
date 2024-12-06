<?php

namespace App\Services;


use App\Models\Professores;
use App\Repositories\ProfessorRepository;

class ProfessorService 
{
    private $professorRepository;
    public function __construct(ProfessorRepository $professorRepository) {
        $this->professorRepository = $professorRepository;
    }
    public function get()
    {
        return $this->professorRepository->get();
    }

    public function getById($id){
        return $this->professorRepository->getById($id);
        
    }

    public function postProfessor($data)
    {
        return $this->professorRepository->postProfessor($data);
    }

    public function updateProfessor ($id, $data)
    {
        return $this-> professorRepository->updateProfessor($id, $data);
    }

    public function deleteProfessor( $id)  {
        
        return $this-> professorRepository-> deleteProfessor($id);
    }


}
