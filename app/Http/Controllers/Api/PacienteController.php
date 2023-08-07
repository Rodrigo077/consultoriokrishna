<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PacienteEntityCreateRequest;
use App\Http\Requests\PacienteEntityUpdateRequest;
use App\Services\IPacienteService;
use App\Validators\PacienteEntityValidator;
use Exception;

/**
 * @package namespace App\Http\Controllers;
 */
class PacienteController extends Controller
{
    /**
     * @var PacienteService
     */
    protected $pacienteService;

    /**
     * @var PacienteEntityValidator
     */
    protected $validator;

    public function __construct(IPacienteService $pacienteService, 
                                PacienteEntityValidator $validator)
    {
        $this->pacienteService = $pacienteService;
        $this->validator  = $validator;
    }

    public function index()
    {
    }

    public function criar(PacienteEntityCreateRequest $request)
    {
        try {
            $pacienteEntity = $this->pacienteService->adicionarPaciente($request->all());
            if($pacienteEntity){
                return response()->json($pacienteEntity, 201);
            }
        } catch (ValidatorException $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function show($id)
    {
        $pacienteEntity = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $pacienteEntity,
            ]);
        }

        return view('pacienteEntities.show', compact('pacienteEntity'));
    }

    public function atualizar(PacienteEntityUpdateRequest $request, $id)
    {
        try {

            $pacienteEntity = $this->pacienteService->atualizarPaciente($request->all(), $id);

            if($pacienteEntity){

                return response()->json($pacienteEntity, 200);
            }
        } catch (Exception $e) {

            return response()->json($e->getMessage(), 500);
        }
    }
}
