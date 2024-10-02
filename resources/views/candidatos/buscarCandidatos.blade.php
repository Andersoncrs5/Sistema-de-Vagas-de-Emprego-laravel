<!doctype html>
<html lang="en">
    <head>
        <title>buscar por Candidatos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            body {
                background-color: black;
                color: rgb(0, 0, 0);
            }
        </style>
    </head>

    <body>
        <header>
            <div style="background-color: gray;" class="row border border-3 border-light  text-center p-3 ">
                <div  class="col-6">
                    <h1>Busca por Candidatos</h1>
                </div>
                <div class="col-2"></div>
                <div class="col-4 mt-2">
                    <a href="{{route("filtrarCandidatos")}}" class="btn btn-dark" >Filtar candidatos</a>
                    <a href="{{route("bem_vindo")}}" class="btn btn-dark" >Buscar vaga</a>
                    <a href="{{route("perfilUsuario")}}" class="btn btn-dark" >Meu perfil</a>
                    
                </div>
            </div>
        </header>
        <main>


            @forelse ($candidatos as $candidato)
                <div style="background-color: gray;" class="container p-3 mt-2 rounded rounded-3 border border-3 border-light">
                    <div class="row">
                        <div class="col-3 text-center ">
                            <h5>Email: {{$candidato->email_usuario}}</h5>
                            <h5>Nome: {{ strtoupper($candidato->nome_usuario) }}</h5>
                        </div>
                        <div class="col-3 text-center" >
                            <h5>Linguagem: {{$candidato->ferramenta_favorita_usuario}}</h5>
                            <h5>Idade: {{ \Carbon\Carbon::parse($candidato->data_nasc_usuario)->age }}</h5> <!-- Usando Carbon para calcular a idade -->
                        </div>
                        <div class="col-3 text-center">
                            <h5>Área: {{$candidato->area_usuario}}</h5>
                            <h5>Nível:
                                @switch($candidato->nivel_usuario)
                                    @case("J")
                                        Júnior
                                        @break
                                    @case("E")
                                        Estágio
                                        @break
                                    @case("P")
                                        Pleno
                                        @break
                                    @case("S")
                                        Sênior
                                        @break
                                    @default
                                        Nível não especificado
                                @endswitch
                            </h5>
                        </div>
                        <div class="col-3">
                            <a class="btn btn-dark" style="margin-top: 4%;" href="{{ route('verPerfilCandidato', ['id' => $candidato->id_usuario]) }}">Ver candidato</a>
                        </div>
                    </div>
                </div>
            @empty
                <div style="margin-top: 26vh;" class="container text-center">
                    <h3>Nenhum candidato encontrado!</h3>
                </div>
            @endforelse

            <div class="container mt-3">
                {{$candidatos->links()}}
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
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
{{-- 
[0] => email_vaga
[1] => titulo_vagas
[2] => descrição
[3] => inicio_salario_vagas
[4] => fim_salario_vagas
[5] => local_vagas
[6] => tipo_vaga
[7] => senioridade_vagas
[8] => scala_vagas
[9] => ferramenta_vaga
[10] => estado_vaga
--}}