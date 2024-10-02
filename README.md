Sistema de Vagas de Emprego

Dados do Projeto:
    Status: Em andamento
    Versão do PHP: 8.3.4
    Servidor Utilizado: Laragon
    Versão do Servidor: 6.0
    Banco de Dados: MySQL (versão 8.0.30)
    Framework Front-End: Bootstrap (versão 5.3.2)

Tecnologias Utilizadas:
    HTML
    CSS
    JavaScript
    Framework Laravel (PHP)
    MySQL
    Bootstrap

Descrição do Projeto:
    Este é um sistema de gerenciamento de vagas de emprego. Ele oferece funcionalidades para que usuários possam se cadastrar, realizar login, criar e gerenciar vagas, se candidatar a oportunidades e conversar diretamente com empregadores. O sistema permite que o empregador pause vagas, evitando inscrições indesejadas. Os usuários também podem buscar por candidatos, utilizando filtros para facilitar a navegação.

Funcionalidades:
    Validação de formulários: Verificação de tipos de dados e exibição de mensagens personalizadas.
    Paginação dinâmica: O usuário escolhe quantos itens deseja ver por página.
    Sistema de chat em tempo real (em desenvolvimento): Para conversas diretas entre candidatos e empregadores.

Estrutura do Sistema (CRUDs):
    Usuário:
        Create: Criação de contas com criptografia de senhas.
        Read: Acesso e visualização de informações pessoais.
        Update: Edição de perfil (senha, descrição, estado, área, etc.).
        Delete: Exclusão de conta (inclui a remoção de vagas, comentários e candidaturas associadas).

    Vaga:
        Create: Criação de vagas com informações detalhadas (descrição, salário, local, escala, etc.).
        Read: Visualização de vagas criadas.
        Update: Alteração de detalhes das vagas (salário, local, descrição, etc.).
        Delete: Exclusão de vagas.

    Comentários:
        Create: Postagem de comentários em vagas próprias ou de terceiros.
        Read: Visualização de comentários.
        Update: Edição de comentários.
        Delete: Exclusão de comentários.

Sistema de Candidatura:
    Os usuários podem se candidatar a diversas vagas, visualizar suas candidaturas e utilizar o sistema de chat (em desenvolvimento) para negociações com os empregadores.

Comandos para Executar o Projeto:

php artisan migrate
php artisan db:seed


Atenção:
    Na data atual (02/10/2024), o sistema de chat em tempo real está em desenvolvimento. O projeto será atualizado com essa funcionalidade em breve.

Melhorias futuras:
	Breeze
	Cadastro de curriculo
	Cadastro de fotos

Agradecimento:
    Muito obrigado por testar o meu projeto! Fico muito feliz com sua presença. Se puder, deixe um comentário com ideias para melhorar o sistema. Sua ajuda será muito apreciada!

Desenvolvido por: Anderson de Carvalho Ramos

