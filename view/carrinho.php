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

        <section class="carrinho-container">

            <h1>Seu Carrinho</h1>

            <?php if (isset($_SESSION['msg'])): ?>
                <div class="mensagem-sucesso">
                    <?= $_SESSION['msg']; ?>
                </div>
                <?php unset($_SESSION['msg']); ?>
            <?php endif; ?>

            <?php if (empty($carrinho)): ?>

                <div class="carrinho-vazio">
                    <span class="icone">🛒</span>
                    <h2>Seu carrinho está vazio</h2>
                    <p>Adicione produtos para começar sua compra</p>

                    <a href="dashboard.php" class="btn-voltar">
                        Ver produtos
                    </a>
                </div>

            <?php else: ?>

                <div class="carrinho">

                    <?php foreach ($carrinho as $index => $item):

                        $subtotal = $item['preco'] * $item['qtd'];
                        $total += $subtotal;
                        ?>

                        <div class="carrinho-card">

                            <img src="<?= $item['imagem']; ?>">

                            <h3><?= $item['produto']; ?></h3>

                            <p>Preço: R$ <?= number_format($item['preco'], 2, ',', '.'); ?></p>

                            <div class="controle">

                                <div class="quantidade">

                                    <form action="../model/atualizar_qtd.php" method="POST">
                                        <input type="hidden" name="index" value="<?= $index; ?>">
                                        <input type="hidden" name="acao" value="diminuir">
                                        <button type="submit">-</button>
                                    </form>

                                    <span><?= $item['qtd']; ?></span>

                                    <form action="../model/atualizar_qtd.php" method="POST">
                                        <input type="hidden" name="index" value="<?= $index; ?>">
                                        <input type="hidden" name="acao" value="aumentar">
                                        <button type="submit">+</button>
                                    </form>

                                </div>

                                <form action="../model/remover.php" method="POST">
                                    <input type="hidden" name="index" value="<?= $index; ?>">
                                    <button class="btn-remover">Remover</button>
                                </form>

                            </div>

                            <p><strong>Subtotal: R$ <?= number_format($subtotal, 2, ',', '.'); ?></strong></p>
                        </div>

                    <?php endforeach; ?>

                </div>

                <div class="caixa-total">
                    <span>Total:</span>
                    <strong>R$ <?= number_format($total, 2, ',', '.'); ?></strong>
                </div>

                <form action="../model/finalizar_pedido.php" method="POST">
                    <button class="finalizar">Finalizar Pedido</button>
                </form>

            <?php endif; ?>

        </section>

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

    <?php if (isset($_SESSION['redirect_login'])): ?>
        <script>
            let tempo = 3;

            const mensagem = document.querySelector(".mensagem-sucesso");

            const contador = setInterval(() => {
                if (tempo > 0) {
                    mensagem.innerHTML = `Pedido efetuado com sucesso! 🎉 <br> Saindo em ${tempo}...`;
                    tempo--;
                } else {
                    clearInterval(contador);
                    window.location.href = "login.php";
                }
            }, 1000);
        </script>
        <?php
        unset($_SESSION['redirect_login']);
        unset($_SESSION['msg']);
    endif;
    ?>

</body>

</html>