<?php

session_start();

function sessoes($credential){

    $_SESSION['login'] = $credential['email'];
    $_SESSION['usuario'] = $credential['id'];
    $_SESSION['nome'] = $credential['nome'];
    $_SESSION['sobrenome'] = $credential['sobrenome'];
    $_SESSION['data_nasc'] = $credential['data_nasc'];
    $_SESSION['cpf'] = $credential['cpf'];
    $_SESSION['senha'] = $credential['senha'];
}
?>