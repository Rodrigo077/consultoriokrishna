<?php

namespace App\Services;

use App\Repositories\PacienteEntityRepository;
use Exception;
use Illuminate\Support\Facades\DB;

class PacienteService implements IPacienteService {

    private $pacienteEntityRepository;

    public function __construct(PacienteEntityRepository $pacienteEntityRepository)
    {
        $this->pacienteEntityRepository = $pacienteEntityRepository;
    }

    /**
     * Método para adicionar um paciente
     */
    public function adicionarPaciente($dados)
    {
        try {
            DB::beginTransaction();
            $pacienteEntity = $this->pacienteEntityRepository->create($dados);
            DB::commit();
            
            return $pacienteEntity;
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }

    }


    /**
     * Método para atualizar o paciente
     */
    public function atualizarPaciente($dados, $id)
    {
        try {

            DB::beginTransaction();
            $pacienteEntity = $this->pacienteEntityRepository->update($dados, $id);
            if($pacienteEntity){
                DB::commit();
                return $pacienteEntity;
            }
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }
}