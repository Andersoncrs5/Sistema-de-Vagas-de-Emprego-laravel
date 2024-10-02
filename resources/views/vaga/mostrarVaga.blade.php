@php
    $nome_vaga = strtoupper($vaga->titulo_vagas);

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes Vaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color:black;
        }
        .comentarios {
            margin-top: 3%;
            border: 2px solid rgb(255, 255, 255);
            padding: 15px;
            border-radius: 10px;
            background-color: transparent;
            margin-bottom: 15px;
            color: white;
        }
        .btns {
            display:flex;
        }
        .titulo {
            text-align: center;
            width: 100%;
            padding-top: 4px;
            padding-bottom: 4px;
            background-color: gray;
            color: rgb(0, 0, 0);
        }
        .detalhes {
            border: 2px solid rgb(255, 255, 255);
            padding: 15px;
            border-radius: 10px;
            background-color: gray;
        }
        .espaco {
            padding: 25px;
        }
        .salario {
            display: flex;
        }
        #si {
            margin-right: 4px;
        }
        #btn {
            padding: 10px;
            background-color: rgb(0, 0, 0);
            color: white;
            text-decoration-line: none;
            border-radius: 12px;
            margin-right: 15px;
        }
        #btn:hover {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <div class="titulo" >
        <h1>{{$nome_vaga}}</h1>
    </div>
    <div class="espaco">
        <div class="detalhes" >
            <p>por : {{$vaga->email_vaga}}</p>
            <hr>
            <h5>Descrição</h5>
            <p>{{$vaga->descrição}}</p>
            <hr>
            <h5>Salario</h5>
            <div class="salario" >
                <p id="si" >O Salario pode variar de R$:{{$vaga->inicio_salario_vagas}}</p>
                <p id="sl" >até R$:{{$vaga->fim_salario_vagas}}</p>
            </div>
            <hr>
            <h5>Cidade </h5>
            <p>{{$vaga->local_vagas}}</p>
            <hr>
            <h5>Estado </h5>
            <p>{{$vaga->estado_vaga}}</p>
            <hr>
            <h5>Tipo de contratação</h5>
            <p>{{$vaga->tipo_vaga}}</p>
            <hr>
            <h5>Senioridade : </h5>
            @if($vaga->senioridade_vagas == 'J')
                <p>Junior </p>
            @elseif($vaga->senioridade_vagas == 'P')
                <p>Pleno</p>
            @else
                <p>Senior </p>
            @endif
            <hr>
            <h5>Escala da vaga</h5>
            @if($vaga->scala_vagas == 'PRE')
                <p>Presencial </p>
            @elseif($vaga->scala_vagas == 'RE')
                <p>Remoto</p>
            @else
                <p>Hibrido </p>
            @endif
            <hr>
            <h5>Data da Criação da vaga</h5>
            <p>{{$vaga->created_at}}</p>
            <hr>
            <h5>Data da Ultima atualização</h5>
            <p>{{$vaga->updated_at}}</p>
            <hr>
            <div class="btns">
            @if ( $vaga->fk_usuario_id != session('id'))
                @if(session('ativo')==1 )
                    <a id="btn" href="{{route("candidatarForm",['id' => $vaga->id_vagas])}}">Candidatar-se</a>
                @else
                    <a id="btn" href="{{route("loginForm")}}">Faça login para se candidatar</a>
                @endif
            @endif

            <a id="btn" href="{{route("bem_vindo")}}">Voltar para o inicio</a>
            <button id="btn" onclick="window.history.back()" >Voltar</button>

            @if ($vaga->fk_usuario_id == session("id"))
                <a id="btn" href="{{route("verCandidatos",['id' => $vaga->id_vagas])}}">Ver Candidatos</a>
                <a id="btn" href="{{route("editarVaga",['id' => $vaga->id_vagas])}}">Editar Vaga</a>
            @endif

            </div>
        </div>
        <div class="comentarios" >
            <div class="row">
                <div class="col-3 text-center">
                    <h2>Comentarios</h2>
                </div>
                <div class="col-6"></div>
                <div class="col-3 text-center ">
                    @if (session("ativo") == 1)
                        <a href="{{route("Comentario", ["id" =>$vaga->id_vagas])}}" style="margin-top: 0.4%" class="btn btn-light" >Adicionar Comentario</a>

                    @else
                        <a href="{{route("loginForm")}}" style="margin-top: 0.4%" class="btn btn-light" >Faca login para comentar</a>
                    @endif
                </div>
            </div>

                @forelse ($comentarios as $comentario)
                    <div class="container p-3 border-3 border border-light mt-3">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="https://via.placeholder.com/100"alt="User Image"class="img-fluid rounded-circle"/>
                            </div>
                            <div class="col-md-10">
                                <div>
                                    <h5 class="text-primary">
                                        {{ $comentario->nome_comentario }}
                                        <small class="text-muted">
                                            - {{ $comentario->email_comentario }}
                                            - {{ $comentario->created_at->format('d/m/Y H:i') }}
                                        </small>
                                        <small class="text-muted">
                                            @if ($comentario->editado_comentario ==  1)
                                                - Editado
                                            @endif
                                        </small>

                                    </h5>
                                    <p>{{ $comentario->comentario_comentario }}</p>
                                </div>
                            </div>

                            <hr />
                        </div>
                    </div>
                @empty
                    <p class="text-center">Nenhum comentario encontrado.</p>
                @endforelse
                <div class="container mt-3">
                    {{$comentarios->links()}}
                </div>

        </div>
    </div>
    @if(session('mensagem'))
        <script>
            alert("{{ session('mensagem') }}");
        </script>
    @endif
</body>
</html>


