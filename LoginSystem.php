<?php
session_start();

// Verifica se o login e a senha foram enviados
if (isset($_POST['login']) && isset($_POST['senha'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Verifica se o login e a senha estão corretos (aqui você pode adicionar a lógica de autenticação adequada)
    if ($login === 'usuario' && $senha === 'senha123') {
        $_SESSION['login'] = $login;
        header('Location: home.php'); // Redireciona para a página de home/logged-in
        exit();
    } else {
        echo 'Login ou senha inválidos!';
    }
}
?>