# 🛒 Sistema de Login e Carrinho de Compras

Sistema web desenvolvido com foco em simular um ambiente de e-commerce, incluindo **autenticação de usuários, controle de sessão e gerenciamento de carrinho de compras**.

---

# 📋 Sobre o Projeto

Este projeto foi desenvolvido para praticar a construção de aplicações web com integração entre **frontend e backend**, simulando funcionalidades reais de um sistema de compras online.

A aplicação permite que usuários realizem login, naveguem por produtos e gerenciem um carrinho de compras com persistência durante a sessão.

---

## 🚀 Funcionalidades

### 🔐 Autenticação de Usuário
- Sistema de login com validação
- Controle de sessão utilizando PHP
- Proteção de páginas restritas

### 📊 Dashboard
- Área principal do sistema após login
- Exibição de produtos
- Navegação entre funcionalidades

### 🛒 Carrinho de Compras
- Adição de produtos ao carrinho
- Remoção de itens
- Atualização de quantidades
- Cálculo automático do total
- Persistência dos dados na sessão

---

## 🔐 Controle de Sessão

O sistema utiliza sessões PHP para:

- Manter o usuário autenticado
- Armazenar os dados do carrinho
- Controlar acesso às páginas protegidas

---

## 🧪 Tecnologias Utilizadas

- **PHP** → Backend e controle de sessão  
- **HTML5** → Estrutura das páginas  
- **CSS3** → Estilização da interface  
- **JavaScript** → Interações no frontend  

---

## 📁 Estrutura do Projeto

```
/
├── css/
│   ├── global.css
│   ├── layout.css
│   ├── login.css
│   ├── dashboard.css
│   └── carinho.css
│
├── model/
│   ├── session.php
│   ├── carrinho.php
│   ├── remover.php
│   ├── atualizar_qtd.php
│   └── logout.php
│
├── view/
│   ├── login.php
│   ├── dashboard.php
│   └── carrinho.php
│
└── README.md

```


