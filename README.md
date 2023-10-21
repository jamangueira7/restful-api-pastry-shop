<p align="center">
  <a href="#-tecnologias">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-projeto">Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-como-rodar">Como rodar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-rotas">Rotas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-como-contribuir">Como contribuir</a>&nbsp;&nbsp;&nbsp;
  </p>

<br>


## API pastelaria

## 🚀 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

  - [PHP](https://www.php.net/) 8.2.11
  - [MySQL](https://pt-br.reactjs.org/) 8.2.11
  - [Docker](https://www.docker.com/) 24.0.6
  - [Laravel](https://laravel.com/) 10.28.0
  - [Composer](https://getcomposer.org/) 2.6.5


## 💻 Projeto

A necessidade é desenvolver uma API RESTFul para o gerenciamento de pedidos de uma pastelaria utilizando o framework Laravel/Lúmen.

### Sobre o projeto
A API Restful deve contemplar os módulos Cliente, Produto e Pedido, sendo que cada um deverá conter endpoints CRUDL.

As tabelas devem conter as seguintes informações:

  - Clientes nome, e-mail, telefone, data de nascimento, endereço, complemento, bairro, cep, data de cadastro;
  - Produtos nome, preço, foto;
  - Pedidos código do cliente, código do produto, data da criação;

### Requisitos

  - Não devem existir dois clientes com o mesmo e-mail.
  - O produto deve possuir foto.
  - Os dados devem ser validados.
  - O sistema deve conter uma série de tipos de produtos já definidos.
  - O pedido deve contemplar N produtos.
  - O cliente pode contemplar N pedidos.
  - Após a criação do pedido o sistema deve disparar um e-mail para o cliente contendo os detalhes do seu pedido.
  - Os registros devem conter a funcionalidade de soft deleting.
  - Padronização PSR
  - Nomenclatura de classes, métodos e rotas no padrão americano.

### Requisitos adicionais

  - Testes unitários.
  - Dockerizar a aplicação

### Critérios de avaliação

  - Profundidade do conhecimento e utilização das funcionalidades do framework.
  - Organização do código.
  - Padronização PSR
  - Fidelidade aos requisitos solicitados.

## 🚀 Como Rodar

  - Clone o projeto.
  - Entre no repositório.
  - Rode `docker-compose up -d --build`
  - Rode `php artisan `

## 👩🏿‍💻 Rotas

- **`GET api/clients`**: Rota listar clientes;

Retorno
```
[
  {
    "id":"0a348bdd-99b2-3ae4-9d9a-ab94b5a05370",
    "name":"NewellBechtelar",
    "email":"igerhold@example.org",
    "phone":"15035296454",
    "birthday":"2005-04-26",
    "address":"Hills Row",
    "complement":"203",
    "neighborhood":"port",
    "zipcode":"03195-297",
    "created_at":"2023-10-21T22:17:10.000000Z",
    "updated_at":"2023-10-21T22:17:10.000000Z",
    "deleted_at":null
  }
]
```


- **`GET api/client/id`**: Rota listar um cliente;

Retorno
```
{
  "id":"08f9357b-b3b5-3072-a30b-99412593a2c1",
  "name":"Mabelle Franecki",
  "email":"runolfsdottir.kathleen@example.com",
  "phone":"14243894998",
  "birthday":"1999-04-03",
  "address":"Francis Lakes",
  "complement":"68364",
  "neighborhood":"furt",
  "zipcode":"03195-296",
  "created_at":"2023-10-21T22:08:11.000000Z",
  "updated_at":"2023-10-21T22:08:11.000000Z",
  "deleted_at":null
}
```

- **`GET api/products`**: Rota listar produtos;

Retorno
```
[
   {
      "id":"21fb9406-eb79-38c8-9709-cb8c3351f848",
      "name":"Frango Mussarela",
      "price":"9.23",
      "photo":"pastel1.jpg",
      "created_at":"2023-10-21T22:17:10.000000Z",
      "updated_at":"2023-10-21T22:17:10.000000Z",
      "deleted_at":null
   },
   {
      "id":"3978c019-dd08-362c-b07a-65bb8ed3ee9a",
      "name":"Frango Cheddar",
      "price":"13.72",
      "photo":"pastel0.jpg",
      "created_at":"2023-10-21T22:17:10.000000Z",
      "updated_at":"2023-10-21T22:17:10.000000Z",
      "deleted_at":null
   }
]
```


- **`GET api/product/id`**: Rota listar um produto;

Retorno
```
{
  "id":"1584461c-eff5-3993-bdb3-85a670f23019",
  "name":"Frango Cheddar",
  "price":"10.06",
  "photo":"pastel1.jpg",
  "created_at":"2023-10-21T22:08:11.000000Z",
  "updated_at":"2023-10-21T22:08:11.000000Z",
  "deleted_at":null
}
```

## 🤔 Como contribuir

  - Faça um fork desse repositório;
  - Cria uma branch com a sua feature: `git checkout -b minha-feature`;
  - Faça commit das suas alterações: `git commit -m 'feat: Minha nova feature'`;
  - Faça push para a sua branch: `git push origin minha-feature`.

Depois que o merge da sua pull request for feito, você pode deletar a sua branch.
