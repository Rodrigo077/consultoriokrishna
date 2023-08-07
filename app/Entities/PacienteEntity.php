<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class PacienteEntity.
 *
 * @package namespace App\Entities;
 */
class PacienteEntity extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'cpf', 'celular'];

    protected $table = 'paciente';

    public function medicoPacientes()
    {
        return $this->belongsTo('App\Entities\MedicoPacienteEntity', 'paciente_id');
    }

}
