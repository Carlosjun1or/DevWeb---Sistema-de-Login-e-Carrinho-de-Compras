<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
$user = $_SESSION['email'];
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
                <a href="dashboard.php"><img
                        src="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/5.21.22/mercadolibre/favicon.svg"
                        alt="Mercado Livre"></a>
            </div>
            <div class="user">
                <?php echo "olá! " . $user; ?>
                <a href="../model/logout.php">Sair</a>
                <a href="carrinho.php">Carrinho</a>
            </div>
        </nav>
    </header>

    <main>
        <?php

        // verifica se o carrinho existe
        $carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : [];
        $total = 0;
        ?>

        <h1>Seu Carrinho </h1>
        <?php if (empty($carrinho)): ?>
            <p>Carrinho vazio</p>
        <?php else: ?>
            <div class='carrinho'>
                <ul>
                    <?php foreach ($carrinho as $index => $item):
                        $total += $item['preco']
                            ?>
                        <!-- exibe cada item -->
                        <div class='carrinho-card'>
                            <li>
                                <img src="<?php echo $item['imagem']; ?>" width="100">

                                <?php echo $item['produto']; ?>
                                - R$ <?php echo $item['preco']; ?>
                                <!-- remover item -->
                                <form action="../model/remover.php" method="POST">
                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                    <button type="submit">Remover</button>
                                </form>
                            </li>
                        </div>
                    <?php endforeach; ?>
                </ul>
            </div>

            <h3>Total: R$ <?php echo $total; ?></h3>

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

    <script>
        const leftArrow = document.querySelector('.arrow.left');
        const rightArrow = document.querySelector('.arrow.right');
        const produtos = document.querySelector('.produtos');

        function getCardWidth() {
            const card = document.querySelector('.card');
            return card.offsetWidth + 20; // gap
        }

        function scrollRight() {
            produtos.scrollBy({ left: getCardWidth(), behavior: 'smooth' });
        }

        leftArrow.addEventListener('click', () => {
            produtos.scrollBy({ left: -getCardWidth(), behavior: 'smooth' });
        });

        rightArrow.addEventListener('click', scrollRight);

        setInterval(scrollRight, 3000);
    </script>
</body>

</html>