<!doctype html>
<html lang="en">
    <head>
        <title>editar Comentario</title>
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
            #erro {
                margin-top: 15vh;
                z-index: 999;
                display: block;
                position: fixed;
                top: 20%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            #btn_esconder {
                cursor: pointer;
                margin-top: 8px;
                color: white;
                background-color: gray;
                border: 2px solid black ;
                padding: 10px 20px;
                border-radius: 10px;
            }
            #btn_esconder:hover {
                background-color: white;
                color: black;
            }
            #erro>ul {
                list-style-type: none;

                font-size: 22px;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="container-fluid text-center border border-light border-3 p-3">
                <h1>Editar Comentario</h1>
            </div>
            
        </header>
        <main>
            <div style="margin-top:8%;" class="container text-center">
                <form action="{{route("editandoComentario",["id"=>$id])}}" class="p-2" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Atualizar comentario:</label>
                        <textarea class="form-control" name="comentario_comentario" id="" rows="3"></textarea>
                    </div>
                    <button type="submit"class="btn btn-light">Salvar </button>
                    <button type="reset" class="btn btn-primary" >Limpar </button>
                    <a href="{{route("bem_vindo")}}" class="btn btn-dark">Voltar </a>                    
                </form>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        @if($errors->any())
            <div id="erro" class=" container alert alert-danger text-center p-3">
                <ul>
                    @foreach($errors->all() as $error)
                        <li >{{ $error }}</li>
                    @endforeach
                </ul>
                <button id="btn_esconder" onclick="esconder()">Voltar</button>
            </div>
        @endif
        <script>
            function esconder() {
                document.querySelector('#erro').style.display = 'none';
            }
        </script>
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
