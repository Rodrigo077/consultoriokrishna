<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\MedicoPacienteEntityRepository;
use App\Entities\MedicoPacienteEntity;
use App\Validators\MedicoPacienteEntityValidator;
use Illuminate\Support\Facades\DB;

/**
 * Class MedicoPacienteEntityRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class MedicoPacienteEntityRepositoryEloquent extends BaseRepository implements MedicoPacienteEntityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MedicoPacienteEntity::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return MedicoPacienteEntityValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
    * Exemplo query customizada para retorno de uma entidade
    */
    public function listarPacientesPorMedico($idMedico)
    {
        return DB::select("select pac.* from paciente pac
                    inner join medico_paciente med_pac
                    on pac.id = med_pac.paciente_id
                    where med_pac.medico_id  = ?
                    order by pac.id desc", [$idMedico]);
    }
    
}
