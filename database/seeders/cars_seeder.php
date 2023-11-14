<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\car;

class cars_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $auto = new car();
        $auto -> name = "Bochito";
        $auto -> description = "Color Rojo Mate y bien perron.";
        $auto -> year = 2010;
        $auto -> save();

        $auto2 = new car();
        $auto2 -> name = "Jeepeta";
        $auto2 -> description = "Arrebatada para las bichotas.";
        $auto2 -> year = 2021;
        $auto2 -> save();

        $auto3 = new car();
        $auto3 -> name = "McQueen";
        $auto3 -> description = "Cuchau, run run, tiene un 95 en la puerta. Sin defectos.";
        $auto3 -> year = 2006;
        $auto3 -> save();
    }
}
