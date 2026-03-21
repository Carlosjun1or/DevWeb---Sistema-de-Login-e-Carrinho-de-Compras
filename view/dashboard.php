<?php
session_start();

if(!isset($_SESSION['email'])){
    header('Location: ../view/login.php');
    exit();
}
$user = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mercado Livre</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/dashboard.css">
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
                <?php echo "olá! ". $user; ?>
                <a href="../model/logout.php">Sair</a>
                <a href="carrinho.php">Carrinho</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="dashboard">

            <div class="dashboard-container">
                <h2><span>Produtos</span></h2>

                <div class="carousel">
                    <button class="arrow left">&lt;</button>

                    <div class="produtos">
                    <!-- produtos -->
                        <div class="card">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_2X_769690-MLB75370639571_032024-F-kit-6-pares-meias-lupo-cano-medio-esportivas-academia.webp">
                            <form action="../model/carrinho.php" method="POST">
                                <label><h3>Produto 1</h3></label>
                                <input type="hidden" name="produto" value="Produto 1">
                                <p>R$100,00<p>
                                <input type="hidden" name="preco" value="100.00">
                                <input type="hidden" name="imagem" value="https://http2.mlstatic.com/D_NQ_NP_2X_769690-MLB75370639571_032024-F-kit-6-pares-meias-lupo-cano-medio-esportivas-academia.webp">
                                <button type="submit">comprar</button>
                            </form>
                        </div>
                        <div class="card">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_2X_728713-MLA99416610212_112025-F.webp">
                            <form action="../model/carrinho.php" method="POST">
                                <label><h3>Produto 2</h3></label>
                                <input type="hidden" name="produto" value="Produto 2">
                                <p>R$200,00<p>
                                <input type="hidden" name="preco" value="200.00">
                                <input type="hidden" name="imagem" value="https://http2.mlstatic.com/D_NQ_NP_2X_728713-MLA99416610212_112025-F.webp">
                                <button type="submit">comprar</button>
                            </form>
                        </div>

                        <div class="card">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_2X_704049-MLA99472181756_112025-F.webp">
                            <form action="../model/carrinho.php" method="POST">
                                <label><h3>Produto 3</h3></label>
                                <input type="hidden" name="produto" value="Produto 3">
                                <p>R$ 300,00</p>
                                <input type="hidden" name="preco" value="300.00">
                                <input type="hidden" name="imagem" value="https://http2.mlstatic.com/D_NQ_NP_2X_704049-MLA99472181756_112025-F.webp">
                                <button type="submit">comprar</button>
                            </form>
                        </div>

                        <div class="card">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_2X_844806-MLA99457494578_112025-F.webp">
                            <form action="../model/carrinho.php" method="POST">
                                <label><h3>Produto 4</h3></label>
                                <input type="hidden" name="produto" value="Produto 4">
                                <p>R$ 150,00</p>
                                <input type="hidden" name="preco" value="150.00">
                                <input type="hidden" name="imagem" value="https://http2.mlstatic.com/D_NQ_NP_2X_844806-MLA99457494578_112025-F.webp">
                                <button type="submit">comprar</button>
                            </form>
                        </div>

                        <div class="card">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_2X_787358-MLA100187065347_122025-F.webp">
                            <form action="../model/carrinho.php" method="POST">
                                <label><h3>Produto 5</h3></label>
                                <input type="hidden" name="produto" value="Produto 5">
                                <p>R$ 250,00</p>
                                <input type="hidden" name="preco" value="250.00">
                                <input type="hidden" name="imagem" value="https://http2.mlstatic.com/D_NQ_NP_2X_787358-MLA100187065347_122025-F.webp">
                                <button type="submit">comprar</button>
                            </form>
                        </div>

                        <div class="card">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_2X_603690-MLA93305557455_092025-F.webp">
                            <form action="../model/carrinho.php" method="POST">
                                <label><h3>Produto 6</h3></label>
                                <input type="hidden" name="produto" value="Produto 6">
                                <p>R$ 350,00</p>
                                <input type="hidden" name="preco" value="350.00">
                                <input type="hidden" name="imagem" value="https://http2.mlstatic.com/D_NQ_NP_2X_603690-MLA93305557455_092025-F.webp">
                                <button type="submit">comprar</button>
                            </form>
                        </div>

                        <div class="card">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_2X_827740-MLA99943629541_112025-F.webp">
                            <form action="../model/carrinho.php" method="POST">
                                <label><h3>Produto 7</h3></label>
                                <input type="hidden" name="produto" value="Produto 7">
                                <p>R$ 400,00</p>
                                <input type="hidden" name="preco" value="400.00">
                                <input type="hidden" name="imagem" value="https://http2.mlstatic.com/D_NQ_NP_2X_827740-MLA99943629541_112025-F.webp">
                                <button type="submit">comprar</button>
                            </form>
                        </div>

                        <div class="card">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_2X_794417-MLA99985509435_112025-F.webp">
                            <form action="../model/carrinho.php" method="POST">
                                <label><h3>Produto 8</h3></label>
                                <input type="hidden" name="produto" value="Produto 8">
                                <p>R$ 450,00</p>
                                <input type="hidden" name="preco" value="450.00">
                                <input type="hidden" name="imagem" value="https://http2.mlstatic.com/D_NQ_NP_2X_794417-MLA99985509435_112025-F.webp">
                                <button type="submit">comprar</button>
                            </form>
                        </div>
                    </div>

                    <button class="arrow right">&gt;</button>
                </div>

            </div>

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
   <!-- script para o carrossel-->
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