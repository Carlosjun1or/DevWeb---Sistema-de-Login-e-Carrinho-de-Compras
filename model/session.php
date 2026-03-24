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

    $_SESSION['email'] = $email;
        if($lembre_me){
            setcookie('email', $email, time() + (86400 * 30),'/'); 
        } else {
            setcookie('email', '', time() - 3600, '/');
        }
        header('Location: ../view/dashboard.php');
    exit();
    }

?>