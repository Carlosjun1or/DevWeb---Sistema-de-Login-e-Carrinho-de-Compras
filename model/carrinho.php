<?php
session_start();

if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

// pega dados do formulário
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];


// adiciona no carrinho
$_SESSION['carrinho'][] = [
    'produto' => $produto,
    'preco' => $preco,
    'imagem' => $imagem
];

// volta pro dashboard
header("Location: ../view/dashboard.php");
exit();