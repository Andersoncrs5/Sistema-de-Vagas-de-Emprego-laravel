<?php

namespace App\Http\Controllers;

use App\Http\Requests\editarPerfilSubmitRequest;
use App\Http\Requests\mudarSenhaRequest;
use App\Http\Requests\tratarDescricaoRequest;
use App\Http\Requests\paginacaoDinamicaSubmitRequest;
use App\Http\Requests\tratarCandidaturaRequest;
use App\Models\candidatosModel;
use Illuminate\Http\Request;
use App\Models\usuariosModel;
use App\Models\vagasModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class perfilController extends Controller
{

    public function index()
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $usuario = usuariosModel::find(session('id'));
        return view('perfil.perfilUsuario',compact('usuario'));
    }
    public function editarPerfil()
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $usuario = usuariosModel::find(session('id'));
        return view('perfil.editarPerfil',$usuario);
    }

    public function editarPerfilSubmit(editarPerfilSubmitRequest $request)
    {
        if(session('ativo') == 0){
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $usuario = usuariosModel::find(session('id'));

        $usuario->nome_usuario = $request->nome_usuario;
        $usuario->sexo_usuario = $request->sexo_usuario;
        $usuario->estado_usuario = $request->estado_usuario;
        $usuario->area_usuario = $request->area_usuario;
        $usuario->ferramenta_favorita_usuario = $request->ferramenta_favorita_usuario;
        $usuario->nivel_usuario = $request->nivel_usuario;
        $usuario->save();
        return redirect()->route('perfilUsuario')->with('mensagem', 'Perfil editado com sucesso!');
    }

    public function excluirConta()
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        
        try 
        {
            DB::beginTransaction();

            $usuario = usuariosModel::find(session('id'));

            if (!$usuario) 
            {
                return redirect()->route('perfilUsuario')->with('mensagemErro', 'Usuario nao encontrado');
            }

            $usuario->vagas()->delete();
            $usuario->comentarios()->delete();
            $usuario->candidatos()->delete();
            $usuario->delete();

            DB::commit();

            session()->flush();
            return redirect()->route('bem_vindo')->with('mensagem', 'Conta excluída com sucesso!');

        } catch (\Exception $e) 
        {
            DB::rollBack();
            return redirect()->route('perfilUsuario')->with('mensagemErro', 'Erro ao excluir a conta');
        }
    }

    public function mudarSenha()
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('perfil.mudarSenha');
    }

    public function tratarMudarSenha(mudarSenhaRequest $request)
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $usuario = usuariosModel::find(session('id'));

        $nova_senha = trim($request->nova_senha);
        $confirmar_nova_senha = trim($request->confirmar_nova_senha);

        if($nova_senha != $confirmar_nova_senha)
        {
            // SEI SOBRE A EXISTENCIA DO CONFIRMED PARA TRATAMENTO DE VALIDACAO,
            //POREM POR ALGUM MOTIVO QUE DESCONHEÇO, ESTAVA ACONTECENDO UM ERRO 
            //MESMO TENDO TOTAL CERTEZA DE QUE ESTAVA TUDO CERTO.
            return redirect()->route('mudarSenha')->with('mensagemErro', 'As senhas não conferem!');
        }
        if ($nova_senha) 
        {
            $usuario->senha_usuario = Hash::make($nova_senha);
            $usuario->save();

            return redirect()->route('perfilUsuario')->with('mensagem', 'Senha alterada com sucesso!');
        } else {
            return redirect()->route('mudarSenha')->with('mensagemErro', 'Senha atual inválida!');
        }
    }
    public function tratarCandidatura(tratarCandidaturaRequest $request,int $id)
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $candidatura = new candidatosModel();
        $candidatura->user_id = session('id');
        $candidatura->vagas_id = $id;
        $candidatura->email_candidatos = $request->email_vaga;
        $candidatura->telefone_candidatos = $request->telefone_candidatos;
        $candidatura->save();

        return redirect()->route('mostrarVaga', ['id' => $request->id])->with('mensagem', 'Candidatura realizada com sucesso!');
    }
    public function candidatarForm(int $id)
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $vaga = vagasModel::find($id);

        return view('candidatura.candidaturaForm',compact('vaga',"id"));

    }
    public function MostrarCandidaturas()
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };

        $minhasCandidatura = candidatosModel::where("user_id",session("id"))->paginate(session("paginate"));

        return view('candidatura\MostrarCandidatura',compact("minhasCandidatura"));
    }
    /*public function cadastrarCurriculo()
        {
            if(session('ativo') == 0){
                return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
            };
            return view('perfil\cadastrarCurriculo');
        }
        public function tratarCurriculo(Request $request)
        {
            if (session('ativo') == 0) {
                return redirect()->route('bem_vindo')->with('mensagem', 'Faça login para continuar');
            }

            // dd($request->file('curriculo_usuarios'));

            $path = storage_path('app/curriculos');
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            $request->validate([
                'curriculo_usuarios' => 'required|file|mimes:pdf,doc,docx,txt'
            ]);

            $usuario = usuariosModel::where("id_usuario", session("id"))->first();

            if (!$usuario) {
                return redirect()->route('bem_vindo')->with('mensagem', 'Usuário não encontrado.');
            }

            if ($request->hasFile('curriculo_usuarios') && $request->file('curriculo_usuarios')->isValid()) {
                $filename = time() . '_' . $request->file('curriculo_usuarios')->getClientOriginalName();
                $path = $request->file('curriculo_usuarios')->storeAs('curriculos', $filename);
                $usuario->curriculo_usuarios = $path;
            } else {
                return redirect()->back()->withErrors(['curriculo_usuarios' => 'Erro no upload do arquivo.']);
            }

            $usuario->save();

            return redirect()->route('perfilUsuario')->with('mensagem', 'Currículo cadastrado com sucesso!');
        }
        public function downloadCurriculo()
        {
            if(session('ativo') == 0){
                return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
            };
            $usuario = usuariosModel::find(session('id'));
            if (!$usuario) {
                return redirect()->route('bem_vindo')->with('mensagem', 'Usuário não encontrado.');
            }
            $path = storage_path('app/curriculos'. $usuario->curriculo_usuarios);
            return response()->download($path);
        }*/
    public function pausar_usuario()
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $usuario = usuariosModel::find(session('id'));
        if (!$usuario) 
        {
            return redirect()->route('bem_vindo')->with('mensagem', 'Usuário não encontrado.');
        }
        $usuario->pausa_usuario = 0;
        $usuario->save();
        return redirect()->route('perfilUsuario')->with('mensagem', 'Usuário pausado com sucesso!');

    }
    public function despausar_usuario()
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $usuario = usuariosModel::find(session('id'));
        if (!$usuario) 
        {
            return redirect()->route('bem_vindo')->with('mensagem', 'Usuário não encontrado.');
        }
        $usuario->pausa_usuario = 1;
        $usuario->save();
        return redirect()->route('perfilUsuario')->with('mensagem', 'Usuário ativado com sucesso!');
    }
    public function verCandidatos(int $id)
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };

        $candidatos = candidatosModel::where("vagas_id",$id);
        $candidatos = $candidatos->paginate(session("paginate"));

        return view('candidatura.verCandidatos', compact('candidatos'));
    }
    public function adicionarDescricao()
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $usuario = usuariosModel::find(session('id'));
        if (!$usuario)
        {
            return redirect()->route('bem_vindo')->with('mensagem', 'Usuário não encontrado.');
        }
        return view('perfil.adicionarDescricao', compact('usuario'));

    }
    public function tratarDescricao(tratarDescricaoRequest $request) 
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $usuario = usuariosModel::find(session('id'));
        if (!$usuario) 
        {
            return redirect()->route('bem_vindo')->with('mensagem', 'Usuário não encontrado.');
        }
        $usuario->descricao_usuario = $request->descricao_usuarios;
        $usuario->save();
        return redirect()->route('perfilUsuario')->with('mensagem', 'Descrição adicionada com sucesso!');
    }
    public function atualizarDescricao()
    {
        if(session('ativo') == 0)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $usuario = usuariosModel::find(session('id'));
        if (!$usuario) 
        {
            return redirect()->route('bem_vindo')->with('mensagem', 'Usuário não encontrado.');
        }
        return view('perfil.atualizarDescricao', compact('usuario'));
    }
    public function verPerfilCandidato(int $id)
    {
        if(session('ativo') == 0){ return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar'); };

        $candidato = usuariosModel::find($id);
        if (!$candidato) 
        {
            return redirect()->route('bem_vindo')->with('mensagem', 'Candidato não encontrado.');
        }
        return view('candidatos.verPerfilCandidato', compact('candidato'));
    }
    public function paginacaoDinamica()
    {
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view("perfil.paginacaoDinamica");
    }
    public function paginacaoDinamicaSubmit(paginacaoDinamicaSubmitRequest $request) 
    {
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        session()->put("paginate",$request->numero_itens);
        session()->save();
        return redirect()->route('bem_vindo')->with("mensagem", "Valor alterado com sucesso!!");
    }
}
