<?php

include_once('sessoes.php');
include_once("../../config/conecta.php");

if(empty($_POST['email'])){
    $msg = "Preencha o email";
}
elseif(empty($_POST['senha'])){
    $msg = "Preencha a senha";
}else{

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    conecta(); 

    $query = "SELECT * FROM usuario WHERE email = ?;";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();


    
    $credential = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
    desconecta();

    if ($credential) {
        if (password_verify($senha, $credential['senha'])) {
            sessoes($credential);
            
            header('Location: ../../pages/home/principaluser.php');
            exit();
        } else {
            $msg = 'Senha incorreta!';
        }
    } else {
        $msg = "Usuário não cadastrado ou dados inválidos!";
    }

    header("Location: ../../pages/login/loginuser.php?msgLogin={$msg}");
    exit();
}

?>
