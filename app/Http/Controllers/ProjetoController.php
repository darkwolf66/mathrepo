<?php

namespace App\Http\Controllers;

use App\Models\ModuloArquivo;
use App\Models\Perfil;
use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $slug)
    {
        if(Projeto::where('slug', $slug)->count() <= 0){
            return abort(404);
        }
        $numeroDeArquivos = ModuloArquivo::all()->count();
        $project = Projeto::with(['categoria', 'colaboradores', 'colaboradores.perfil', 'modulos.arquivos'])->first();
        $project->numeroDeArquivos = $numeroDeArquivos;
        return view('projeto', ['projeto' => $project]);
    }
}
