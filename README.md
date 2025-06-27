# MVC-PHP
# 📋 Projeto PHP-MVC - Listagem de Clientes

Este é um projeto simples desenvolvido em PHP seguindo o padrão de arquitetura MVC (Model-View-Controller). O objetivo é demonstrar como organizar um sistema básico para listar clientes armazenados em um banco de dados MySQL.

---

## 🛠️ Tecnologias Utilizadas

- PHP (sem frameworks)
- MySQL
- HTML5
- CSS3 
- XAMPP (para ambiente local)

---

## 📁 Estrutura do Projeto

/PHP-MVC
│
├── configuration/
│ └── connect.php # Conexão com o banco de dados (PDO)
│
├── controller/
│ └── clientesController.php # Controlador com as ações (getAll)
│
├── models/
│ └── cliente.php # Model com acesso ao banco de dados
│
├── views/
│ └── index.php # View responsável por exibir os dados
│
├── index.php # Arquivo inicial (roteador simples)
└── README.md # Documentação do projeto

## Formato da tabela Clietes 

CREATE DATABASE MVC_PHP;

USE MVC_PHP;

CREATE TABLE CLIENTES(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nome VARCHAR (45) NOT NULL,
email VARCHAR (85) NOT NULL,
telefone VARCHAR (11) NOT NULL
);

Este projeto é intencionalmente simples para fins didáticos.
