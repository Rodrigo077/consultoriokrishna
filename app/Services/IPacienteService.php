<?php

namespace App\Services;

interface IPacienteService{

    /**
     * Método para adicionar um paciente
     */
    public function adicionarPaciente($dados);

    /**
     * Método para atualizar o paciente
     */
    public function atualizarPaciente($idPaciente, $id);
}