<!doctype html>
<html lang="en">
    <head>
        <title>deletar Comentario</title>
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
                color: white;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="container-fluid text-center p-3 border border-2 border-light">
                <h1>Deletar comentario</h1>
            </div>
        </header>
        <main>
            <div style="margin-top: 13%;" class="text-center container">
                <form action="{{route('deletandoComentario',["id"=>$id])}}" method="post">
                    @csrf
                    <h1>deseja deletar o comentario?</h1>                                                                                                                                     
                    <button type="submit" class="btn btn-primary">Sim</button>
                    <a href="{{route('bem_vindo')}}" class="btn btn-secondary">Não</a>
                </form>
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
