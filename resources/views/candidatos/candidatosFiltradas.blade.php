<!doctype html>
<html lang="en">
    <head>
        <title>candidatos Filtradas</title>
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
                color:rgb(0, 0, 0);
            }
            #menu {
                background-color: gray;
            }
            #zeroCandidato {
                background-color: gray;
                margin-top:13% ;
            }
            #dados {
                background-color: gray;
            }
        </style>
    </head>

    <body>
        <header>
            <div id="menu" class="row p-2">
                <div class="col-4 text-center">
                    <h1> Candidatos Filtradas </h1>
                </div>
                <div class="col-4"></div>
                <div class="col-4 mt-2 text-center ">
                    <a href="{{route("BuscarCandidatos")}}" class="btn btn-dark" >Voltar</a>
                </div>
            </div>
        </header>
        <main>
            @forelse ($candidatos as $candidato)
                @if ($candidato->pausa_usuario == 1)
                    <div id="dados" class="container p-2 mb-4 mt-5 border border-2 border-light rounded-3">
                        <div class="row">
                            <div class="col-4 text-center">
                                <h4>Nome: {{$candidato->nome_usuario}}</h4>
                                <h4>Email: {{$candidato->email_usuario}}  </h4>
                                <h4>Linguagem Favorita: {{$candidato->ferramenta_favorita_usuario}} </h4>
                            </div>
                            <div class="col-4 text-center">
                                <h4>Idade: {{date('Y') - date('Y', strtotime($candidato->data_nasc_usuario))}}</h4>
                                <h4>Nascimento: {{date('d/m/Y', strtotime($candidato->data_nasc_usuario))}}</h4>
                                <h4>Senioridade: {{$candidato->nivel_usuario}}  </h4>
                            </div>
                            <div class="col-4 text-center">
                                <a href="{{route("chat")}}" class="btn btn-dark " style="margin-top: 8%;" >Conversar com candidato</a>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <div  class="container text-center p-4 rounded-3 border border-3 border-light " id="zeroCandidato">
                    <h1>Nenhum candidato encontrado</h1>
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