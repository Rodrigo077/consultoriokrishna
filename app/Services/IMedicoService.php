<?php

namespace App\Services;

interface IMedicoService{

    /**
     * Método para adicionar médico
     */
    public function adicionar($dados);

    /**
     * Método para listar médicos.
     */
    public function listar();

    /**
     * Método para listar médicos por cidade.
     */
    public function listarMedicosPorCidade($idCidade);

    /**
     * Método para listar pacientes médicos do médico.
     */
    public function listarPacientes($idMedico);

    /**
     * Método para vincular pacientes ao médico
     */
    public function vincularPacienteMedico($idMedico, $idPaciente);
}