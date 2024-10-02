<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar vaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body {
            background-color:black;
        }

        .formulario {
            width: 70%;
            margin: 0px auto;
            background-color: gray;
            border: 2px solid white;
            border-radius: 8px;
        }
        #alerta {
            margin: 0px auto;
            width: 500px;
            top: 90px;
            height: 50%;

        }
        #email_vaga {
            margin-left:25px;
            width: 95.5%;
            background-color:black;
            color:white;
        }
        #titulo_vaga {
            margin-left:25px;
            width: 95.5%;
        }
        #descrição_vaga {
            margin-left:25px;
            width: 95.5%;
            background-color:black;
            color:white;
        }
        #select {
            margin-left:25px;
            width: 95.5%;
            background-color:black;
            color:white;
        }
        #titulo_vaga {
            margin-left:25px;
            width: 95.5%;
            background-color:black;
            color:white;
        }
        
        #salario {
            margin-left:25px;
            width: 95.5%;
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
            width:95.5%;
            border-radius:8px;
            background-color:black;
            color:white;
            margin-left: 2.2%;
        }
        #title {
            color:white;
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
    <div id="title" class="container-fluid p-3 border border-3 border-light text-center mb-5 " >
        <h1>Criando vaga</h1>
    </div>
    <div class="formulario">
        <form action="{{route('tratarVaga')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email_vaga" class="form-label">Endereço de email</label>
                <input type="email" value="{{session('email')}}" name='email_vaga' class="form-control" id="email_vaga" value="{{session('email')}}" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="titulo_vaga" class="form-label">Titulo da vaga</label>
                <input type="text" name="titulo_vagas" class="form-control" id="titulo_vaga">
            </div>
            <div class="mb-3">
                <label for="senioridade_vagas" class="form-label">Senioridade da vaga</label>
                <select class="form-select" aria-label="Default select example" id="select" name="senioridade_vagas" >
                    <option value="" disabled selected>Selecione</option>
                    <option value="J">Junior</option>
                    <option value="P">Pleno</option>
                    <option value="S">Senior</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descrição" class="form-label">Descrição da vaga </label>
                <textarea class="form-control" name="descrição" id="descrição_vaga" rows="3"></textarea>
            </div>
            <h6>Salario</h6>
            <div class="">
                <input type="number" name="inicio_salario_vagas" class="form-control" id="salario" placeholder="Salario inicial" >
                <input type="number" name="fim_salario_vagas" class="form-control" id="salario" placeholder="Salario limite" >           
            </div>

            <div><label for="">Cidade da vaga</label> <br> <input type="text" name="local_vagas" class="form-control" id="email_vaga"></div>
                
            <label for="tipo_vaga">Selecione o tipo da vaga</label>
            <select class="form-select" aria-label="Default select example" id="select" name="tipo_vaga" >
                <option value="" disabled selected>Selecione</option>
                <option value="CLT">CLT</option>
                <option value="PJ">Pessoa juridica</option>
                <option value="Fl">FreeLancer</option>
            </select>
            <label for="scala_vagas">Selecione a escala </label>
            <select class="form-select" aria-label="Default select example" id="select" name="scala_vagas" >
                <option value="" disabled selected>Selecione</option>
                <option value="HI">Hibrido</option>
                <option value="PRE">Presencial</option>
                <option value="RE">Remoto</option>
            </select>

            <label for="ferramenta_vaga">Linguagem : </label> <br/>
                <select name="ferramenta_vaga" id="ferramenta_vaga">
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
                <select name="estado_vaga" id="estado_vaga">
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
                    <option value="PI">Piaui</option>
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
                <input type="hidden" name="fk_usuario_id">

            <input class="btn btn-primary" type="submit" id="btn" value="Criar a vaga">
            <a id="btn" class="btn btn-primary" href="{{route('bem_vindo')}}" > Voltar para o inicio </a>


            

        </form>
    </div>
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
            
</body>
</html>