<?php

namespace  Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nivel::create(['nombre' => 'A1', 'description' => 'Nivel del curso']);
        Nivel::create(['nombre' => 'A2', 'description' => 'Nivel del curso']);
        Nivel::create(['nombre' => 'B1', 'description' => 'Nivel del curso']);
        Nivel::create(['nombre' => 'B2', 'description' => 'Nivel del curso']);
        Nivel::create(['nombre' => 'C1', 'description' => 'Nivel del curso']);
        Nivel::create(['nombre' => 'C2', 'description' => 'Nivel del curso']);
    }
}
