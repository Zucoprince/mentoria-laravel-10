<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_venda',
        'produto_id',
        'cliente_id',
    ];

    public function getVendasPesquisarIndex(string $search = '')
    {
        $venda = $this->where(function ($query) use ($search) {
            if ($search) {
                $query->where('numero_venda', $search);
                $query->orWhere('numero_venda', 'LIKE', "%{$search}%");
            }
        })->get();

        return $venda;
    }

    public function produto(){
        return $this->belongsTo(Produto::class);
    }

    public function cliente(){
        return $this->belongsTo(Clientes::class);
    }
}
