<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cpf'   => fake('pt_BR')->cpf(false),
            'nome'  => fake('pt_BR')->name(),
            'email' => fake('pt_BR')->email(),
            'senha' => fake()->asciify('********')
        ];
    }
}
