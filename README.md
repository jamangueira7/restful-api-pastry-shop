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
{
    "Clients": [
        {
            "id": "0a348bdd-99b2-3ae4-9d9a-ab94b5a05370",
            "name": "Newell Bechtelar",
            "email": "igerhold@example.org",
            "phone": "15035296454",
            "birthday": "2005-04-26",
            "address": "Hills Row",
            "complement": "203",
            "neighborhood": "port",
            "zipcode": "03195-297"
        },
        {
            "id": "48ec2ae2-e230-3eda-abf2-ae8180f6d5dd",
            "name": "Linwood Robel",
            "email": "simonis.forest@example.net",
            "phone": "14257928354",
            "birthday": "1976-09-25",
            "address": "Hansen Turnpike",
            "complement": "75552",
            "neighborhood": "ville",
            "zipcode": "03195-636"
        }
    ]
}
```


- **`GET api/client/id`**: Rota listar um cliente;

Retorno
```
{
    "Client": {
        "id": "0a348bdd-99b2-3ae4-9d9a-ab94b5a05370",
        "name": "Newell Bechtelar",
        "email": "igerhold@example.org",
        "phone": "15035296454",
        "birthday": "2005-04-26",
        "address": "Hills Row",
        "complement": "203",
        "neighborhood": "port",
        "zipcode": "03195-297",
        "created_at": "2023-10-21T22:17:10.000000Z",
        "updated_at": "2023-10-21T22:47:26.000000Z",
        "deleted_at": null
    }
}
```

- **`DELETE api/client/id`**: Rota deletar um cliente;

Retorno
```
{
    "Client": {
        "id": "0a348bdd-99b2-3ae4-9d9a-ab94b5a05370",
        "name": "Newell Bechtelar",
        "email": "igerhold@example.org",
        "phone": "15035296454",
        "birthday": "2005-04-26",
        "address": "Hills Row",
        "complement": "203",
        "neighborhood": "port",
        "zipcode": "03195-297"
    }
}
```

- **`PATCH api/client/id`**: Rota restaurar um cliente;

Retorno
```
{
    "Client": {
        "id": "0a348bdd-99b2-3ae4-9d9a-ab94b5a05370",
        "name": "Newell Bechtelar",
        "email": "igerhold@example.org",
        "phone": "15035296454",
        "birthday": "2005-04-26",
        "address": "Hills Row",
        "complement": "203",
        "neighborhood": "port",
        "zipcode": "03195-297"
    }
}
```

- **`POST api/client`**: Rota para criar um cliente;

Retorno
```
{
    "Client": {
        "name": "João Mangueira 2",
        "email": "joao2@gmail.com",
        "phone": "112345678",
        "birthday": "1987-06-05",
        "address": "Rua teste",
        "complement": "325",
        "neighborhood": "Teste",
        "zipcode": "03195-033"
    }
}
```

- **`PUT api/client/id`**: Rota alterar um cliente;

Retorno
```
{
    "Client": {
        "id": "9a6e2b3f-0775-435a-bee3-bc0293ed9052",
        "name": "João Mangueira Alteradof",
        "email": "joao@gmail.com",
        "phone": "112345678",
        "birthday": "1987-06-05",
        "address": "Rua teste",
        "complement": "325",
        "neighborhood": "Teste",
        "zipcode": "03195-033"
    }
}
```

- **`GET api/products`**: Rota listar produtos;

Retorno
```
{
    "Client": {
        "id": "0a348bdd-99b2-3ae4-9d9a-ab94b5a05370",
        "name": "Newell Bechtelar",
        "email": "igerhold@example.org",
        "phone": "15035296454",
        "birthday": "2005-04-26",
        "address": "Hills Row",
        "complement": "203",
        "neighborhood": "port",
        "zipcode": "03195-297",
        "created_at": "2023-10-21T22:17:10.000000Z",
        "updated_at": "2023-10-21T22:47:26.000000Z",
        "deleted_at": null
    }
}
```

- **`POST api/products`**: Rota restaurar produtos;

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

- **`DELETE api/product/id`**: Rota deletar um produto;

- **`POST api/product/id`**: Rota restaurar um produto;


## 🤔 Como contribuir

  - Faça um fork desse repositório;
  - Cria uma branch com a sua feature: `git checkout -b minha-feature`;
  - Faça commit das suas alterações: `git commit -m 'feat: Minha nova feature'`;
  - Faça push para a sua branch: `git push origin minha-feature`.

Depois que o merge da sua pull request for feito, você pode deletar a sua branch.
