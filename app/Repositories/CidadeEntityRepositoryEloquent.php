<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CidadeEntityRepository;
use App\Entities\CidadeEntity;
use App\Validators\CidadeEntityValidator;

/**
 * Class CidadeEntityRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CidadeEntityRepositoryEloquent extends BaseRepository implements CidadeEntityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CidadeEntity::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CidadeEntityValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
