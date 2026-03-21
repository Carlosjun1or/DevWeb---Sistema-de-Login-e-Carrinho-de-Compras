<?php
session_start();

$index = $_POST['index'];
$acao = $_POST['acao']; // aumentar | diminuir

if (isset($_SESSION['carrinho'][$index])) {

    if ($acao === "aumentar") {
        $_SESSION['carrinho'][$index]['qtd'] += 1;
    }

    if ($acao === "diminuir") {
        $_SESSION['carrinho'][$index]['qtd'] -= 1;

        // se chegar em 0, remove
        if ($_SESSION['carrinho'][$index]['qtd'] <= 0) {
            unset($_SESSION['carrinho'][$index]);
            $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
        }
    }
}

header("Location: ../view/carrinho.php");
exit();