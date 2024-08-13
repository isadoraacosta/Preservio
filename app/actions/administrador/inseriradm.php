<?php

require_once("../../config/conecta.php");
require_once("../../config/validação.php");
require_once('sessoes.php');

$msg = '';

if (empty($_POST['nome'])) {
    $msg = "Preencha o campo nome";
} elseif (empty($_POST['sobrenome'])) {
    $msg = "Preencha o campo sobrenome";
} elseif (empty($_POST['data'])) {
    $msg = "Preencha a data de nascimento";
} elseif (empty($_POST['cpf'])) {
    $msg = "Preencha o CPF";
}elseif(verificarCPF($_POST['cpf'])){
    $msg = "CPF já cadastrado. Por favor informe outro CPF";
    validarCPF($_POST['cpf']);
}elseif(empty($_POST['email'])){
    $msg = "Preencha o Email";
}elseif(verificarEmailadm($_POST['email'])){
    $msg = "Email já cadastrado. Por favor informe outro email";
} elseif (empty($_POST['senha'])) {
    $msg = "Preencha o campo senha";
} elseif (empty($_POST['senhaconfirm'])) {
    $msg = "Preencha o campo senha";
} elseif ($_POST['senha'] !== $_POST['senhaconfirm']) {
    $msg = "As senhas não coincidem.";
} else {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dataNasc = $_POST['data'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senhaCrip = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    conecta();

    $sql = "INSERT INTO administrador(nome, sobrenome, data_nasc, cpf, email, senha) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die("Erro ao inserir. Problema no acesso ao banco de dados.");
    }

    $stmt->bind_param("ssssss", $nome, $sobrenome, $dataNasc, $cpf, $email, $senhaCrip);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $msg = "Usuário cadastrado com sucesso.";
        // Redireciona para a próxima página após o cadastro bem-sucedido
        sessoes($credential);
        header("Location: ../../pages/cadastro/cadastroadm.php?msg={$msg}");
        exit();
    } else {
        $msg = "Não foi possível cadastrar, tente novamente.";
        // Redireciona de volta para a página de cadastro com a mensagem de erro
        header("Location: ../../pages/cadastro/cadastroadm.php?msg={$msg}");
        exit();
    }

    desconecta();
}

// Se houver erro antes da tentativa de cadastro, redireciona de volta para a página de cadastro
if (!empty($msg)) {
    header("Location: ../../pages/cadastro/cadastroadm.php?msg={$msg}");
    exit();
}

?>
