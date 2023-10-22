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

Envio e email:
![img_1.png](.github%2Fimg_1.png)

Criação das migrations e seeds:
![img.png](.github%2Fimg.png)

### Sobre o projeto
A API Restful deve contemplar os módulos Cliente, Produto e Pedido, sendo que cada um deverá conter endpoints CRUDL.

As tabelas devem conter as seguintes informações:

  - Clientes nome, e-mail, telefone, data de nascimento, endereço, complemento, bairro, cep, data de cadastro;
  - Produtos nome, preço, foto;
  - Pedidos código do cliente, código do produto, data da criação;

### Requisitos

  - [X] Não devem existir dois clientes com o mesmo e-mail.
  - [X] O produto deve possuir foto.
  - [X] Os dados devem ser validados.
  - [X] O sistema deve conter uma série de tipos de produtos já definidos.
  - [X] O pedido deve contemplar N produtos.
  - [X] O cliente pode contemplar N pedidos.
  - [X] Após a criação do pedido o sistema deve disparar um e-mail para o cliente contendo os detalhes do seu pedido.
  - [X] Os registros devem conter a funcionalidade de soft deleting.
  - [X] Padronização PSR
  - [X] Nomenclatura de classes, métodos e rotas no padrão americano.

### Requisitos adicionais

  - [ ] Testes unitários.
  - [X] Dockerizar a aplicação

### Critérios de avaliação

  - Profundidade do conhecimento e utilização das funcionalidades do framework.
  - Organização do código.
  - Padronização PSR
  - Fidelidade aos requisitos solicitados.

## 🚀 Como Rodar

  - Clone o projeto.
  - Entre no repositório.
  - Rode `docker-compose up -d --build`
  - Entre na pasta `project` e rode `composer install`
  - Caso o .env não tenha sido criado é nescessario configurar desse jeito:
    - DB_CONNECTION=mysql
    - DB_HOST=setup-mysql
    - DB_PORT=3306
    - DB_DATABASE=laravel
    - DB_USERNAME=user
    - DB_PASSWORD=password
  - Para envio de email configure: (É preciso colocar um email valido em EmailConfirmation no metodo envelope())
    - MAIL_MAILER=smtp
    - MAIL_HOST=smtp.office365.com
    - MAIL_PORT=587
    - MAIL_USERNAME=SEU EMAIL
    - MAIL_PASSWORD=SUA SENHA
    - MAIL_ENCRYPTION=tls
    - MAIL_FROM_ADDRESS=SEU EMAIL
    - MAIL_FROM_NAME="Pastry shop"
  - Rode `php artisan migrate:install` para gerar o banco.
  - Rode `php artisan db:seed` para gerar dados fake para cliente e produtos.

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

Envio
```
{
    "name": "João Mangueira 2",
    "email": "joao2@gmail.com",
    "phone": "112345678",
    "birthday": "1987-06-05",
    "address": "Rua teste",
    "complement": "325",
    "neighborhood": "Teste",
    "zipcode": "03195-033"
}
```

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

