
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>minhas Vagas</title>
    <style>
        body {
            background-color:rgb(0, 0, 0);
        }
        #titulo_sem_vaga {
            padding:50px;
            background-color:gray;
            border:2px solid white;
            border-radius:8px;
        }
        * {
            margin: 0px;
            padding: 0px;
        }
        #sem_vaga {
            display:flex;
            color:rgb(0, 0, 0);
            align-items:center;
            height:84vh;
            justify-content:center;

        }
        .menu {
            width :99.8%;
            height: 40px;
            background-color: rgb(95, 95, 95);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border:1px solid white;
        }
        .vagas {

        }
        .menu_vagas{
            font-family: Verdana, Geneva, Tahoma, sans-serif !important ;
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
        }
        #logout {
            text-decoration-line: none;
            line-height: 40px;
            color:white;
        }
        #logout:hover {
            color:rgb(0, 0, 0);
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
            justify-content:space-between;
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
        #btn_menu {
            display: flex;
            justify-content: flex-end;
            margin-right: 30px;
            widows: 100%;
            margin-top:15px;
        }
        #btn_menu>a {
            margin-right: 10px;
        }
        .perfil {
            display: flex;
            justify-content: flex-end;
            line-height: 40px;
            margin-right: 20px;
        }
        #voltar {
            text-decoration-line: none;
            color: white;
            margin-right: 10px;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid white;
            cursor: pointer;
            background-color: gray;


        }
        .btns{
            display:flex;
        }
        .btns a:nth-child(1),a:nth-child(2),a:nth-child(3),a:nth-child(4){
            margin-right:15px;
        }

    </style>
</head>
<body>
    <div>
        <div id="btn_menu" >
            <a id="voltar" href="{{route('bem_vindo')}}" > Voltar para o inicio </a>
            <a id="voltar" href="{{route('vagasCreate')}}" > Criar vaga </a>
            <a id="voltar" href="{{route('FiltrarVaga')}}">Filtar</a>
        </div>
        @if(!$minhasVagas->isEmpty())
        @foreach ($minhasVagas as $vaga)
                    <div class="vaga">
                        <div class="titulo" >
                            <h2>{{$vaga->titulo_vagas}}</h2>
                            <h4 class="email" ><a id="email_a" href="{{route('perfilEmpregador',['id'=>$vaga->fk_usuario_id])}}">{{$vaga->email_vaga}}</a></h4>
                        </div>

                        <div class="titulo" >
                            <p id="salario">salario de R$:{{$vaga->inicio_salario_vagas}} </p>
                            <p> até R$:{{$vaga->fim_salario_vagas}}</p>
                        </div>

                        <div class="btn_s">
                            <div>
                                @if($vaga->senioridade_vagas == 'J')
                                    <p>Senioridade : Junior </p>
                                @elseif($vaga->senioridade_vagas == 'P')
                                    <p>Senioridade : Pleno</p>
                                @else
                                    <p>Senioridade : Senior </p>
                                @endif
                            </div>

                            <div class="btns" >
                                <a id="btn" href="{{ route('verCandidatos', ['id' => $vaga->id_vagas]) }}">Ver candidatos</a>
                                <a id="btn" href="{{ route('mostrarVaga', ['id' => $vaga->id_vagas]) }}">Mostrar mais</a>
                                <a id="btn" href="{{ route('deletarVaga', ['id' => $vaga->id_vagas]) }}">Deletar Vaga</a>
                                <a id="btn" href="{{ route('editarVaga', ['id' => $vaga->id_vagas]) }}">Editar Vaga</a>
                                @if($vaga->pausado == 0 )
                                    <a id="btn" href="{{ route('pausarVaga', ['id' => $vaga->id_vagas]) }}">Pausar Vaga</a>
                                @else
                                    <a id="btn" href="{{ route('ativarVaga', ['id' => $vaga->id_vagas]) }}">Ativar Vaga</a>
                                @endif
                            </div>
                        </div>
                    </div>
            @endforeach
            @else
                    <div id="sem_vaga" >
                        <div id="titulo_sem_vaga" >
                            <h1>NENHUMA VAGA CRIADA</h1>
                        </div>
                    </div>
            @endif
            
            <div class="container mt-3">
                {{$minhasVagas->links()}}
            </div>
    </div>

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    @if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif

    @if(session('pausada'))
        <script>
            alert("{{ session('pausada') }}");
        </script>
    @endif

    @if(session('ativa'))
        <script>
            alert("{{ session('ativa') }}");
        </script>
    @endif
</body>
</html>
