<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <style>
        body {
            background-color: #000000;
        }
        .formulario {
            width:55%;
            text-align: center;
            margin: 40px auto;
            background-color: #575757;
            padding: 20px;
            border-radius: 5px;
            color: #ffffff;
            font-family: Arial, sans-serif;
            border: 1px solid #ffffff;
        }
        input {
            width: 70%;
            margin-bottom: 4px;
            border-radius: 5px;
            border: 1px solid #000000;
            height: 35px !important;
            background-color: #000000;
            color:white;
        }
        #select {
            width: 69.85% !important;
            margin-left: 15%;
            background-color: #000000;
            color:white;
        }
        #btn_submit {
            width: 70%;
            margin-top: 1.2%;
            border-radius: 8px;
            background-color: #000000;
            color: #ffffff;
            cursor: pointer;
            border:2px solid white;
        }
        #btn_submit:hover {
            background-color: #ffffff;
            color: #000000;
            border:2px solid black;
        }
        #alerta {
            position: absolute;
            top: 22vh;
            left: 20%;
            width: 60%;
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
        #menu {
            background-color: gray;
        }
    </style>

</head>
<body>
    <header>
        <div id="menu" class="container-fluid">
            <div class="row border border-2 p-2 border-light">
                <div class="col-4 text-center">
                    <h1> Editar perfil </h1>
                </div>
                <div class="col-4"></div>
                <div class="col-4 text-center ">
                    <button class="btn btn-dark mt-2" onclick="window.history.back()">Voltar</button>
                </div>
            </div>
        </div>

    </header>
    <div class="formulario" >
        <h3>Ola , {{session('email')}}</h3>
        <form action="{{route('editarPerfilSubmit')}}" method="post">
            @csrf
            <input type="hidden" value="{{session('id')}}" name="id">
            <label for="nome_usuario" >Nome :</label>  <br>
            <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Exemplo:Denji" > <br>
            <label for="nome_usuario" >Ferramenta que voce mais usa :</label>  <br>
            <input type="text" name="ferramenta_favorita_usuario" id="nome_usuario" placeholder="Exemplo:python,Jira,WebSocket" > <br>
            <label for="sexo_usuario">Sua senioridade :</label> <br>
            <select class="form-select" aria-label="Default select example" id="select" name='nivel_usuario' >
                <option selected disabled>Junior</option>
                <option value="E">Estagio</option>
                <option value="J">Junior</option>
                <option value="P">Pleno</option>
                <option value="S">Senior</option>
            </select>
            <label for="sexo_usuario">Sexo :</label> <br>
            <select class="form-select" aria-label="Default select example" id="select" name='sexo_usuario' >
                <option selected disabled>Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
            <label for="estado_usuario">Estado</label>
            <select class="form-select"  aria-label="Default select example" id="select" name="estado_usuario" >
                <option value="" disabled selected>Selecione</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
            <label for="">Area : </label>
            <select class="form-select" aria-label="Default select example" id="select" name="area_usuario" >
                <option value="" disabled selected>Selecione</option>
                <option value="Desenvolvimento Web">Desenvolvimento Web</option>
                <option value="Desenvolvimento de Aplicativos Móveis">Desenvolvimento de Aplicativos Móveis</option>
                <option value="Desenvolvimento de Software">Desenvolvimento de Software</option>
                <option value="Ciência de Dados e Análise">Ciência de Dados e Análise</option>
                <option value="Inteligência Artificial">Inteligência Artificial</option>
                <option value="Desenvolvimento de Jogos">Desenvolvimento de Jogos</option>
                <option value="Desenvolvimento de Sistemas Embarcados">Desenvolvimento de Sistemas Embarcados</option>
                <option value="DevOps">DevOps</option>
                <option value="Segurança da Informação">Segurança da Informação</option>
                <option value="Administração de Banco de Dados">Administração de Banco de Dados</option>
                <option value="Programação de Scripts">Programação de Scripts</option>
                <option value="Blockchain">Blockchain</option>
                <option value="Criptomoedas">Criptomoedas</option>
                <option value="Desenvolvimento de APIs">Desenvolvimento de APIs</option>
                <option value="Testes de Software">Testes de Software</option>
                <option value="Arquitetura de Software">Arquitetura de Software</option>
                <option value="Computação em Nuvem">Computação em Nuvem</option>
                <option value="Gestão de Projetos">Gestão de Projetos</option>
                <option value="Marketing Digital">Marketing Digital</option>
                <option value="UX/UI Design">UX/UI Design</option>
            </select>
            <input type="submit"  id='btn_submit' value="Alterar">
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

</body>
</html>


