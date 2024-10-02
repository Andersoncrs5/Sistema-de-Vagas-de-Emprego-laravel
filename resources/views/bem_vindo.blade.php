<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vagas livres</title>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>

    <style>
        body {
            background-color:rgb(0, 0, 0);
        }
        * {
            margin: 0px;
            padding: 0px;
        }
        #s {
            background-color:gray;
            border-radius:8px;
            border: 1px solid white;
            color:black;
            width:50%;
            text-align:center;
            margin: 0px auto;
            margin-top:9.5%;
            padding:40px;
        }
        .menu {
            width :99.8%;
            height: 40px;
            background-color: rgb(95, 95, 95);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border:1px solid white;
            padding: 1.5%;
        }
        .vagas {

        }
        .menu_vagas{
            font-family: Verdana, Geneva, Tahoma, sans-serif !important ;
        }
        #titulo_vl{
            font-family: Verdana, Geneva, Tahoma, sans-serif !important ;
            line-height: 40px;
            margin-left: 10px;

        }
        #user {
            text-decoration: none;
            color:rgb(0, 0, 0);
            font-size:18px;
            margin-right: 10px;
            line-height: 40px;
        }
        #user:hover {
            color:rgb(255, 255, 255);
        }
        #a {
            text-decoration-line: none;
            background-color: black;
            color: white;
            border:2px solid gray;
            padding: 0px 25px;
            border-radius: 8px;
            margin-bottom:8px;
        }
        #a:hover {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
        }
        #logout {
            text-decoration-line: none;
            background-color: black;
            color: white;
            border:2px solid gray;
            padding: 0px 18px;
            border-radius: 8px;
            margin-bottom:12px;
        }
        #logout:hover {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
        }
        #criarvaga {
            text-decoration-line: none;
            position: relative;
            left: 70%;
        }
        #salario {
            margin-right: 5px;
        }
        .vaga {
            width: 90%;
            border-radius: 12px;
            background-color: rgb(95, 95, 95);
            color: rgb(0, 0, 0);
            margin: 25px;
            margin-left: 48px;
            padding-left: 16px;
            padding-right: 16px;
            padding-top: 9px;
            border:1px solid white;


        }
        .titulo {
            display: flex;
            
        }
        .email {
            margin-top: 3px;
            margin-left: auto;
        }
        .btn_s {
            display: flex;
        }
        #btn {
            margin-left: auto;
            text-decoration-line: none;
            background-color: rgb(0, 0, 0);
            border-radius: 10px;
            color: white;
            padding: 8px;
            position: relative;
            bottom: 10px;
        }
        #btn:hover {
            color: rgb(0, 0, 0);
            background-color: rgb(255, 239, 239);
        }
        #email_a:hover {
            color: rgb(0, 0, 0);
        }
        #email_a {
            text-decoration-line: none;
            color:white;

        }
        .btn_menu {
            display: flex;
            justify-content: flex-end;
            margin-right: 40px;
        }
        #btn_opcao {

            background-color: rgb(94, 94, 94);
            color: white;
            text-decoration: none;
            margin-right: 10px;
            padding: 10px;
            border-radius:8px;
            border: 1px solid white;

        }
        .perfil {
            display: flex;
            justify-content: flex-end;
            line-height: 40px;
            margin-right: 20px;
        }
        #dado {

        }
        #title {
            display: flex;
            justify-content: flex-start;
            line-height: 40px;
        }
        #sidebar{
            width: 15%;
            height: 100%;
            background-color: rgb(0, 0, 0);
            border-radius: 8px;
            border:2px solid white;
            color: white;
            padding: 10px;
            display: none;
            align-items: center;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 84%;
            z-index: 999;
            transition: left 0.5s ease-in-out;
        }
        #btn_fechar:hover {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
        }
        #btn_fechar {
            background-color: black;
            color: white;
            border:2px solid gray;
            padding: 8px 25px;
            border-radius: 8px;
        }
        .size { }
    </style>

