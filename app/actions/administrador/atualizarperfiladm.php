
<?php

require_once("../../config/conecta.php");
require_once("../../config/validação.php");
require_once("../../config/conecta.php");
require_once("sessoes.php");

conecta();

global $mysqli;

$id= $_SESSION['login'];

$msg = '';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNascimento = $_POST['data'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($senha)) {
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "UPDATE administrador SET nome = ?, sobrenome = ?, data_nasc = ?, cpf = ?, email = ? WHERE email = ?;";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssssssi", $nome, $sobrenome, $dataNascimento, $cpf, $email, $id);
} else {
    $sql = "UPDATE administrador SET nome = ?, sobrenome = ?, data_nasc = ?, cpf = ?, email = ? WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssssi", $nome, $sobrenome, $dataNascimento, $cpf, $email, $id);
}

if ($stmt->execute()) {
    echo "Perfil atualizado com sucesso!";
} else {
    echo "Erro ao atualizar o perfil: " . $stmt->error;
}

$stmt->close();
$mysqli->close();

header("Location: ../../pages/perfil/visualizarperfiladm.php"); // Redireciona de volta para a página de edição
exit();
?>