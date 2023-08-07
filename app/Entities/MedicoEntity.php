<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class MedicoEntity.
 *
 * @package namespace App\Entities;
 */
class MedicoEntity extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'especialidade', 'cidade_id'];

    protected $table = 'medico';

    public function cidade()
    {
        return $this->belongsTo('App\Entities\CidadeEntity', 'cidade_id');
    }

    // public function medicoPaciente()
    // {
    //     return $this->hasMany('App\Entities\MedicoPacienteEntity', 'medico_id');
    // }
}
