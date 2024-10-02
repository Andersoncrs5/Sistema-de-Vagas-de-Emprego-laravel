<!doctype html>
<html lang="en">
    <head>
        <title>Adicionar Descricao</title>
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
            #erro {
                /* background-color: #ff0000; */
                /* color: #000000; */
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

    <body style="background-color: black; color:white; " >
        <header>
            <div class="container-fluid text-center border border-2 p-3 border-light">
                <h1>Adicionar Descrição</h1>
            </div>
        </header>
        <main>
            <div class="container" style="margin-top: 22vh;" >
                <form class="text-center" action="{{route("tratarDescricao")}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <h1>Ola {{$usuario->nome_usuario}}</h1>
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao_usuarios" name="descricao_usuarios" rows="3" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Adicionar</button>
                    <button type="reset" class="btn btn-dark" >limpar</button>
                    
                    <a href="{{route('bem_vindo')}}" class="btn btn-dark">Voltar</a>

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
