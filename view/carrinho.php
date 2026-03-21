<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
$user = $_SESSION['email'];
$carrinho = $_SESSION['carrinho'] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - Mercado Livre</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/carrinho.css">
    <link rel="icon" type="image/x-icon"
        href="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/5.21.22/mercadolibre/favicon.svg">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="dashboard.php">
                    <img
                        src="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/5.21.22/mercadolibre/favicon.svg">
                </a>
            </div>

            <div class="user">
                <?php echo "Olá, " . $user; ?>
                <a href="../model/logout.php">Sair</a>
                <a href="dashboard.php">Produtos</a>
            </div>
        </nav>
    </header>


    <main>

        <h1>Seu Carrinho</h1>

        <?php if (empty($carrinho)): ?>

            <p>Carrinho vazio</p>

        <?php else: ?>

            <div class="carrinho">

                <?php foreach ($carrinho as $index => $item):

                    $subtotal = $item['preco'] * $item['qtd'];
                    $total += $subtotal;
                    ?>

                    <div class="carrinho-card">

                        <img src="<?= $item['imagem']; ?>" width="120">

                        <h3><?= $item['produto']; ?></h3>

                        <p>Preço: R$ <?= number_format($item['preco'], 2, ',', '.'); ?></p>

                        <div class="controle">

                            <div class="quantidade">

                                <!-- DIMINUIR -->
                                <form action="../model/atualizar_qtd.php" method="POST">
                                    <input type="hidden" name="index" value="<?= $index; ?>">
                                    <input type="hidden" name="acao" value="diminuir">
                                    <button type="submit">-</button>
                                </form>

                                <span><?= $item['qtd']; ?></span>

                                <!-- AUMENTAR -->
                                <form action="../model/atualizar_qtd.php" method="POST">
                                    <input type="hidden" name="index" value="<?= $index; ?>">
                                    <input type="hidden" name="acao" value="aumentar">
                                    <button type="submit">+</button>
                                </form>

                            </div>

                            <!-- REMOVER TOTAL -->
                            <form action="../model/remover.php" method="POST">
                                <input type="hidden" name="index" value="<?= $index; ?>">
                                <button class="btn-remover">Remover</button>
                            </form>

                        </div>

                        <p><strong>Subtotal: R$ <?= number_format($subtotal, 2, ',', '.'); ?></strong></p>
                    </div>

                <?php endforeach; ?>

            </div>

            <h2>Total: R$ <?= number_format($total, 2, ',', '.'); ?></h2>

        <?php endif; ?>

    </main>


    <footer>
        <p>© 2026 Mercado Livre. Todos os direitos reservados.</p>
        <div>
            <a href="https://wa.me/5513123456789?text=Olá." target="_blank">
                <img id="icon" src="https://imagepng.org/wp-content/uploads/2017/08/WhatsApp-icone.png"
                    alt="Icone do Zap"></a>
            <a href="https://www.instagram.com" target="_blank"><img id="icon"
                    src="https://imagepng.org/wp-content/uploads/2017/08/instagram-icone-icon.png"
                    alt="Icone do Instagram"></a>
            <a href="https://www.facebook.com" target="_blank">
                <img id="icon" src="https://imagepng.org/facebook-icone/facebook-icone-icon/"
                    alt="Icone do Facebook"></a>
        </div>
    </footer>
</body>

</html>