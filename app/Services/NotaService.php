<?php

namespace App\Services;


use App\Models\Nota;
use App\Repositories\NotaRepository;

class NotaService 
{
    private $notaRepository;
    public function __construct(NotaRepository $notaRepository) {
        $this->notaRepository = $notaRepository;
    }
    public function get()
    {
        return $this->notaRepository->get();
    }

    public function getById($id){
        return $this->notaRepository->getById($id);
        
    }

    public function postNota($data)
    {
        return $this->notaRepository->postNota($data);
    }

    public function updateNota ($id, $data)
    {
        return $this-> notaRepository->updateNota($id, $data);
    }

    public function deleteNota( $id)  {
        
        return $this-> notaRepository-> deleteNota($id);
    }


}
