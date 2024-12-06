<?php

namespace App\Services;
use App\Models\Disciplinas;
use App\Repositories\DisciplinaRepository;

class DisciplinaService 
{
    private $disciplinaRepository;
    public function __construct(DisciplinaRepository $disciplinaRepository) {
        $this->disciplinaRepository = $disciplinaRepository;
    }
    public function get()
    {
        return $this->disciplinaRepository->get();
    }

    public function getById($id){
        return $this->disciplinaRepository->getById($id);
        
    }

    public function postDisciplina($data)
    {
        return $this->disciplinaRepository->postDisciplina($data);
    }

    public function updateDisciplina ($id, $data)
    {
        return $this-> disciplinaRepository->updateDisciplina($id, $data);
    }

    public function deleteDisciplina( $id)  {
        
        return $this-> disciplinaRepository-> deleteDisciplina($id);
    }


}
