# CRUD Futebol - Laribol

Aplicação simples em **PHP + MySQL (XAMPP)** para gerenciamento de **times**, **jogadores** e **partidas**.  
Este projeto implementa um **CRUD completo** (Create, Read, Update, Delete) com validações e regras de negócio.

---

## Requisitos Funcionais
- Cadastrar, listar, editar e excluir times, jogadores e partidas.
- Jogador deve ter posição válida (lista pré-definida).
- Número da camisa deve estar entre 1 e 99.
- Partida não pode ocorrer entre o mesmo time.
- Listagens com filtros e paginação.
- Mensagens de erro e confirmação de exclusão.

---

## Como rodar no XAMPP

### 1. Instalar e configurar XAMPP
- Baixe e instale o [XAMPP](https://www.apachefriends.org/).
- Inicie os módulos **Apache** e **MySQL** no painel de controle.

### 2. Copiar o projeto
- Coloque a pasta **FUTEBOL_LARIBOL/** dentro do diretório: C:\xampp\htdocs\

### 3. Criar o banco de dados
- Abra o **phpMyAdmin** no navegador: http://localhost/phpmyadmin
- Clique em **SQL** e rode o script que está no arquivo: banco.sql
- Isso criará o banco **futebol_laribol** com as tabelas `times`, `jogadores` e `partidas`.

