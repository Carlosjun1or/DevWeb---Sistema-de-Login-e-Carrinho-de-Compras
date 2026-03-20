<?php
session_start();
$user = isset($_COOKIE['email']) ? $_COOKIE['email'] : "";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Mercado Livre</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Mercado Livre</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/x-icon"
        href="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/5.21.22/mercadolibre/favicon.svg">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="#"><img
                        src="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/5.21.22/mercadolibre/favicon.svg"
                        alt="Mercado Livre"></a>
            </div>
        </nav>
    </header>

    <main>
        <section id="login" class="login">
            <div class="login-container">
                <h2><span> Mercado Livre </span> Login</h2>
                <form action="../model/session.php" method="POST" class="login-form">
                    <input name="email" type="email" placeholder="Email" value="<?php echo $user; ?>"><br>
                    <input name="senha" type="password" placeholder="Senha" required><br>
                    <div class="checkbox-container">
                        <input type="checkbox" id="lembre-me" name="lembre_me">
                        <label for="lembre-me">Lembre-me</label>
                    </div>
                    <button type="submit">Cadastrar</button>
                </form>
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
</body>
</html>