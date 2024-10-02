<!doctype html>
<html lang="en">
    <head>
        <title>Meu Comentarios</title>
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
                color:white;

            }
        </style>
    </head>

    <body>
        <header>
            <div class="">

            </div>
            <div class="row border border-3 border-light p-3 text-center " >
                <div class="col-3">
                    <h1>Meu Comentarios</h1>
                </div>
                <div class="col-6"></div>
                <div style="" class="col-3 text-center mt-2 ">
                    <a class="btn btn-light" href="{{route("bem_vindo")}}">Voltar</a>
                </div>
            </div>
        </header>
        <main>

            <div  class=" ">
                @forelse ($comentarios as $comentario)
                    <div class="container p-3 border-3 border border-light mt-3">
                        <div class="">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://via.placeholder.com/100" alt="User Image" class="img-fluid rounded-circle" />
                                </div>
                                <div class="col-md-10">
                                    <h5 class="text-primary">
                                        {{ $comentario->nome_comentario }} - {{ $comentario->email_comentario }}
                                        <small class="text-muted">- {{ $comentario->created_at->format('d/m/Y H:i') }}</small>
                                        <small class="text-muted"> @if ($comentario->editado_comentario ==  1) - Editado @endif</small>
                                    </h5>
                                    <p>{{ $comentario->comentario_comentario }}</p>
                                </div>
                            </div>
                            <hr />
                            <div>
                                <a href="{{ route('editarComentario', ['id' => $comentario->id_comentario]) }}" class="btn btn-sm btn-primary" >Editar</a>
                                <a href="{{ route('deletarComentario', ['id' => $comentario->id_comentario]) }}" class="btn btn-sm btn-primary" >Deletar</a>
                                <a href="{{ route('mostrarVaga', ['id' => $comentario->vagas_id]) }}" class="btn btn-sm btn-primary" >Ver vaga</a>


                            </div>
                        </div>
                        </div>
                    </div>
                @empty
                    <div>
                        <div style="margin-top: 27vh;" class="container text-center">
                            <h1> Nenhum comentário</h1>
                        </div>
                    </div>
                @endforelse
                <div class="container mt-3">
                    {{ $comentarios->links() }}
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
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
