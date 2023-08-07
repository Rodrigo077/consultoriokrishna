<?php

namespace Database\Seeders;

use App\Entities\MedicoEntity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('medico')->delete();
        MedicoEntity::create(['nome'=>'José Antônio', 'especialidade' => 'Cardiologia', 'cidade_id' => 69]);
        MedicoEntity::create(['nome'=>'José José', 'especialidade' => 'Clínico Geral', 'cidade_id' => 16]);
        MedicoEntity::create(['nome'=>'Antônio Antônio', 'especialidade' => 'Ortopedia', 'cidade_id' => 13]);
    }
}
