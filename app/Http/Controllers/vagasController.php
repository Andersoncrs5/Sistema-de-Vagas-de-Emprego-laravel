<?php

namespace App\Http\Controllers;

use App\Http\Requests\editarVagaSubmitRequest;
use App\Http\Requests\criarVagaRequest;
use App\Models\vagasModel;
use App\Models\usuariosModel;
use Illuminate\Http\Request;
use App\Http\Requests\vagaRequest;
use App\Models\comentariosModel;
use Illuminate\Support\Facades\DB;

class vagasController extends Controller
{
    public function index()
    {   
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('vaga.criarVaga');
    }
    public function criarVaga(criarVagaRequest $request)
    {
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $dados = $request->all();
        $dados["fk_usuario_id"] = session('id');
        vagasModel::create($dados);
        return redirect()->route('bem_vindo')->with('criada', 'A vaga foi criada com sucesso');
    }
    public function show(int $id)
    {
        $comentarios = comentariosModel::where("vagas_id",$id)->paginate(session("paginate"));
        $vaga = vagasModel::find($id);
        return view('vaga.mostrarVaga',compact('vaga',"comentarios"));
    }
    public function editarVagaSubmit(editarVagaSubmitRequest $request)
    {
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        
        $vaga = vagasModel::find($request->id);
        
        if (!$vaga) 
        {
            // Se a vaga não for encontrada, redireciona com uma mensagem de erro
            return redirect()->back()->with('error');
        }

        $vaga->email_vaga = $request->input('email_vaga');
        $vaga->titulo_vagas = $request->input('titulo_vagas');
        $vaga->descrição = $request->input('descrição');
        $vaga->inicio_salario_vagas = $request->input('inicio_salario_vagas');
        $vaga->fim_salario_vagas = $request->input('fim_salario_vagas');
        $vaga->local_vagas = $request->input('local_vagas');
        $vaga->tipo_vaga = $request->input('tipo_vaga');
        $vaga->senioridade_vagas = $request->input('senioridade_vagas');
        $vaga->scala_vagas = $request->input('scala_vagas');
        $vaga->ferramenta_vaga = $request->input('ferramenta_vaga');
        $vaga->estado_vaga = $request->input('estado_vaga');        
        $vaga->save();

        $minhasVagas = vagasModel::where('fk_usuario_id', session('id'))->get();
        return view('vaga.minhaVagas', compact('minhasVagas'))->with('success', 'Vaga editada com sucesso!!!');
    }
    public function deletarVaga(int $id)
    {
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };

        try 
        {
            DB::transaction(function () use ($id) 
            {
                $vaga = vagasModel::find($id);
    
                if (!$vaga) 
                {
                    return redirect()->route('perfilUsuario')->with('mensagemErro', 'Vaga não encontrada');
                }
    
                $vaga->comentarios()->delete();
                $vaga->candidatos()->delete();
                            
                $vaga->delete();
            });
            return redirect()->route('bem_vindo')->with('mensagem', 'Vaga excluída com sucesso!');
        } 
        catch (\Exception $e) 
        {
            return redirect()->route('perfilUsuario')->with('mensagemErro', 'Erro ao excluir a vaga');
        }
    }
    public function perfilEmpregador(int $id)
    {
        $usuario = usuariosModel::find($id);

        return view('vaga.perfilEmpregador',compact('usuario'));
    }
    public function FiltrarVaga()
    {
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        return view('vaga.FiltrarVaga');
    }
    public function editarVaga(int $id)
    {

        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        
        $vagas = vagasModel::where('fk_usuario_id',session('id'))->first();

        if(!$vagas)
        {
            return redirect()->route('bem_vindo')->with('mensagem','Vaga não encontrada');
        }

        $vaga = [
            'id' => $vagas->id_vagas,
            'email' => $vagas->email_vaga,
            'titulo' => $vagas->titulo_vagas,
            'descrição' => $vagas->descrição,
            'inicio_salario_vagas' => $vagas->inicio_salario_vagas,
            'fim_salario_vagas' => $vagas->fim_salario_vagas,
            'local_vagas' => $vagas->local_vagas,
            'tipo_vaga' => $vagas->tipo_vaga,
            'senioridade_vagas' => $vagas->senioridade_vagas,
            'scala_vagas' => $vagas->scala_vagas,
            'ferramenta_vaga' => $vagas->ferramenta_vaga,
            'estado_vaga' => $vagas->estado_vaga
        ];

        return view('vaga.editarVaga',compact('vaga'));
    }
    public function minhaVagas()
    {
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $minhasVagas = vagasModel::where('fk_usuario_id',session('id'))->paginate(session("paginate"));
        return view('vaga.minhaVagas',compact('minhasVagas'));
    }
    public function pausarVaga(int $id)
    {
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $Vaga = vagasModel::find($id);
        $Vaga->pausado = 1;
        $Vaga->save();

        return redirect()->route("minhaVagas")->with('pausada','A vaga foi pausada com sucesso');
    }
    public function ativarVaga(int $id)
    {
        if(session('ativo') == 0)
        {  
            return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
        };
        $Vaga = vagasModel::find($id);
        $Vaga->pausado = 0;
        $Vaga->save();

        return redirect()->route("minhaVagas")->with('ativa','A vaga foi ativada com sucesso');
    }
    /*public function salvarImagem(Request $request)
        {
            if(session('ativo') == 0)
            {  
                return redirect()->route('bem_vindo')->with('mensagem','Faça login para continuar');
            };
            $imagem = $request->file('imagem_vaga');
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            $imagem->move(public_path('img/vagas'), $nomeImagem);

            $novaVaga->imagem_vaga = $nomeImagem;
            $novaVaga->save();
            return redirect()->route('mostrar_vaga', ['id' => $novaVaga->id])->with('criada','A vaga foi criada com sucesso');
        }*/
}


