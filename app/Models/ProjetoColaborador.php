<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetoColaborador extends Model
{
    use HasFactory;
    protected $table = "projeto_colaboradores";

    public function perfil(){
        return $this->belongsTo('App\Models\Perfil');
    }
    public function projeto(){
        return $this->belongsTo('App\Models\Projeto');
    }
}
