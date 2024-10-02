<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidatar-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body {
            background-color:black;
        }

        .formulario {
            width: 55%;
            margin:0px auto;
            margin-top: 4%;
            background-color: gray;
            border: 2px solid white;
            border-radius: 8px;
        }
        #alerta {
            width: 55%;
            margin:0px auto;
            margin-top: 100vh; 
            height: 50%;

        }
        #email_vaga {
            margin-left:25px;
            width: 95%;
            background-color:black;
            color:white;
        }
        #titulo_vaga {
            margin-left:25px;
            width: 95%;
        }
        #descrição_vaga {
            margin-left:25px;
            width: 95%;
            background-color:black;
            color:white;
        }
        #select {
            margin-left:25px;
            width: 95%;
            background-color:black;
            color:white;
        }
        #titulo_vaga {
            margin-left:25px;
            width: 95%;
            background-color:black;
            color:white;
        }
        
        #salario {
            margin-left:25px;
            width: 95%;
            margin-bottom: 12px;
            background-color:black;
            color:white;
        }
        #btn {
            margin-top: 15px;
            margin-left:25px;
            margin-bottom: 15px;
            background-color:black;
            color:white;
            border: 2px solid white;
        }

        label, h6 {
            margin-left:25px;
            
        }
        input {
            background-color:black;
            color:white;

        }
        #ferramenta_vaga,#estado_vaga {
            height:40px;
            width: 95.1%;
            border-radius:8px;
            background-color:black;
            color:white;
            margin-left: 2.7%;
        }
        #helpId {
            margin-left: 2.7%;
        }
    </style>

</head>
<body>
    <div class="container-fluid text-center p-3 border border-3 border-light">
        <h5 style="color: white;" >Candidatar-se</h5>
    </div>

    <div class="formulario">
        <form action="{{route('tratarCandidatura',["id"=>$id])}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email_vaga" class="form-label">Endereço de email</label>
                <input type="email" value="{{session('email')}}" name='email_vaga' class="form-control" id="email_vaga" value="{{session('email')}}" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Telefone</label>
                <input type="tel" id="email_vaga" class="form-control" name="telefone_candidatos" aria-describedby="helpId" placeholder="(99) 999999999"/>
                <small id="helpId" class="form-text text-muted">Digite seu telefone com o seu DD</small>
            </div>
            
            <input class="btn btn-primary" type="submit" id="btn" value="Enviar">
            <a href="{{route("bem_vindo")}}" class="btn btn-primary" id="btn"  >Voltar</a>

            

        </form>
    </div>
    <div class="errors">
        @if ($errors->any())
            <div class="alert alert-danger" id="alerta" role="alert">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
    </div>
            
</body>
</html>