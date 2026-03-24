<?php
session_start();

/* limpa carrinho */
unset($_SESSION['carrinho']);

/* cria mensagem */
$_SESSION['msg'] = "Pedido efetuado com sucesso! 🎉";

/* ativa redirecionamento */
$_SESSION['redirect_login'] = true;

/* volta pro carrinho */
header("Location: ../view/carrinho.php");
exit();