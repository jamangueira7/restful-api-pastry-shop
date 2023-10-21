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

## 👩🏿‍💻 Rotas

- **`POST auth/register`**: Rota crair um usuario;
  Envio
```
{
    "name": "João",
    "email": "joao3@joao.com",
    "password": "123456"
}

```
Retorno
```
{
    "user": {
        "_id": "6020684de0458a0c6c2ceaf6",
        "name": "João",
        "email": "joao4@joao.com",
        "createdAt": "2021-02-07T22:23:09.011Z",
        "__v": 0
    }
}
```

## 🤔 Como contribuir

  - Faça um fork desse repositório;
  - Cria uma branch com a sua feature: `git checkout -b minha-feature`;
  - Faça commit das suas alterações: `git commit -m 'feat: Minha nova feature'`;
  - Faça push para a sua branch: `git push origin minha-feature`.

Depois que o merge da sua pull request for feito, você pode deletar a sua branch.
