<?php 
    session_start();

    if(isset($_COOKIE['email'])){
        $user = $_COOKIE['email'];
    } else {
        $user = "";
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $lembre_me = isset($_POST['lembre_me']);

        // Aqui você pode adicionar a lógica de autenticação, como verificar o email e senha no banco de dados

        if($lembre_me){
            setcookie('email', $email, time() + (86400 * 30)); // Cookie válido por 30 dias
        } else {
            setcookie('email', '', time() - 3600); // Exclui o cookie
        }

        // Redirecionar para a página principal ou dashboard após o login bem-sucedido
        header('Location: dashboard.php');
        exit();
    }

?>