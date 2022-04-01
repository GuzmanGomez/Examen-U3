<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Estadio;
use App\Models\Propietario;
use App\Models\Equipo;

class EscudoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {                                                                     
        for ($i=0; $i <15; $i++) {           
            DB::table('escudos')->insert([
                'nombre' => $id = Equipo::inRandomOrder()->first()->id,
                'nombre propietario' => $id = Propietario::inRandomOrder()->first()->id,
                'estadio' => $id = Estadio::inRandomOrder()->first()->id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
