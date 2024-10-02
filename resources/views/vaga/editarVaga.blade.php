<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Vaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color:black;
        }

        .formulario {
            width: 690px;
            position: relative;
            left: 25%;
            top: 40px;
            background-color: gray;
            border: 2px solid white;
            border-radius: 8px;
        }
        #alerta {
            position: relative;
            left: 30%;
            width: 500px;
            top: 90px;
            height: 50%;

        }
        #email_vaga {
            margin-left:25px;
            width: 640px;
            background-color:black;
            color:white;
        }
        #titulo_vaga {
            margin-left:25px;
            width: 640px;
        }
        #descrição_vaga {
            margin-left:25px;
            width: 640px;
            background-color:black;
            color:white;
        }
        #select {
            margin-left:25px;
            width: 640px;
            background-color:black;
            color:white;
        }
        #titulo_vaga {
            margin-left:25px;
            width: 640px;
            background-color:black;
            color:white;
        }
        
        #salario {
            margin-left:25px;
            width: 640px;
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
            width:93.2%;
            border-radius:8px;
            background-color:black;
            color:white;
            margin-left: 3.7%;
        }
        #alerta {
            position: absolute;
            top: 15%;
            left: 25%;
            width: 690px;
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
        #btn:hover {
            background-color: #ffffff;
            color: #000000;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="formulario">
        <form class="form" action="{{route('editarVagaSubmit')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$vaga['id']}}" >
            <div class="">
                <label for="email_vaga" class="form-label">Endereço de email</label>
                <input type="email" name='email_vaga' class="form-control" id="email_vaga" value="{{$vaga['email']}}" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="titulo_vaga" class="form-label">Titulo da vaga</label>
                <input type="text" name="titulo_vagas" value="{{$vaga['titulo']}}" class="form-control" id="titulo_vaga">
            </div>
            <div class="mb-3">
                <label for="senioridade_vagas" class="form-label">Senioridade da vaga</label>
                <select class="form-select" value="{{$vaga['senioridade_vagas']}}" aria-label="Default select example" id="select" name="senioridade_vagas" >
                    <option value="" disabled selected>Selecione</option>
                    <option value="J">Junior</option>
                    <option value="P">Pleno</option>
                    <option value="S">Senior</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descrição" class="form-label">Descrição da vaga </label>
                <textarea class="form-control" name="descrição" id="descrição_vaga" value="{{$vaga['descrição']}}" rows="3"></textarea>
            </div>
            <h6>Salario</h6>
            <div class="">
                <input type="number" name="inicio_salario_vagas" value="{{$vaga['inicio_salario_vagas']}}" class="form-control" id="salario" placeholder="Salario inicial" >
                <input type="number" name="fim_salario_vagas" value="{{$vaga['fim_salario_vagas']}}" class="form-control" id="salario" placeholder="Salario limite" >           
            </div>

            <div><label for="">local da vaga</label> <br> 
            <input type="text" id="email_vaga" name="local_vagas" value="{{$vaga['local_vagas']}}"></div>
                
            <label for="tipo_vaga">Selecione o tipo da vaga</label>
            <select class="form-select" value="{{$vaga['tipo_vaga']}}" aria-label="Default select example" id="select" name="tipo_vaga" >
                <option value="" disabled selected>Selecione</option>
                <option value="CLT">CLT</option>
                <option value="PJ">Pessoa juridica</option>
                <option value="Fl">FreeLancer</option>
            </select>
            <label for="scala_vagas">Selecione a escala </label>
            <select class="form-select" value="{{$vaga['scala_vagas']}}"  aria-label="Default select example" id="select" name="scala_vagas" >
                <option value="" disabled selected>Selecione</option>
                <option value="HI">Hibrido</option>
                <option value="PRE">Presencial</option>
                <option value="RE">Remoto</option>
            </select>

            <label for="ferramenta_vaga">Linguagem : </label> <br/>
            <select name="ferramenta_vaga" value="{{$vaga['ferramenta_vaga']}}" id="ferramenta_vaga">
                <option value="" disabled selected >Selecione o escala da vaga</option>
                <option value="PHP">PHP</option>
                <option value="PY">Python</option>
                <option value="JV">Java</option>
                <option value="JS">JavaScript</option>
                <option value="GO">Golang</option>
                <option value="TS">TypeScript</option>
                <option value="DT">Dart</option>
                <option value="MYSQL">MySql</option>
                <option value="SQLITE">SQLITE</option>
                <option value="KT">Kotlin</option>
                <option value="CS">C#</option>
                <option value="CPP">C++</option>
                <option value="C">C</option>
                <option value="RS">Rust</option>
                <option value="R">R</option>
                <option value="HC">HTML e CSS</option>
                <option value="RB">Ruby</option>
                <option value="SW">Swift</option>
                <option value="SC">Scala</option>
                <option value="ML">MatLab</option>
                <option value="OC">Objective-C</option>
                <option value="SQL">SQL</option>
                <option value="CB">Cobol</option>
                <option value="LUA">LUA</option>
                <option value="MDB">MondoDB</option>
                <option value="VBA">VBA</option>
                <option value="PL">Perl</option>
                <option value="PSQL">PostreSQL</option>
                <option value="SQLS">Remoto</option>
                <option value="OSQL">Oracle SQL</option>
                <option value="PLSQL">PL-SQL</option>
                <option value="TSQL">T-SQL</option>
                <option value="HK">Haskell</option>
                <option value="JL">Julia</option>
                <option value="EL">Erlang</option>
                <option value="FS">F#</option>
            </select> <br>
            <label for="estado_vaga" >Estado </label> <br>
            <select name="estado_vaga" value="{{$vaga['estado_vaga']}}"  id="estado_vaga">
                <option value="" disabled selected  >Selecione o estado da vaga</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AM">Amapá</option>
                <option value="AZ">Amazonas</option>
                <option value="BH">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goias</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio grande do norte</option>
                <option value="RS">Rio grande do sul</option>
                <option value="RO">Rondonia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select> <br>

            <input class="btn btn-primary" type="submit" id="btn" value="Editar a vaga">

        </form>
    </div>
    @if ($errors->any())
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
        @if (session('error'))
            <script>
                alert("Erro ao editar a vaga")
            </script>
        @endif        
</body>
</html>

