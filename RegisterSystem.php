<?php
session_start();

// Verifica se o login e a senha foram enviados
if (isset($_POST['login']) && isset($_POST['senha'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Armazene os detalhes do usuário no banco de dados (aqui você pode adicionar a lógica de armazenamento adequada)
    // ...

    echo 'Registro realizado com sucesso!';
    exit();
}
?>