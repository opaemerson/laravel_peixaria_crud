Tutorial para rodar o projeto:

1. Abrir o projeto laravel em sua IDE e realizar a importação do banco de dados (peixaria.sql) em seu ambiente de manipulação de banco.

2. Habilitar a extension mysqli em php.ini do seu xampp.

3. Abrir o projeto laravel em sua IDE e executar o comando php artisan serve.

Tutorial para aplicar o CRUD via API.

1. Abrir sua plataforma de API, de preferência o Postman.

2. Criar uma nova collection

3. Realizar as ações de CRUD:

>> Para realizar o GET no projeto, colocar a URL:
http://LINK_LOCAL_ATIVO_EM_LARAVEL/api/peixes/X

Substitua o LINK_LOCAL_ATIVO_EM_LARAVEL para o link que está rodando seu projeto.

Substitua o X pelo ID que você deseja acessar.

>> Para realizar o POST no projeto, colocar a URL:
http://127.0.0.1:8000/api/peixes

Inserir o parametro "nome" e no campo valor, você coloca um nome de peixe.

>> Para realizar o PUT no projeto, colocar a URL:
http://127.0.0.1:8000/api/peixes/X

Substitua o X pelo ID que você deseja acessar.

Inserir o parametro "nome" e no campo valor, você coloca o nome que deseja alterar.

>> Para realizar o DELETE no projeto, colocar a URL:
http://127.0.0.1:8000/api/peixes/X

Substitua o X pelo ID que você deseja deletar.

