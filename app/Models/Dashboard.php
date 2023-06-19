<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'produto_id',
        'cliente_id',
        'users_id'
    ];

    public function produto(){
        return $this->belongsTo(Produto::class);
    }

    public function cliente(){
        return $this->belongsTo(Clientes::class);
    }

    public function vendas(){
        return $this->belongsTo(Vendas::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
