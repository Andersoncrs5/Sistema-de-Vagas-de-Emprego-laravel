<!doctype html>
<html lang="en">
    <head>
        <title>Ver Candidatos</title>
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
    </head>

    <body style="background-color: black; color:white; " >
        <header>
            <div class="container-fluid">
                <div class="row rounded-3 rounded border border-3 p-3">
                    <div class="col-3 text-center">
                        <h1>Ver Candidatos</h1>
                    </div>
                    <div class="col-6">

                    </div>
                    <div class="col-3 text-center">
                        <a style="" href="{{route("bem_vindo")}}" class="mt-2 btn btn-dark">Voltar</a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container text-center ">
                @forelse ($candidatos as $candidato)
                    <div class="container text-center p-3 mt-3 rounded-3 rounded border border-3">
                        <div class="row">
                            <div class="col-4">
                                <p>Telefone usado: {{ $candidato->telefone_candidatos }}</p>
                                <p>E-mail: {{ $candidato->email_candidatos }}</p>
                            </div>
                            <div class="col-4">
                                <p>Data da candidatura: {{ $candidato->created_at }}</p>
                            </div>
                            <div class="col-4 mt-3">
                                <a class="btn btn-dark" href="{{route("mostrarVaga",["id"=>$candidato->vagas_id])}}">Ver a vaga</a>
                                <a class="btn btn-dark" href="{{route("chat")}}">Conversar com candidato</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center " style="margin:15% auto;" >
                        <h3>Nenhuma candidatura encontrada.</h3>

                    </div>
                @endforelse
                {{ $candidatos->links() }}
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
