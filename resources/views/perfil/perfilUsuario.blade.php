@php

@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>

        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif !important ;
            background-color:black;
            color:white;
        }
        #curriculo {
            background-color: red;
            color:black;
        }
        hr {

        }
        /* #foto {
            width:250px;
            height:250px;
            border:2px solid white;
            border-radius:50%;

        } */

        #foto_usuario{
            width:250px;
            height:250px;
            border:1px solid white;
            margin:20px;
            border-radius:50%;
        }
        #btn_editar {
            background-color:rgb(0, 0, 0);
            color:rgb(255, 255, 255);
            border:1px solid white;
        }
        #btn_editar:hover {
            background-color:rgb(255, 255, 255);
            color:rgb(0, 0, 0);
            border:1px solid black;
        }

        .dados {
            display:flex;

        }
        .info {
            width:80%;
            height:30%;
            background-color:gray;
            color:black;
            border-radius:15px 0px 0px 15px;
            margin-top:4.5%;
            padding-top:10px;
            padding-bottom:10px;
        }
        div>h4 {
            margin-left:15px;
        }
        #descricao {
            background-color:gray;
            color:black;
            width:95%;
            margin:25px;
            border-radius:8px;
            margin:0px auto;
            padding-top:10px;
            padding-bottom:10px;

        }
        #titulo_desc {
            text-align:center;
            width:95%;
            background-color:rgb(0, 0, 0);
            color:rgb(255, 255, 255);
            border-radius:8px;
            margin:0px auto;
        }
        #texto {
            background-color:white;
            text-align:center;
            margin:10px auto;
            padding-left:3%;
            padding-right:3%;
            padding-top:1%;
            padding-bottom:1%;
            width:95%;
            border-radius:8px;

        }
        .btns{

            width: 60%;
            margin: 10px auto;

        }
        #desc {
            color: white;
            background-color: black;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border: 2px solid gray;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.2s;
            border-radius: 12px;
        }
        #desc:hover {
            background-color:rgb(255, 255, 255);
            color:rgb(0, 0, 0);
            border: 2px solid black;
        }
    </style>

</head>
<body>
    {{-- @if ($usuario->curriculo_usuarios == "null" )
        <div id="curriculo" class="container-fluid p-2 text-center ">
            <div class="row">
                <div class="col-6">
                    <h1>Você não tem um curriculo cadastrado!</h1>
                </div>
                <div class="col-2"></div>
                <div class="col-4 mt-2 ">
                    <a name="" id="" class="btn btn-dark" href="{{route("cadastrarCurriculo")}}" role="button">Cadastrar curriculo</a>
                </div>
            </div>
        </div>
    @endif --}}

    <div  class="dados" >
        <div id="foto" >
            {{-- <img src="./images\usuario.png" alt="" id="foto_usuario" > --}}
            <img src="https://via.placeholder.com/250" alt="User Image" id="foto_usuario" class="img-fluid rounded-circle"/>
        </div>

        <div class="info" >
            <h4>Nome : {{$usuario->nome_usuario}}</h4>
            <h4>Email : {{$usuario->email_usuario}}</h4>
            <h4>Sexo : {{$usuario->sexo_usuario}}</h4>
            <h4>Estado : {{$usuario->estado_usuario}}</h4>
        </div>
    </div>
        <hr>
    <div id='descricao' >
        <h3 id="titulo_desc" >Descrição</h3>
        <div id='texto' >
            @if($usuario->descricao_usuario != 'null')
                <p>
                    {{$usuario->descricao_usuario}}
                </p>
            @else
                <a id="desc" href='{{route('adicionarDescricao')}}'>Adicionar uma descrição</a>
            @endif

        </div>
    </div>
        <hr>
    <div class="btns" >
        <a class="btn btn-primary" href="{{route('editarPerfil')}}" role="button" id='btn_editar' > Editar dados </a>
        <a class="btn btn-warning" href="{{route('mudarSenha')}}" role="button" id="btn_editar" > Mudar Senha </a>
        <a class="btn btn-danger" href="{{route('excluirConta')}}" role="button" id="btn_editar" > Excluir Conta </a>
        @if ($usuario->descricao_usuario != "null")
            <a class="btn" href="{{route('atualizarDescricao')}}" role="button" id="btn_editar" > Atualizar descrição </a>
        @endif
        @if ($usuario->pausa_usuario == 1 )
            <a class="btn" href="{{route('pausar_usuario')}}" role="button" id="btn_editar" > Aberto a propostas  </a>
        @else
            <a class="btn" href="{{route('despausar_usuario')}}" role="button" id="btn_editar" > Fechado a propostas </a>
        @endif

        <a class="btn" href="{{route('bem_vindo')}}" role="button" id="btn_editar" > Voltar para o inicio </a>
    </div>

    <div>
        @if (session('mensagem'))
            <script>
                alert('{{ session('mensagem') }}')
            </script>
        @endif

        @if (session('mensagemErro'))
            <script>
                alert('{{ session('mensagemErro') }}')
            </script>
        @endif
    </div>
</body>
</html>
