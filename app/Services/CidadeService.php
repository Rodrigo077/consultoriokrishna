<?php 

namespace App\Services;

use App\Repositories\CidadeEntityRepository;
use Exception;

class CidadeService implements ICidadeService{

    private $cidadeEntityRepository;

    public function __construct(CidadeEntityRepository $cidadeEntityRepository)
    {
        $this->cidadeEntityRepository = $cidadeEntityRepository;
    }

     /**
     * Método para listar cidades.
     */
    public function listar()
    {
        try{
            return $this->cidadeEntityRepository->all();
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
}

