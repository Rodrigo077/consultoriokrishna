<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\MedicoEntityCreateRequest;
use App\Http\Requests\MedicoEntityUpdateRequest;
use App\Repositories\MedicoEntityRepository;
use App\Services\IMedicoService;
use App\Validators\MedicoEntityValidator;
use Exception;
use App\Http\Controllers\Controller;
use App\Http\Requests\MedicoPacienteEntityCreateRequest;
use App\Validators\MedicoPacienteEntityValidator;
use App\Validators\MedicoPacienteValidator;

/**
 * @package namespace App\Http\Controllers;
 */
class MedicoController extends Controller
{
    /**
     * @var medicoService
     */
    private $medicoService;

    /**
     * @var MedicoEntityValidator
     */
    protected $validator;

    /**
     * @var MedicoPacienteEntityValidator
     */
    protected $medicoPacienteValidator;

    public function __construct(IMedicoService $medicoService,
                                MedicoPacienteEntityValidator $medicoPacienteValidator)
    {
        $this->medicoService = $medicoService;
        $this->medicoPacienteValidator = $medicoPacienteValidator;
    }

    public function index()
    {
        try {
            $medicoEntities = $this->medicoService->listar();
            if(empty($medicoEntities)){
                return response()->json(null, 404);
            }else{
                return response()->json($medicoEntities, 200);
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function criar(MedicoEntityCreateRequest $request)
    {
        try {
            $medicoEntity = $this->medicoService->adicionar($request->all());
            return response()->json($medicoEntity, 201);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function listarPacientes($idMedico)
    {
        try {
            $pacientes = $this->medicoService->listarPacientes($idMedico);
            if(empty($pacientes)){
                return response()->json(null, 404);
            }else{
                return response()->json($pacientes, 200);
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    
    public function vincularPacienteMedico(MedicoPacienteEntityCreateRequest $request)
    {
        try {
            $retorno = $this->medicoService->vincularPacienteMedico($request->get('medico_id'), $request->get('paciente_id'));
            return response()->json($retorno, 201);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