</head>
<body>
    <div class="menu" >
        <div id="title" >
            <h3 id='titulo_vl' >vagas livre</h3>
        </div>
        <div id="dado" >
            @if (session('ativo') == 0)
                <a id="user" href="{{route('loginForm')}}">Entrar</a>
            @else
                <div class="perfil">
                    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">{{ session('nome') }}</button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">{{ session('nome') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <a class="d-block " href="{{route('perfilUsuario')}}" id="a" >Perfil do usuario</a>
                            <a class="d-block " href="{{route('minhaVagas')}}" id="a" >Minha Vagas</a>
                            <a class="d-block " href="{{route('MostrarCandidaturas')}}" id="a" >Minhas Candidaturas</a>
                            <a class="d-block " href="{{route('meusComentarios')}}" id="a" >Meu Comentarios</a>
                            <a class="d-block " href="{{route("paginacaoDinamica")}}" id="a"> paginacao dinamica </a>
                            <a class="d-block " href="{{route('logout')}}" id="logout" >LOGOUT</a>
                        </div>
                    </div>
                    
                </div>
            @endif
        </div>
    </div>
    <div class="vagas mt-3">
        <div>
            <div class="btn_menu">
                @if(session('ativo') == 1)
                    <a id="btn_opcao" href="{{route('vagasCreate')}}" >Criar vaga</a>
                    <a id="btn_opcao" href="{{route('BuscarCandidatos')}}" >Buscar por candidatos</a>

                    @if(!$vagas->isEmpty())
                        <a id="btn_opcao" href="{{route('FiltrarVaga')}}">Filtar</a>
                    @endif
                @endif
            </div>
            @forelse ($vagas as $vaga)
                @if ($vaga->pausado == 0)
                    <div style="background-color: gray;" class="container mt-5 p-2 rounded-3 border border-2 border-light">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3 ">
                                        <h4>{{$vaga->titulo_vagas}}</h4>
                                    </div>
                                    <div class="col-6"></div>
                                    <div class="col-3 text-center">
                                        <h6 class="email" ><a id="email_a" href="{{route('perfilEmpregador',['id'=>$vaga->fk_usuario_id])}}">{{$vaga->email_vaga}}</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10">
                                <div style="display: flex;" >
                                    <p id="salario">salario de R$:{{$vaga->inicio_salario_vagas}} </p>
                                    <p> até R$:{{$vaga->fim_salario_vagas}}</p>
                                    <div style="margin-left: 2%;" >
                                        @if($vaga->senioridade_vagas == 'J')
                                            <p>Senioridade : Junior </p>
                                        @elseif($vaga->senioridade_vagas == 'P')
                                            <p>Senioridade : Pleno</p>
                                        @else
                                            <p>Senioridade : Senior </p>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-2" style="margin-top: 0.7% ;">
                                <a id="btn" href="{{ route('mostrarVaga', ['id' => $vaga->id_vagas]) }}">Mostrar mais</a>
                            </div>
                        </div>
                    </div>
                @endif     
            @empty
                <div id='s' >
                    <h1>Nenhuma vaga registrada</h1>
                </div>
            @endforelse
            <div class="container mt-3">
                {{$vagas->links()}}
            </div>

        </div>
    </div>
    <div>
    </div>
    @if(session('cadastro'))
    <script>
        alert("{{ session('cadastro') }}");
    </script>
    @endif

    @if(session('criada'))
    <script>
        alert("{{ session('criada') }}");
    </script>
    @endif

    @if(session('login'))
        <script>
            alert("{{ session('login') }}");
        </script>
    @endif
    @if(session('login_sucesso'))
        <script>
            alert("{{ session('login_sucesso') }}");
        </script>
    @endif
    @if(session('mensagem'))
        <script>
            alert("{{ session('mensagem') }}");
        </script>
    @endif
    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
</body>
</html>
