<?php

namespace App\Services;

use App\Repositories\TurmaRepository;

class TurmaService 
{
    private $turmaRepository;
    public function __construct(TurmaRepository $turmaRepository) {
        $this->turmaRepository = $turmaRepository;
    }
    public function get()
    {
        return $this->turmaRepository->get();
    }

    public function getById($id){
        return $this->turmaRepository->getById($id);
        
    }

    public function postTurma($data)
    {
        return $this->turmaRepository->postTurma($data);
    }

    public function updateTurma ($id, $data)
    {
        return $this-> turmaRepository->updateTurma($id, $data);
    }

    public function deleteTurma( $id)  {
        
        return $this-> turmaRepository-> deleteTurma($id);
    }


}
