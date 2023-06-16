<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('dashboard', function (Blueprint $table) {
            $table->foreignId('produto_id')->constrained('produtos');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('vendas_id')->constrained('vendas');
            $table->timestamps();
        });
    }

    public function down(): void
    {

    }
};
