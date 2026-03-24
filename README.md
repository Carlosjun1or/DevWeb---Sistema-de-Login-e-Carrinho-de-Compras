# 🛒 Sistema de Login e Carrinho de Compras

Sistema web desenvolvido com foco em simular um ambiente de e-commerce, incluindo **autenticação de usuários, controle de sessão e gerenciamento de carrinho de compras**.

---

# 📋 Sobre o Projeto

Este projeto foi desenvolvido para praticar a construção de aplicações web com integração entre **frontend e backend**, simulando funcionalidades reais de um sistema de compras online.

A aplicação permite que usuários realizem login, naveguem por produtos, adicionem e gerenciem os produtos no carrinho de compras com persistência durante a sessão e finalizem pedidos com feedback ao usuário.

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

### ✅ Finalização de Pedido
- Limpeza do carrinho após finalização
- Exibição de mensagem de sucesso
- Redirecionamento automático para login

---

## 🔐 Controle de Sessão

O sistema utiliza sessões PHP para:

- Manter o usuário autenticado
- Armazenar os dados do carrinho
- Controlar acesso às páginas protegidas

---

## 🎨 Interface

- Layout inspirado em plataformas de e-commerce
- Design responsivo (desktop, tablet e mobile)
- Feedback visual para ações do usuário
- Estrutura modular de CSS (global + páginas)

---

## 🧪 Tecnologias Utilizadas

- `PHP` → Backend e controle de sessão  
- `HTML5` → Estrutura das páginas  
- `CSS3` → Estilização da interface  
- `JavaScript` → Interações no frontend  

---

## 📁 Estrutura do Projeto

```
/
├── css/
│ ├── global.css
│ ├── layout.css
│ ├── login.css
│ ├── dashboard.css
│ └── carrinho.css
│
├── model/
│ ├── session.php
│ ├── carrinho.php
│ ├── remover.php
│ ├── atualizar_qtd.php
│ ├── finalizar_pedido.php
│ └── logout.php
│
├── view/
│ ├── login.php
│ ├── dashboard.php
│ └── carrinho.php
│
└── README.md

```

---

## 📈 Melhorias Futuras 

- Integração com banco de dados (MySQL)
- Cadastro de usuários
- Sistema de pedidos persistente
- API REST para integração frontend/backend
- Pagamento simulado

---

## 👨‍💻 Autores

| Nome |
|---|
| Carolina Ribeiro |
| Carlos Roberto |

---

## 📄 Licença

Este projeto é de uso educacional feito para uma atividade e livre para estudos.

