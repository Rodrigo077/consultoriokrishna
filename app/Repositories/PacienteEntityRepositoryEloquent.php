<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PacienteEntityRepository;
use App\Entities\PacienteEntity;
use App\Validators\PacienteEntityValidator;

/**
 * Class PacienteEntityRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PacienteEntityRepositoryEloquent extends BaseRepository implements PacienteEntityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PacienteEntity::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PacienteEntityValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
