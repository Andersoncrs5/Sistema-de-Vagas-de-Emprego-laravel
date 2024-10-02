<?php

namespace App\Http\Controllers;

use App\Models\comentariosModel;
use Illuminate\Http\Request;
use App\Http\Requests\editandoComentarioRequest;
use App\Http\Requests\AdicionandoComentarioRequest;

class comentarioController extends Controller
{
    public function index()
    {
        //
    }   
    public function editarComentario(int $id)
    {
        if(session('ativo') == 0){  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view("Comentarios.editarComentario",compact("id"));
    }
    public function editandoComentario(editandoComentarioRequest $request,int $id)
    {
        if(session('ativo') == 0){  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };

        $request->validate(['comentario_comentario' => 'required|max:500']);

        $comentarioModel = comentariosModel::find($id);
        if (!$comentarioModel) { return redirect()->route('bem_vindo')->with('error', 'Comentário não encontrado!'); }

        $comentarioModel->comentario_comentario = $request->comentario_comentario;
        $comentarioModel->editado_comentario = 1;

        $comentarioModel->save();

        return redirect()->route('meusComentarios')->with('mensagem', 'Comentário editado com sucesso!');
    }
    public function AdicionarComentario(int $id)
    {
        if(session('ativo') == 0){  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view("Comentarios.AdicionarComentario",compact("id"));
    }
    public function AdicionandoComentario(AdicionandoComentarioRequest $request,int $id)
    {   
        if(session('ativo') == 0){  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };

        $comentarioModel = new comentariosModel();
        $comentarioModel->nome_comentario = session('nome');
        $comentarioModel->email_comentario = session('email');
        $comentarioModel->comentario_comentario = $request->comentario_comentario;
        $comentarioModel->vagas_id = $id;
        $comentarioModel->user_id = session('id');
        $comentarioModel->save();

        return redirect()->route('mostrarVaga', ['id' => $id])->with('message', 'Comentário adicionado com sucesso!');
    }
    public function meusComentarios()
    {
        if(session('ativo') == 0){  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $comentarios = comentariosModel::where('user_id',session('id'))->paginate(session("paginate"));
        return view("Comentarios.meusComentarios",compact("comentarios"));
    }
    public function deletarComentario(int $id)
    {
        if(session('ativo') == 0){  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view("Comentarios.deletarComentario",compact("id"));
    }
    public function deletandoComentario(int $id)
    {
        if(session('ativo') == 0){  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $comentarioModel = comentariosModel::find($id);
        if (!$comentarioModel) { return redirect()->route('meusComentarios')->with('message', 'Comentário não encontrado!'); }
        $comentarioModel->delete();
        return redirect()->route('meusComentarios')->with('mensagem', 'Comentário deletado com sucesso!');
    }
}
