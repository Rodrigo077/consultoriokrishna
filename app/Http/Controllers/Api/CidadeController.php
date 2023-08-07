<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ICidadeService;
use App\Services\IMedicoService;
use Exception;

/**
 * @package namespace App\Http\Controllers;
 */
class CidadeController extends Controller
{
    /**
     * @var cidadeService
     */
    private $cidadeService;

    /**
     * @var medicoService
     */
    private $medicoService;

    /**
     * @param ICidadeService $iCidadeService
     */
    public function __construct(ICidadeService $iCidadeService,
                                IMedicoService $iMedicoService)
    {
        $this->cidadeService = $iCidadeService;
        $this->medicoService = $iMedicoService;
    }

    public function index()
    {
        try {
            $cidadeEntities = $this->cidadeService->listar();
            if(empty($cidadeEntities)){
                return response()->json(null, 404);
            }else{
                return response()->json($cidadeEntities, 200);
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function cidadesMedicos($idCidade)
    {
        try {
            $medicos = $this->medicoService->listarMedicosPorCidade($idCidade);

            if(empty($medicos->count())){
                return response()->json(null, 404);
            }else{
                return response()->json($medicos, 200);
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}