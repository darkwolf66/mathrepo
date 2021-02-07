<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;
    protected $table = 'projetos';

    public function categoria() {
        return $this->hasOne('App\Models\ProjetoCategorias', 'projeto_id');
    }
    public function colaboradores(){
        return $this->hasMany('App\Models\ProjetoColaborador');
    }
    public function modulos(){
        return $this->hasMany('App\Models\ProjetoModulos');
    }
}
