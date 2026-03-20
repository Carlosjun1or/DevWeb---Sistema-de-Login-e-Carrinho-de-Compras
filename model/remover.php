<?php
session_start();

if(isset($_POST['index'])){
    $index = $_POST['index'];
    // remove o item do carrinho
    unset($_SESSION['carrinho'][$index]);

    // reorganiza o array para evitar índices faltando
    $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
}

header("Location: ../view/carrinho.php");
exit();