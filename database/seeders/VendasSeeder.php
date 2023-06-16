<?php

namespace Database\Seeders;

use App\Models\Vendas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    public function run(): void
    {
        Vendas::create([
            'numero_venda' => 1,
            'produto_id' => 6,
            'cliente_id' => 2,
        ]
            
        );
    }
}
