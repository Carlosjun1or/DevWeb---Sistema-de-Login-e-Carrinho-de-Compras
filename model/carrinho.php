<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

$produto = $_POST['produto'] ?? '';
$preco = $_POST['preco'] ?? 0;
$imagem = $_POST['imagem'] ?? '';
$qtd = isset($_POST['quantidade']) ? (int) $_POST['quantidade'] : 0;

if ($produto !== '') {
    $indexEncontrado = -1;

    foreach ($_SESSION['carrinho'] as $index => $item) {
        if ($item['produto'] === $produto) {
            $indexEncontrado = $index;
            break;
        }
    }

    if ($indexEncontrado >= 0) {
        $_SESSION['carrinho'][$indexEncontrado]['qtd'] += $qtd;

        if ($_SESSION['carrinho'][$indexEncontrado]['qtd'] <= 0) {
            array_splice($_SESSION['carrinho'], $indexEncontrado, 1);
        }
    } else {
        if ($qtd > 0) {
            $_SESSION['carrinho'][] = [
                'produto' => $produto,
                'preco' => $preco,
                'imagem' => $imagem,
                'qtd' => $qtd
            ];
        }
    }
}

header("Location: ../view/dashboard.php");
exit();