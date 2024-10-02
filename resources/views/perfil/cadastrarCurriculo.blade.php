<!doctype html>
<html lang="en">
    <head>
        <title>cadastrando Curriculo</title>
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
            #btn-voltar{
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            border-radius: 8px;
            border: 2px solid rgb(255, 255, 255);
            cursor: pointer;
            padding: 8px;
            margin-left: 15px;
            text-decoration: none;
            }
            #btn-voltar:hover{
                background-color: rgb(255, 255, 255);
                color: rgb(0, 0, 0);
                
            }
            #alerta {
                margin:0px auto;
                width: 700px;
                text-align: center;
                background-color: red;
                color: white;
                border-radius: 8px;
                padding: 15px;
                display: block;
                z-index: 999;
                border: 2px solid white;
            }
            #btn_esc {
                border-radius: 8px;
                background-color: #000000;
                padding: 6px 15px;
                color: #ffffff;
                cursor: pointer;
                margin-top: 1.2%;
                margin:0px auto;
                border: 2px solid white;
            }
            #btn_esc:hover {
                background-color: #ffffff;
                color: #000000;
                border: 2px solid black;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="container-fluid p-3 border border-3 border-light ">
                <div class="row">
                    <div class="col-6 text-center ">
                        <h1 style="color: white;" > CADASTRANDO CURRICULO </h1>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-4 text-center mt-3 ">
                        <a id="btn-voltar" href="{{route('bem_vindo')}}" > Voltar para o inicio </a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div style="margin-top: 25vh;" class="container p-3 text-center">
                <form action="{{ route('tratarCurriculo') }}" method="post" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Escolha seu curriculo</label>
                        <input type="file" class="form-control" name="curriculo_usuarios" id="" placeholder="" aria-describedby="fileHelpId" />
                        <div id="fileHelpId" class="form-text"></div>
                    </div>
                    <div>
                        <button id="btn-voltar" type="submit" class="">Salvar</button>
                        <button id="btn-voltar" type="reset" class="">Limpar</button>
                    </div>
                </form>
                
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        @if ($errors->any())
        <script>
            alert("ERRO!") ;
            </script>
                <div id="alerta" role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                    <button onclick="esconder()" id="btn_esc" > esconder </button>
                </div>
        @endif
        <script>
            function esconder() {
                document.getElementById('alerta').style.display = 'none';
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
