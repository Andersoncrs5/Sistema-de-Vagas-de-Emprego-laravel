<!doctype html>
<html lang="en">
    <head>
        <title>Minhas Candidaturas</title>
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

    <body style="background-color: black; color: white; " >
        <header>
            <div class="container-fluid text-center p-3 border border-3 border-light">
                <div class="row">
                    <div class="col-6 text-center">
                        <h1>Minhas Candidaturas</h1>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-4 text-center mt-2">
                        <a href="{{route("bem_vindo")}}" class="btn btn-light">Voltar</a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="mt-5" >
                @forelse ($minhasCandidatura as $candidatura)
                    <div class="container text-center p-3 mt-3 rounded-3 rounded border border-3">
                        <div class="row">
                            <div class="col-4">
                                <p>Email: {{ $candidatura->email_candidatos }}</p>
                                <p>Telefone usado: {{ $candidatura->telefone_candidatos }}</p>
                            </div>
                            <div class="col-4">
                                <p>Data de criação: {{ $candidatura->created_at }}</p>
                            </div>
                            <div class="col-4 mt-3">
                                <a class="btn btn-dark" href="{{route("mostrarVaga",["id"=>$candidatura->vagas_id])}}">Ver a vaga</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center " style="margin:15% auto;" >
                        <h3>Nenhuma candidatura encontrada.</h3>
                        <a href="{{route("bem_vindo")}}" class="btn btn-light">Voltar</a>
                    </div>
                @endforelse
                <div class="container mt-3">
                    {{$minhasCandidatura->links()}}
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
{{-- session("paginate") --}}