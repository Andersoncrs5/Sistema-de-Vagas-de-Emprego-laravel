<!doctype html>
<html lang="en">
    <head>
        <title>filtrar Candidatos</title>
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
                color:black;
            }
            #titulo {
                background-color: gray;
            }
            #form {

            }
            #formulario{
                background-color: gray;
                width: 50% ;
                margin: 0px auto;
                margin-top: 10%;
            }
        </style>
    </head>

    <body>
        <header>
            <div id="titulo" class="container-fluid border border-3 border-light p-3">
                <div class="row">
                    <div class="col-4 text-center">
                        <h1>Filtrando Candidatos</h1>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4 text-center ">
                        <a class="btn btn-dark mt-2" href="{{route("bem_vindo")}}">Voltar</a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            
            <div id='form' class="text-center">
                <form id="formulario" class="p-3 border border-light border-4 rounded-3" action="{{route("filtrandoCandidatos")}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label" >Area : </label>
                        <select class="form-select form-select-lg" aria-label="Default select example" id="select" name="area_usuario" >
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
                    </div>
                    <div class="mb-3">
                        <label for="estado_usuario">Estado</label>
                        <select class="form-select" aria-label="Default select example" id="select" name="estado_usuario" >
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
                    </div>
                    <button type="reset" class="btn btn-dark" >Limpar</button>
                    <button type="submit" class="btn btn-dark" >Filtrar</button>

                    
                    
                </form>
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
