<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome'  => fake('pt_BR')->name(),
            'valor' => fake()->randomFloat(2, 0, 100)
        ];
    }
}
