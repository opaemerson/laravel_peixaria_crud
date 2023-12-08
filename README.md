Tutorial para rodar o projeto:

1. Abrir o projeto laravel em sua IDE e realizar a importa��o do banco de dados (peixaria.sql) em seu ambiente de manipula��o de banco.

2. Habilitar a extension mysqli em php.ini do seu xampp.

3. Abrir o projeto laravel em sua IDE e executar o comando php artisan serve.

Tutorial para aplicar o CRUD via API.

1. Abrir sua plataforma de API, de prefer�ncia o Postman.

2. Criar uma nova collection

3. Realizar as a��es de CRUD:

>> Para realizar o GET no projeto, colocar a URL:
http://LINK_LOCAL_ATIVO_EM_LARAVEL/api/peixes/X

Substitua o LINK_LOCAL_ATIVO_EM_LARAVEL para o link que est� rodando seu projeto.

Substitua o X pelo ID que voc� deseja acessar.

>> Para realizar o POST no projeto, colocar a URL:
http://127.0.0.1:8000/api/peixes

Inserir o parametro "nome" e no campo valor, voc� coloca um nome de peixe.

>> Para realizar o PUT no projeto, colocar a URL:
http://127.0.0.1:8000/api/peixes/X

Substitua o X pelo ID que voc� deseja acessar.

Inserir o parametro "nome" e no campo valor, voc� coloca o nome que deseja alterar.

>> Para realizar o DELETE no projeto, colocar a URL:
http://127.0.0.1:8000/api/peixes/X

Substitua o X pelo ID que voc� deseja deletar.

