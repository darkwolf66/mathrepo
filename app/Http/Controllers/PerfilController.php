<?php

namespace App\Http\Controllers;

use App\Models\ProjetoColaborador;
use Illuminate\Http\Request;
use App\Models\Perfil;

class PerfilController extends Controller
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
        if(Perfil::where('slug', $slug)->count() <= 0 && Perfil::where('id', $slug)->count() <= 0){
            return abort(404);
        }
        $perfil = Perfil::where('slug', $slug)->orWhere('id', $slug)->first();

        $projetos = ProjetoColaborador::with('projeto')->where('perfil_id', $perfil->id)->get();

        $perfil->projetos = $projetos;

        return view('perfil', ['perfil' => $perfil]);
    }
}
