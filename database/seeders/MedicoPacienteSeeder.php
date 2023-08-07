<?php

namespace Database\Seeders;

use App\Entities\MedicoPacienteEntity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicoPacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('medico_paciente')->delete();
        MedicoPacienteEntity::create(['medico_id' => 1, 'paciente_id' => 1]);
        MedicoPacienteEntity::create(['medico_id' => 1, 'paciente_id' => 2]);
        MedicoPacienteEntity::create(['medico_id' => 1, 'paciente_id' => 3]);
        MedicoPacienteEntity::create(['medico_id' => 2, 'paciente_id' => 1]);
        MedicoPacienteEntity::create(['medico_id' => 2, 'paciente_id' => 2]);
        MedicoPacienteEntity::create(['medico_id' => 3, 'paciente_id' => 3]);
    }
}
