# Contact Management app

Este projeto é um administrador de contatos, nele você poderá visualizar, editar e excluir contatos do sistema de forma segura e online.

### Configurar o sistema

-   Vá para a pasta que você deseja clonar este repositório `cd ~/SUA_PASTA_DE_REPOSITORIOS`
-   Clone este repositório: `git clone https://github.com/Buraym/content-management-application`
-   Entre na pasta: `cd content-management-application`
-   Instale as dependências usando o compose com este comando `composer install`
-   Adicione ou alterar as variáveis de ambiente de acordo com as configurações do seu sistema, como banco de dados e host
-   Rode o comando `php artisan migrate` para configurar o banco de dados com as migrations
-   Rode o comando `composer run dev` para iniciar a aplicação do servidor

### Entidades do sistema

Existe somente uma tabela no banco de dados do sistema, e essa tabela se chama `contacts`, e esta possui os atributos: `id`, `name`, `email`, `contact`, `deleted_at`, `created_at` e por fim, `updated_at`. a tabela conta tem a funcionalidade de soft delete, ou seja, o registro sempre fica mantido intacto no banco, mesmo após a exclusão

### Autenticação

Toda a autenticação é feita por nas telas que vem por padrão no Breeze, porem, a tela inicial de usuário autenticado e não autenticado é basicamente a mesma, mas somente o usuário autenticado pode fazer alterações e outras ações, como exclusão.

### Navegação das telas

Existem ao todo 4 telas principais, a tela inicial ( serve tanto para usuários não autorizados e usuários autorizados ), a tela de registro de contato, a tela de visualização e por fim a tela de edição. para visualizar as outras telas o usuário deve criar seu cadastro no site, ou se já houver, entrar pelo painel de login. após se autenticar, este deve clicar no botão acima da lista de contatos para ir para a página de registro de contatos, e nela, após o preenchimento dos formulários, este deve clicar no botão registrar e ser redirecionado para a página principal. Após a criação do contato, o usuário poderá excluir este clicando no botão com o ícone de lixeira na lista de contatos, porem se o usuário quiser visualizar ou editar, este deverá clicar no ID, nome ou botão com ícone de seta na linha do contato, sendo assim redirecionado para a página de detalhes, onde poderá ver as informações ou editar o contato, clicando no notão "Editar" na base da página, e sendo redirecionado para a página de edição.