Envio
```
{
    "name": "João Mangueira Alteradof",
    "email": "joao@gmail.com",
    "phone": "112345678",
    "birthday": "1987-06-05",
    "address": "Rua teste",
    "complement": "325",
    "neighborhood": "Teste",
    "zipcode": "03195-033"
}
```

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
    "Products": [
        {
            "id": "21fb9406-eb79-38c8-9709-cb8c3351f848",
            "name": "Frango Mussarela",
            "price": "9.23",
            "photo": "pastel1.jpg"
        },
        {
            "id": "3978c019-dd08-362c-b07a-65bb8ed3ee9a",
            "name": "Frango Cheddar",
            "price": "13.72",
            "photo": "pastel0.jpg"
        }
    }
}   
```

- **`GET api/product`**: Rota mostrar um produto;

Retorno
```
{
    "Product": {
        "id": "21fb9406-eb79-38c8-9709-cb8c3351f848",
        "name": "Frango Mussarela",
        "price": "9.23",
        "photo": "pastel1.jpg"
    }
}  
```

- **`POST api/products`**: Rota restaurar produtos;

Retorno
```
{
    "Product": {
        "id": "21fb9406-eb79-38c8-9709-cb8c3351f848",
        "name": "Frango Mussarela",
        "price": "9.23",
        "photo": "pastel1.jpg"
    }
}
```
- **`DELETE api/product/id`**: Rota deletar um produto;

Retorno
```
{
    "Product": {
        "id": "21fb9406-eb79-38c8-9709-cb8c3351f848",
        "name": "Frango Mussarela",
        "price": "9.23",
        "photo": "pastel1.jpg"
    }
}
```

- **`PATCH api/product/id`**: Rota restaurar um produto;

Retorno
```
{
    "Product": {
        "id": "21fb9406-eb79-38c8-9709-cb8c3351f848",
        "name": "Frango Mussarela",
        "price": "9.23",
        "photo": "pastel1.jpg"
    }
}
```

- **`POST api/product/id`**: Rota criar um produto;

Enviar
```
{
    "Product": {
        "name": "Portuguesa",
        "price": "10.20",
        "photo": FILE
    }
}
```

Retorno
```
{
    "Product": {
        "name": "Portuguesa",
        "price": "10.20",
        "photo": {}
    }
}
```

- **`PUT api/product/id`**: Rota alterar um produto;

Enviar
```
{
    "Product": {
        "name": "Portuguesa Alterado",
        "price": "10.23",
        "photo": FILE
    }
}
```

Retorno
```
{
    "Product": {
        "name": "Portuguesa Alterado",
        "price": "10.23",
        "photo": "images/fa7rjwtYknR6L8heR8pSSPk5ZYLyss0G9WZI5Ltg.webp",
        "id": "9a6e551b-6747-4c97-a346-f7d18211ba70"
    }
}
```

- **`POST api/order/id`**: Rota criar um pedido;

Enviar
```
{
    "client_id": "0f2292fd-9f74-35f1-be8c-3a0926c109d8",
    "products": [
        "17078cd9-28d9-327d-9240-ee167b09f8d0", 
        "1e859d39-c103-3586-afb9-7fda729ed344", 
        "24e43180-92d7-3298-97b9-e5d11669a39c"
    ]
}
```

Retorno
```
{
    "Order": {
        "client_id": "0f2292fd-9f74-35f1-be8c-3a0926c109d8",
        "total": 34.42,
        "id": "9a6e72fc-a176-461f-be17-99b107ba597b",
        "products": [
            {
                "id": "17078cd9-28d9-327d-9240-ee167b09f8d0",
                "name": "Carne Mussarela",
                "price": "13.56",
                "photo": "pastel0.jpg",
                "pivot": {
                    "order_id": "9a6e72fc-a176-461f-be17-99b107ba597b",
                    "product_id": "17078cd9-28d9-327d-9240-ee167b09f8d0"
                }
            },
            {
                "id": "1e859d39-c103-3586-afb9-7fda729ed344",
                "name": "Carne Cheddar",
                "price": "10.42",
                "photo": "pastel0.jpg",
                "pivot": {
                    "order_id": "9a6e72fc-a176-461f-be17-99b107ba597b",
                    "product_id": "1e859d39-c103-3586-afb9-7fda729ed344"
                }
            },
            {
                "id": "24e43180-92d7-3298-97b9-e5d11669a39c",
                "name": "Queijo Mussarela",
                "price": "10.44",
                "photo": "pastel0.jpg",
                "pivot": {
                    "order_id": "9a6e72fc-a176-461f-be17-99b107ba597b",
                    "product_id": "24e43180-92d7-3298-97b9-e5d11669a39c"
                }
            }
        ]
    }
}
```

- **`GET api/order/id`**: Rota listar pedidos de um cliente;

Retorno
```
{
    "Orders": [
        {
            "id": "9a6e6d32-03be-4080-8c2e-9b59703a9956",
            "total": "34.42",
            "client_id": "0f2292fd-9f74-35f1-be8c-3a0926c109d8",
            "products": [
                {
                    "id": "17078cd9-28d9-327d-9240-ee167b09f8d0",
                    "name": "Carne Mussarela",
                    "price": "13.56",
                    "photo": "pastel0.jpg",
                    "pivot": {
                        "order_id": "9a6e6d32-03be-4080-8c2e-9b59703a9956",
                        "product_id": "17078cd9-28d9-327d-9240-ee167b09f8d0"
                    }
                },
                {
                    "id": "1e859d39-c103-3586-afb9-7fda729ed344",
                    "name": "Carne Cheddar",
                    "price": "10.42",
                    "photo": "pastel0.jpg",
                    "pivot": {
                        "order_id": "9a6e6d32-03be-4080-8c2e-9b59703a9956",
                        "product_id": "1e859d39-c103-3586-afb9-7fda729ed344"
                    }
                },
                {
                    "id": "24e43180-92d7-3298-97b9-e5d11669a39c",
                    "name": "Queijo Mussarela",
                    "price": "10.44",
                    "photo": "pastel0.jpg",
                    "pivot": {
                        "order_id": "9a6e6d32-03be-4080-8c2e-9b59703a9956",
                        "product_id": "24e43180-92d7-3298-97b9-e5d11669a39c"
                    }
                }
            ]
        }
    ]
}
```


## 🤔 Como contribuir

  - Faça um fork desse repositório;
  - Cria uma branch com a sua feature: `git checkout -b minha-feature`;
  - Faça commit das suas alterações: `git commit -m 'feat: Minha nova feature'`;
  - Faça push para a sua branch: `git push origin minha-feature`.

Depois que o merge da sua pull request for feito, você pode deletar a sua branch.
