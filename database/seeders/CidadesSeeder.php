<?php

namespace Database\Seeders;

use App\Entities\CidadeEntity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cidades')->delete();

        CidadeEntity::create(['nome' => 'Angra dos Reis', 'estado' => 'RJ']);
        CidadeEntity::create(['nome' => 'Aperibé', 'estado' => 'RJ']);
        CidadeEntity::create(['nome' => 'Araruama', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Areal', 'estado' => 'RJ']);
        CidadeEntity::create(['nome' => 'Armação dos Búzios', 'estado' => 'RJ']);
        CidadeEntity::create(['nome' => 'Arraial do Cabo', 'estado' => 'RJ']);
        CidadeEntity::create(['nome' => 'Barra do Piraí', 'estado' => 'RJ']);
        CidadeEntity::create(['nome' => 'Barra Mansa', 'estado' => 'RJ']);
        CidadeEntity::create(['nome' => 'Belford Roxo', 'estado' => 'RJ']);
        CidadeEntity::create(['nome' => 'Bom Jardim', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Bom Jesus do Itabapoana', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Cabo Frio', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Cachoeiras de Macacu', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Cambuci', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Campos dos Goytacazes', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Cantagalo', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Carapebus', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Cardoso Moreira', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Carmo', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Casimiro de Abreu', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Comendador Levy Gasparian', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Conceição de Macabu', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Cordeiro', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Duas Barras', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Duque de Caxias', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Engenheiro Paulo de Frontin', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Guapimirim', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Iguaba Grande', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Itaboraí', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Itaguaí', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Italva', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Itaocara', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Itaperuna', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Itatiaia', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Japeri', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Laje do Muriaé', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Macaé', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Macuco', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Magé', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Mangaratiba', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Maricá', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Mendes', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Mesquita', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Miguel Pereira', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Miracema', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Natividade', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Nilópolis', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Niterói', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Nova Friburgo', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Nova Iguaçu', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Paracambi', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Paraíba do Sul', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Parati', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Paty do Alferes', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Petrópolis', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Pinheiral', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Piraí', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Porciúncula', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Porto Real', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Quatis', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Queimados', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Quissamã', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Resende', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Rio Bonito', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Rio Claro', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Rio das Flores', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Rio das Ostras', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Rio de Janeiro', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Santa Maria Madalena', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Santo Antônio de Pádua', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'São Fidélis', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'São Francisco de Itabapoana', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'São Gonçalo', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'São João da Barra', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'São João de Meriti', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'São José de Ubá', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'São José do Vale do Rio Preto', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'São Pedro da Aldeia', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'São Sebastião do Alto', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Sapucaia', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Saquarema', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Seropédica', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Silva Jardim', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Sumidouro', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Tanguá', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Teresópolis', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Trajano de Morais', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Três Rios', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Valença', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Varre-Sai', 'estado' => 'RJ']); 
        CidadeEntity::create(['nome' => 'Vassouras', 'estado' => 'RJ']);
  }
}
