<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: rgb(0, 0, 0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .formulario {
            width: 48%;
            background-color: rgb(124, 124, 133);
            border-radius:14px;
            box-shadow: 0 14px 28px rgba(255,255,255,0.25), 0 10px 10px rgba(255,255,255,0.22);
        }
        #email_usuario,#senha_usuario {
            width: 95.5%;
            margin-left: 15px;
            margin-left: 15px;
            background-color: black;
            color: white;
        }
        #btn-submit {
            margin: 12px 10px 12px 15px ;
            background-color: black;
            color: white;
            width: 95.3%;
        }
        #btn-submit {
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            border:2px solid black;

        }
        #btn-submit:hover {
            background-color: white;
            color: rgb(0, 0, 0);
            border:2px solid black;

        }
        label {
            margin: 12px 0px 5px 15px;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        a {
            text-decoration-line: none;
            color: white;
        }
        #btn-cadastro {
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            border: 2px solid white;
            border-radius: 8px;
            cursor: pointer;
            padding: 6px;
        }
        #btn-voltar{
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            border-radius: 8px;
            border: 2px solid white;
            cursor: pointer;
            padding: 8px;
            margin-left: 15px;
        }
        .cadastro {
            margin: 10px 0px 12px 15px;
            display: flex;
        }
        #alerta {
            position: relative;
            left: 30%;
            width: 500px;
            top: 90px;
            height: 50%;

        }
        #cadastro_titulo {
            font-weight: bold;
            font-size: 22px;
            margin-top: 8px;
            margin-right: 12px
        }
        #btn {
            border: 2px solid white;
        }
        #alerta {
            position: absolute;
            top: 25%;
            left: 25%;
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
            background-color: black;
            border: 2px solid white;
            padding: 8px 18px ;
            color: white;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 8px;
        }
        #btn_esc:hover {
            background-color: white;
            color: black;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="formulario" >
        <form action="{{route('logando')}}" method="post">
            @csrf
            <label for="email_usuario">Email</label>
            <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="name@example.com">
            <label for="senha_usuario">Senha</label>
            <input type="password" class="form-control" name="senha_usuario" id="senha_usuario">
            <input type="submit" class="btn" id="btn-submit" value="Logar" >
        </form>
        <div class="cadastro" >
            <h5 id="cadastro_titulo" >Não tem uma conta ?</h5>
            <button id="btn-cadastro" class="" type="button"><a href="{{route('cadastroForm')}}">cadastre-se</a></button>
            <a id="btn-voltar" href="{{route('bem_vindo')}}" > Voltar para o inicio </a>
        </div>
    </div>

    @if ($errors->any())
            <div class="alerta" id="alerta" role="alert">
                <div id='avisos'>
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                    <button id="btn_esc" onclick="esconder()" >Esconder</button>
                </div>
                
            </div>
    @endif

    @if(session('msg_erro'))
        <script>
            alert("{{ session('msg_erro') }}");
        </script>

    @endif
        <script>
            function esconder() {
                document.getElementById("alerta").style.display = "none";
            }
        </script>
</body>
</html>
