<?php

require_once("../../config/conecta.php");
require_once("../../config/validação.php"); // Inclua o arquivo de validação que define a função validarCPF e verificarEmail
require_once('sessoes.php');
session_start();

$msg = '';

if (empty($_POST['nome'])) {
    $msg = "Preencha o campo nome";
} elseif (empty($_POST['sobrenome'])) {
    $msg = "Preencha o campo sobrenome";
} elseif (empty($_POST['data'])) {
    $msg = "Preencha a data de nascimento";
} elseif (empty($_POST['email'])) {
    $msg = "Preencha o campo email";
} elseif (verificarEmailuser($_POST['email'])) {
    $msg = "Email já cadastrado. Por favor informe outro email";
} elseif (empty($_POST['senha'])) {
    $msg = "Preencha o campo senha";
} elseif (empty($_POST['senhaconfirm'])) {
    $msg = "Preencha o campo de confirmação de senha";
} elseif ($_POST['senha'] !== $_POST['senhaconfirm']) {
    $msg = "As senhas não coincidem.";
} else {
    // Obtendo e limpando os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dataNasc = $_POST['data'];
    $email = $_POST['email'];
    $senhaCrip = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    conecta();

    $sql = "INSERT INTO usuario(nome, sobrenome, data_nasc, email, senha) VALUES (?, ?, ?, ?, ?);";
    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die("Erro ao inserir. Problema no acesso ao banco de dados.");
    }

    $stmt->bind_param("sssss", $nome, $sobrenome, $dataNasc, $email, $senhaCrip);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $msg = "Usuário cadastrado com sucesso.";
        sessoes($credential);
        // Redireciona para a página principal após o cadastro bem-sucedido
        header("Location: ../../pages/login/loginuser.php?msg={$msg}");
        exit();
    } else {
        $msg = "Não foi possível cadastrar, tente novamente.";
        // Redireciona de volta para a página de cadastro com a mensagem de erro
        header("Location: ../../pages/cadastro/cadastrouser.php?msg={$msg}");
        exit();
    }

    desconecta();
}

// Se houver erro antes da tentativa de cadastro, redireciona de volta para a página de cadastro
if (!empty($msg)) {
    header("Location: ../../pages/cadastro/cadastrouser.php?msg={$msg}");
    exit();
}

?>
