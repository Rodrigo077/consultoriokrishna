<?php

namespace Database\Seeders;

use App\Entities\PacienteEntity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('paciente')->delete();
        PacienteEntity::create(['nome' => 'Vini Jr', 'cpf' => '68851114650', 'celular' => '21998652123']);
        PacienteEntity::create(['nome' => 'Neymar Jr', 'cpf' => '62775872425', 'celular' => '21998650980']);
        PacienteEntity::create(['nome' => 'Rodrygo', 'cpf' => '27545138848', 'celular' => '21998657584']);
    }
}
