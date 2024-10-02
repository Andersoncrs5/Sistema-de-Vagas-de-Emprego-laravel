<?php

namespace App\Http\Controllers;

use App\Http\Requests\cadastroRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\usuariosModel;
use App\Models\vagasModel;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function loginForm()
    {
        if(session('ativo') == 0){
            return view('login.loginForm');
        }else {
            return redirect()->route('bem_vindo')->with('mensagem','Voce já esta logado');
        }
        
    }
    public function cadastroForm()
    {
        if(session('ativo') == 0){
            return view('login.cadastroForm');
        }else{
            return redirect()->route('bem_vindo')->with('mensagem','Voce já esta logado');
        }
    }
    public function tratarCadastro(cadastroRequest $request){

        # FAZ A VERIFICAÇÃO SE O USUARIO ESTÁ LOGADO

        if(session('ativo') == 1) { return view('bem_vindo')->with('mensagem','Você já esta logado'); }

        $usuario = new usuariosModel();

        # RESPONSAVEL POR VERIFICAR A INTEGRIDADE DOS DADOS
        $request->validated();

        $usuario->nome_usuario = $request->nome_usuario;
        $usuario->email_usuario = $request->email_usuario;
        $usuario->senha_usuario = Hash::make($request->senha_usuario);
        $usuario->cpf_usuario = $request->cpf_usuario;
        $usuario->data_nasc_usuario = $request->data_nasc_usuario;
        $usuario->sexo_usuario = $request->sexo_usuario;
        $usuario->nivel_usuario = $request->nivel_usuario;
        $usuario->estado_usuario = $request->estado_usuario;
        $usuario->area_usuario = $request->area_usuario;
        $usuario->ferramenta_favorita_usuario = $request->ferramenta_favorita_usuario;
        $usuario->descricao_usuario = 'null';
        $usuario->save();

        $id = usuariosModel::where('email_usuario', $request->email_usuario)->first(['id_usuario']);
        
        session()->put('id',$id->id_usuario);
        session()->put('nome',$request->nome_usuario);
        session()->put('ativo',1);
        session()->put('email', $request->email_usuario);

        return redirect()->route('bem_vindo')->with('cadastro','Cadastro realizado com sucesso');
    }

    public function login(LoginRequest $request)
    {

        if(session('ativo') == 1) {
            return view('bem_vindo')->with('mensagem','Você já esta logado');
        }

        $request->validated();

        # FAZ A REMOÇÃO DOS ESPAÇOS
        $email = trim($request->email_usuario);
        $senha = trim($request->senha_usuario);

        # BUSCA O USUÁRIO PELO EMAIL
        $usuario = usuariosModel::where('email_usuario', $email)->first();

        if ($usuario) {
            if (Hash::check($senha, $usuario->senha_usuario)) {
                session()->put('ativo', 1);
                session()->put('id', $usuario->id_usuario);
                session()->put('nome', $usuario->nome_usuario);
                session()->put('email', $email);

                return redirect()->route('bem_vindo')->with('login_sucesso', 'Bem vindo');
            } else {
                return redirect()->route('loginForm')->with('msg_erro', 'Senha incorreta');
            }
        } else {
            return redirect()->route('loginForm')->with('msg_erro', 'Usuário não encontrado');
        }
    }
    public function bem_vindo()
    {
        session()->put("paginate",20);
        $vagas = vagasModel::paginate(session("paginate"));
        return view('bem_vindo',compact("vagas"))->with('login','Login feito com sucesso');
    }
    public function filtandoVaga(Request $request)
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };

        $query = vagasModel::query();

        if ($request->filled('tipo_vaga')) {
            $query->where('tipo_vaga', 'like', '%' . $request->input('tipo_vaga') . '%');
        }

        if ($request->filled('Senioridade_da_vaga')) {
            $query->where('senioridade_vagas', 'like', '%' . $request->input('Senioridade_da_vaga') . '%');
        }

        if ($request->filled('scala_vagas')) {
            $query->where('scala_vagas', 'like', '%' . $request->input('scala_vagas') . '%');
        }

        if ($request->filled('ferramenta_vaga')) {
            $query->where('ferramenta_vaga', 'like',$request->input('ferramenta_vaga'));
        }
        
        $vagas = $query->get();

        return view('vaga.vagasFiltradas', compact('vagas'));
    }
    
}
