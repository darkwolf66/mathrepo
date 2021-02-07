<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetoModulos extends Model
{
    protected $table = "projeto_modulos";
    use HasFactory;

    public function arquivos(){
        return $this->hasMany('App\Models\ModuloArquivo', 'projeto_modulo_id', 'id');
    }
}
