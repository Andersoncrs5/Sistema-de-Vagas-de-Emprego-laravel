<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuariosModel;

class candidatosController extends Controller
{
    public function BuscarCandidatos()
    {
        if(session('ativo') == 0){  
            return redirect()->route('bem_vindo')->with('mensagem', 'Faça login para continuar');
        }

        $candidatos = usuariosModel::where("pausa_usuario", "1")
                        ->where('id_usuario', '!=', session('id')) 
                        ->paginate(session("paginate"));

        return view('candidatos.buscarCandidatos', compact("candidatos"));
    }
    public function filtrarCandidatos()
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view("candidatos.filtrarCandidatos");
    }
    public function filtrandoCandidatos(Request $request)
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem', 'Faça login para continuar');
        };

        $query = usuariosModel::query();

        if ($request->filled('area_usuario')) {
            $query->where('area_usuario', 'like', '%' . $request->input('area_usuario') . '%');
        }
        if ($request->filled('estado_usuario')) {
            $query->where('estado_usuario', 'like', '%' . $request->input('estado_usuario') . '%');
        }

        $query->where('pausa_usuario', '=', 1);

        $query->where('id_usuario', '!=', session('id'));

        $candidatos = $query->paginate(session("paginate"));

        return view('candidatos.candidatosFiltradas', compact('candidatos'));
    }

    public function index()
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return redirect()->route("bem_vindo");
    }
}
