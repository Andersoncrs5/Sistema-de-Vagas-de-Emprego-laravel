<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vagas Filtradas</title>
    <style>
        body {
            background-color:rgb(0, 0, 0);
        }
        * {
            margin: 0px;
            padding: 0px;
        }
        .menu {
            width :100%;
            height: 40px;
            background-color: rgb(95, 95, 95);
        }

        #a {
            text-decoration-line: none;

        }
        #logout {
            text-decoration-line: none;

            position: relative;
            left: 94%;
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
        }
        #btn_opcao {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 15px;
            padding-right: 15px;
            background-color: rgb(0, 0, 0);
            border: 2px solid white;
            color: white;
            margin: 10px;
            margin-bottom: 0px;
            border-radius: 10px;
            text-decoration-line: none;
            margin:0px auto;
            margin-right: 20px;
            position: relative;
            top: 11%;
        }
        #btn_opcao:hover {
            background-color: rgb(255, 239, 239);
            border: 2px solid black;
            color: black;
        }
        #vazio_titulo {
            color:rgb(0, 0, 0);
            margin: 20px;
            
        }
        .vazio{
            color:white;
            background-color: gray;
            border-radius: 12px;
            padding: 20px;
            width: 600px;
            height: 150px;
            text-align: center;
            margin: 0px auto;
            margin-top:34vh;
            border: 2px solid white;
        }
        
        
    </style>
</head>
<body>
    <div class="main">
        @if($vagas->isEmpty())
            <div>
                <div class="vazio">
                    <h1 id="vazio_titulo">Nenhuma vaga disponivel</h1>
                    <a id="btn_opcao" href="{{route('vagasCreate')}}">Criar vaga</a>
                    <a id="btn_opcao" href="{{route('bem_vindo')}}">Voltar para o inicio</a>
                </div>
                
            </div>
        @else
            <div class="vagas">
                @foreach ($vagas as $vaga)

                @if ($vaga->pausado == 0)
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
                            @if($vaga->senioridade_vagas == 'J')
                                <p>Senioridade : Junior </p>
                            @elseif($vaga->senioridade_vagas == 'P')
                                <p>Senioridade : Pleno</p>
                            @else
                                <p>Senioridade : Senior </p>
                            @endif
                            <a id="btn" href="{{ route('mostrarVaga', ['id' => $vaga->id_vagas]) }}">Mostrar mais</a>
                        </div>
                    </div>
                @endif
            @endforeach
            </div>
        @endif


    </div>
</body>
</html>
