<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Esto generará nombres de cursos aleatorios de 3 palabras
            'nombre' => $this->faker->sentence(3),
        ];
    }
}