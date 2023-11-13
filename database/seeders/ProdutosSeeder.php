<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdutosSeeder extends Seeder
{
    
    public function run(): void
    { 
        $produtos = Produto::factory()->count(10)->create();
    }
}
