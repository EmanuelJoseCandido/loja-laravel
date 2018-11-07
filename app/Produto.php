<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $table = 'produtos';
    protected $fillable = ['nome', 'detalhe', 'img', 'valor'];

    public function categorias(){
        return $this->belongsToMany(Categoria::class, 'categorias_produtos', 'produto_id', 'categoria_id');
    }

    public function pedidos(){
        return $this->belongsToMany(Produto::class, 'pedidos_produtos', 'pedido_id', 'produto_id');
    }
}
