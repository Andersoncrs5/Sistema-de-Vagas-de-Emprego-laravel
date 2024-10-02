<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mudar Senha</title>
    <style>
        body {
            background-color: #000000;
        }
        .formulario {
            /* centralizando a div */
            margin: 0 auto;
            width: 500px;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            border: 2px solid #ccc;
            margin-top: 25vh;
        }
        #btn_submit {
            margin-top: 10px;
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 8px;
        }
        #btn_submit:hover {
            background-color: white;
            color: black;
        }
        .form {
            display:block;
            background-color: gray;
            color: #000;
            padding: 20px;
            border-radius: 8px;
            border: 2px solid #ccc;
            

        }
        #nova_senha {
            width:75%;
            border:2px solid black ;
            height: 22px;
            border-radius:8px;
        }
        #confirmar_senha {
            width:75%;
            border:2px solid black ;
            height: 22px;
            border-radius:8px;
        }
        .erro {
            background-color: #ff0000;
            color: #000000;
            width: 600px;
            padding: 20px;
            border-radius: 8px;
            margin-top: 25vh;
            border-radius: 8px;
            text-align: center;
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
        .erro>ul {
           
            list-style-type: none;
            font-size: 22px;


        }
    </style>
</head>
<body>
    <div class="formulario">
        <form action="{{route('tratarMudarSenha')}}" method="post" class="form">
            @csrf
            <div>
                <h1>Ola, {{session('email')}}</h1>
            </div>
            <label for="nova_senha">Nova senha:</label> <br>
            <input type="password" name="nova_senha" id="nova_senha"> <br>
            <label for="confirmar_senha">Confirmar senha:</label> <br>
            <input type="password" name="confirmar_nova_senha" id="confirmar_senha"> <br>
            <button id="btn_submit" type="submit">Mudar Senha</button>
        </form>
    </div>
    @if($errors->any())
        <div class="erro">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button id="btn_esconder" onclick="esconder()">Voltar</button>
        </div>
    @endif

    @if(session('mensagemErro'))
        <script>
            alert('{{ session('mensagemErro') }}')
        </script>
    @endif
    <script>
        function esconder() {
            document.querySelector('.erro').style.display = 'none';
        }
    </script>

    
</body>
</html>