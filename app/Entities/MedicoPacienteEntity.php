<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class MedicoPacienteEntity.
 *
 * @package namespace App\Entities;
 */
class MedicoPacienteEntity extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['medico_id', 'paciente_id'];
    protected $table = 'medico_paciente';

    public function paciente()
    {
        return $this->belongsTo('App\Entities\PacienteEntity', 'paciente_id');
    }

    public function medico()
    {
        return $this->belongsTo('App\Entities\MedicoEntity', 'medico_id');
    }
}
