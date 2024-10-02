<!doctype html>
<html lang="en">
    <head>
        <title>Perfil do Empregador</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <style>
            body {
                background-color: black;
            }
            #dados {
                background-color: gray;
            }
        </style>
    </head>

    <body>
        <header style="background-color: gray;" class="container-fluid" >
            <div  class="row text-center p-2 border border-3 border-light">
                <div class="col-3">
                    <h3>PERFIL DO EMPREGADOR</h3>
                </div>
                <div class="col-6"></div>
                <div style="" class="col-3 mt-3">
                    <a class="btn btn-dark" href="{{route('bem_vindo')}}">Voltar</a>
                </div>
            </div>
        </header>
        <main>
            
            <div class="perfil">
                <div class="foto container text-center my-4">
                    <div id="testefoto">
                        {{-- <img src="./images/Account-User-PNG-Photo.png" width="250px" alt=""> --}}
                        <img src="https://via.placeholder.com/250" alt="User Image" id="foto_usuario" class="img-fluid rounded-circle"/>
                    </div>
                </div>
                
                <div id="dados" class="container text-center p-3 border border-3 border-light rounded-3">
                    <div class="row">
                        <div class="col-4">
                            <h3>Nome: {{$usuario->nome_usuario}}</h3>
                            <h3>Email: {{$usuario->email_usuario}} </h3>
                        </div>
                        <div class="col-5">
                            <h3>data de nascimento: {{ \Carbon\Carbon::parse($usuario->data_nasc_usuario)->format('d/m/Y') }}</h3>
                            <h3>Sexo: {{$usuario->sexo_usuario}}</h3>
                        </div>
                        <div class="col-3">
                            <h3>Estado: {{$usuario->estado_usuario}}</h3>
                            <h3>Area: {{$usuario->area_usuario}}</h3>
                        </div>
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
