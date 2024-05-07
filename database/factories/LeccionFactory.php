<?php

namespace Database\Factories;

use App\Models\Leccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeccionFactory extends Factory
{
    protected $model = Leccion::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(3),
        ];
    }
}
