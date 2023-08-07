<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\MedicoEntityRepository;
use App\Entities\MedicoEntity;
use App\Validators\MedicoEntityValidator;

/**
 * Class MedicoEntityRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class MedicoEntityRepositoryEloquent extends BaseRepository implements MedicoEntityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MedicoEntity::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return MedicoEntityValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
