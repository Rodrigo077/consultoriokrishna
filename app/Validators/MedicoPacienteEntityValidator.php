<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class MedicoPacienteValidator.
 *
 * @package namespace App\Validators;
 */
class MedicoPacienteEntityValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => ['medico_id' => 'required', 
                                            'paciente_id' => 'required'],
        ValidatorInterface::RULE_UPDATE => [''],
    ];
}
