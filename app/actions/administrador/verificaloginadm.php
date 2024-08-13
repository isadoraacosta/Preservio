<?php

session_start();
include_once('sessoes.php');
include_once("../../config/conecta.php");

if(empty($_POST['emailadm'])){
    $msg = "Presencha o email";
}
elseif(empty($_POST['senhaadm'])){
    $msg = "Preencha a senha";
}else{

    $email = $_POST['emailadm'];
    $senha = $_POST['senhaadm'];

    conecta(); 

    $query = "SELECT * FROM administrador WHERE email = ?;";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();


    
    $credential = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
    desconecta();

    if ($credential) {
        if (password_verify($senha, $credential['senha'])) {
            sessoes($credential);
            header('Location: ../../pages/home/principaladm.php');
            exit();
        } else {
            $msg = 'Senha incorreta!';
        }
    } else {
        $msg = "Usuário não cadastrado ou dados inválidos!";
    }

    header("Location: ../../pages/login/loginadm.php?msgLogin={$msg}");
    exit();
}

?>
