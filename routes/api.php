<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CidadeController;
use App\Http\Controllers\Api\MedicoController;
use App\Http\Controllers\Api\PacienteController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/v1/login', [AuthController::class, 'login']);
//Rotas protegidas
Route::group(['middleware' => 'jwt.auth','prefix' => 'v1'], function ($router) {

    Route::post('/medicos', [MedicoController::class, 'criar']);
    //3.2.3. Vincular paciente e médico
    Route::post('/medicos/{id_medico}/pacientes', [MedicoController::class, 'vincularPacienteMedico']);
    //3.3.1. Listar pacientes do médico
    Route::get('/medicos/{id_medico}/pacientes', [MedicoController::class, 'listarPacientes']);
    //3.3.2. Atualizar paciente
    Route::put('/pacientes/{id_paciente}', [PacienteController::class, 'atualizar']);
    //3.3.3. Adicionar paciente
    Route::post('/pacientes', [PacienteController::class, 'criar']);

    Route::get('/user', function(Request $request){
        return $request->user();
    });
});

//Rotas sem proteção
Route::group(['prefix' => 'v1'], function ($router) {

    //3.1.1. Listar cidades
    Route::get('/cidades', [CidadeController::class, 'index']);
    //3.2.1. Listar médicos
    Route::get('/medicos', [MedicoController::class, 'index']);
    //3.2.2. Listar médicos de uma cidade
    Route::get('/cidades/{id_cidade}/medicos', [CidadeController::class, 'cidadesMedicos']);
});