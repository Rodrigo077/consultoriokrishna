<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface MedicoPacienteEntityRepository.
 *
 * @package namespace App\Repositories;
 */
interface MedicoPacienteEntityRepository extends RepositoryInterface
{
    //
    /**
    * Exemplo query customizada para retorno de uma entidade
    */
    public function listarPacientesPorMedico($idMedico);
}
