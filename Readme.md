# ENGAJAMENTO

[![GitHub Issues Abertas](https://img.shields.io/github/issues/sara-nossa-terra/engajamento.svg?maxAge=2592000)]() 
[![GitHub Issues Fechas](https://img.shields.io/github/issues-closed-raw/sara-nossa-terra/engajamento.svg?maxAge=2592000)]()
[![Build Status](https://travis-ci.org/sara-nossa-terra/engajamento.svg?branch=master)](https://travis-ci.org/sara-nossa-terra/engajamento)

Bem vindo/a à documentação do ENGAJAMENTO! Aqui você vai encontrar diversas documentações sobre o processo de desenvolvimento do ENGAJAMENTO, versionameno e publicação.

## :whale2: Docker
Utilizamos o Docker como plataforma de desenvolvimento com o intuito de garantir o mesmo ambiente de desenvolvimento 
independentemente do Sistema Operacional(SO) utilizado. Informaçoes mais detalhadas sobre a utilização do docker clique
[aqui](doc/Guia_utilizacao_docker.md).


### :nut_and_bolt: Instalação

Com Docker e docker-compose devidamente instalados em sua máquina basta clonar o projeto executar o ```docker-compose```:
```bash
    $ git clone https://github.com/sara-nossa-terra/engajamento && cd engajamento
    $ docker-compose up -d
```

Dentro da pasta engajamento rodar o seguinte comando para dar permissão de escrita para a pasta de arquivos temporária da aplicação:
```bash
    $ chmod -R 775 application/storage
```

Se não esteja utilizando root para subir os containers, dê permissão de escrita para o usuário www-data utilizado pelo serviço web:
```bash
    $ sudo chown -R www-data: application/storage
```

Após os containers terminarem de serem carregados, dentro da pasta engajamento rodar o seguinte comando:
```bash
    $ docker exec php-engajamento /bin/bash -c 'php artisan migrate:fresh --seed'
```

Após alguns instantes a aplicação estará disponível em:
```bash
    localhost:8082
```

Para fazer autenticar(Logar) e entrar no sistema através da tela inicial utilize os seguintes dados de acesso:

E-mail: admin@admin.com
Senha: 123

Para descarregar os containers basta digitar:
```bash
    $ docker-compose down
```

## :rocket: Tecnologias
* [Docker](https://www.docker.com)
* [PostgreSql](https://www.postgresql.org/)
* [PHP 7.x](http://php.net)
* [Laravel](https://laravel.com)
* [jQuery](https://jquery.com)
* [Bootstrap](https://getbootstrap.com)

## :busts_in_silhouette: Autores
Várias pessoas colaboraram com o desenvimento do projeto ENGAJAMENTO e decidimos centralizar em um único local todos os que participaram com o desenvolvimento do projeto.
  
Clique [aqui](https://github.com/sara-nossa-terra/engajamento/graphs/contributors) para visualizar.
