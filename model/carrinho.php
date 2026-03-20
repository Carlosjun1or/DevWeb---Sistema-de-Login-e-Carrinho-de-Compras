<?php
session_start();

if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

// pega dados do formulário
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];
$existe = false;

//ve se ja tem
foreach($_SESSION['carrinho'] as $index => $item){
    if($item['produto'] === $produto){
        $_SESSION['carrinho'][$index]['qtd'] += 1;
        $existe = true;
        break;
    }
}
if(!$existe){
    // adiciona no carrinho
    $_SESSION['carrinho'][] = [
        'produto' => $produto,
        'preco' => $preco,
        'imagem' => $imagem,
        'qtd' => 1
    ];
}




// volta pro dashboard
header("Location: ../view/dashboard.php");
exit();