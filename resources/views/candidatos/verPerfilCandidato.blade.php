<!doctype html>
<html lang="en">
    <head>
        <title>Perfil do Candidato</title>
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
                color: black;
                background-color: black;
            }
            #dados {
                background-color: gray;
                border-radius: 10px;
                margin-top:2%;
            }
        </style>
    </head>

    <body  >
        <header>
            <div style="background-color: gray;" class="row border border-2 border-light rounded-3 p-3 text-center ">
                <div class="col-4">
                    <h1>Perfil do Candidato</h1>
                </div>
                <div class="col-4"></div>
                <div class="col-4 mt-2 ">
                    <a href="{{route("BuscarCandidatos")}}" class="btn btn-dark">Voltar</a>
                    <a href="{{route("chat")}}" class="btn btn-dark">Conversar com candidato</a>
                </div>
            </div>
        </header>
        <main>
            <div id="dados" class="container p-2">
                <div class="row my-5">
                    <div class="col-4 text-center">
                        <img src="https://via.placeholder.com/200" alt="User Image" class="img-fluid rounded-circle" />
                    </div>
                    <div class="col-4">
                        <h4>Nome: {{$candidato->nome_usuario}}</h4>
                        <h4>Email: {{$candidato->email_usuario}}</h4>
                        <h4>Sexo: {{$candidato->sexo_usuario}}</h4>
                        <h4>Estado: {{$candidato->estado_usuario}}</h4>
                        <h4>Linguagem: {{$candidato->ferramenta_favorita_usuario}}</h4>
                    </div>
                    <div class="col-4">
                        <h4>Idade: {{date('Y') - date('Y', strtotime($candidato->data_nasc_usuario))}}</h4>
                        <h4>Data de Nascimento: {{date('d/m/Y', strtotime($candidato->data_nasc_usuario))}}</h4>
                        <h4>Senioridade:

                            @switch($candidato->nivel_usuario)
                                    @case("J")
                                        Junior
                                        @break
                                    @case("E")
                                        Estagio
                                        @break
                                    @case("P")
                                        Pleno
                                    @break
                                    @case("S")
                                        Senior
                                    @break
                                    @default
                                        
                                @endswitch

                        </h4>
                        <h4>Area: {{$candidato->area_usuario}}</h4>
                    </div>
                    <div class="col-12 text-center mt-5 ">
                        <h2> Descrição do usuario </h2>
                        <p>{{$candidato->descricao_usuario}}</p>
                    </div>
                </div>
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
