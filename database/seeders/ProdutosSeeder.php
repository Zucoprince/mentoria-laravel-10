<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome' => 'Pedro Zucolo',
            'valor' => '20.00'
        ]
            
        );

        Produto::create([
            'nome' => 'José Sartori',
            'valor' => '15.02'
        ]
            
        );

        Produto::create([
            'nome' => 'Victor Veronez',
            'valor' => '36.42'
        ]
            
        );

    }
}
