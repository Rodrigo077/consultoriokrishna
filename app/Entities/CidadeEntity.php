<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class CidadeEntity.
 *
 * @package namespace App\Entities;
 */
class CidadeEntity extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'estado'];

    protected $table = 'cidades';

    public function medicos()
    {
        return $this->hasMany('App\Entities\MedicoEntity', 'cidade_id');
    }
}
