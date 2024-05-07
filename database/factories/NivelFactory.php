<?php

namespace Database\Factories;

use App\Models\Nivel;
use Illuminate\Database\Eloquent\Factories\Factory;

class NivelFactory extends Factory
{
    protected $model = Nivel::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(3),
        ];
    }
}
