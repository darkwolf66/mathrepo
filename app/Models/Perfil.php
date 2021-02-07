<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $table = "perfils";

    public function projetoColaborador(){
        $this->hasMany('App\Models\ProjetoColaborador');
    }
}
