<?php

namespace App\Services;

use App\Repositories\MedicoEntityRepository;
use App\Repositories\MedicoPacienteEntityRepository;
use App\Repositories\PacienteEntityRepository;
use Exception;
use Illuminate\Support\Facades\DB;

class MedicoService implements IMedicoService {

    private $medicoRepository;
    private $medicoPacienteRepository;
    private $pacienteEntityRepository;

    public function __construct(MedicoEntityRepository $medicoRepository,
                                MedicoPacienteEntityRepository $medicoPacienteRepository,
                                PacienteEntityRepository $pacienteEntityRepository)
    {
        $this->medicoRepository = $medicoRepository;
        $this->medicoPacienteRepository = $medicoPacienteRepository;
        $this->pacienteEntityRepository = $pacienteEntityRepository;
    }

    /**
     * Método para adicionar médico
     */
    public function adicionar($dados)
    {
        try {
            DB::beginTransaction();
            $medicoEntity = $this->medicoRepository->create($dados);
            DB::commit();
            
            return $medicoEntity;
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Método para listar médicos.
     */
    public function listar()
    {
        try {
            return $this->medicoRepository->all();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Método para listar médicos por cidade.
     */
    public function listarMedicosPorCidade($idCidade)
    {
        try {
            return $this->medicoRepository->with(['cidade'])->findByField('cidade_id', $idCidade);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Método para listar pacientes médicos do médico.
     */
    public function listarPacientes($idMedico)
    {
        try {
            return $this->medicoPacienteRepository->listarPacientesPorMedico($idMedico);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Método para vincular pacientes ao médico
     */
    public function vincularPacienteMedico($idMedico, $idPaciente)
    {
        try {
            DB::beginTransaction();
            $cadastroSucesso = $this->medicoPacienteRepository->create(['medico_id'=> $idMedico, 'paciente_id' => $idPaciente]);
            if($cadastroSucesso){
                DB::commit();
                return $this->medicoPacienteRepository->with(['medico', 'paciente'])->find($cadastroSucesso['id']);
            }
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }
}