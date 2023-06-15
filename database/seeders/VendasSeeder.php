<?php

namespace Database\Seeders;

use App\Models\Vendas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendas::create([
            'numero_da_venda' => 'Pedro Zucolo',
            'produto_id' => 5,
            'cliente_id' => 2,
        ]
            
        );
    }
}
