<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filtrar Vaga</title>
    <style>
        body {
            /* background-image: url("./images/fundo1.jfif") */
        }
        .formulario {
            width: 100%;
            height: 100vh;
            display: grid;
            place-items: center;
            background-color: rgb(0, 0, 0);
            
        }
        .opcao {
            width: 500px;
            height: 500px;
            border-radius:15px;
            background-color: rgb(95, 95, 95);
            text-align: center;

        }
        #form {
            text-align: center;
            margin-top:30px;
            
            
        }
        select {
            height:40px;
            width:70%;
            border-radius:15px;
            background-color:black;
            color:white;


        }
        #btn_submit {
            padding:12px;
            background-color:rgb(0, 0, 0);
            color:white;
            width:70%;
            margin-top:15px;
            border-radius:15px;
            
        }
        #btn_submit:hover {
            background-color:rgb(255, 255, 255);
            color:rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <div class="formulario">
        <div class="opcao" >
            <h1>Buscar vaga</h1>
            <form id="form" action="{{route("filtandoVaga")}}" method="post">
                @csrf
                <label for="tipo_vaga">Tipo da vaga  : </label> <br>
                <select name="tipo_vaga" id="tipo_vaga">
                    <option value="" disabled selected >Selecione o tipo da vaga</option>
                    <option value="CLT">CLT</option>
                    <option value="PJ">Pessoa juridica</option>
                    <option value="FL">Free Lancer</option>
                </select><br/>
                <label for="tipo_vaga">Senioridade da vaga </label> <br>
                <select name="Senioridade_da_vaga" id="Senioridade_da_vaga">
                    <option value="" disabled selected >Selecione o senioridade da vaga</option>
                    <option value="J">Junior</option>
                    <option value="P">Pleno</option>
                    <option value="S">Senior</option>
                </select> <br/>
                <label for="scala_vagas">Escala da vaga </label> <br/>
                <select name="scala_vagas" id="scala_vagas">
                    <option value="" disabled selected >Selecione o escala da vaga</option>
                    <option value="PRE">Presencial</option>
                    <option value="RE">Remoto</option>
                    <option value="HI">Hibrido</option>
                </select><br/>
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
                    <option value="AC">Brasil</option>
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
                <button type="reset" id="btn_submit"  > Limpar </button>
                
                <input type="submit" value="Enviar" id="btn_submit" />
            </form>
            

        </div>

    </div>
</body>
</html>
