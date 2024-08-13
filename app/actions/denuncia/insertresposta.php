<?php

require_once("../config/conecta.php");
require_once('../administrador/sessoes.php');

$msg;

if(empty($_POST['texto'])){
    $msg = "Preencha o campo de texto.";
}else{
    $texto = $_POST['texto'];

    conecta();

    $sql = "INSERT INTO retorno (descricao, cpf_fk, id_denuncia_fk)
            VALUES (?);";

    $stmt = $mysqli->prepare($sql);

    if(!$stmt){
        die("Erro ao inserir. Problema no acesso ao banco de dados.");
    }
    
    $stmt->bind_param("ssss", $descricao, $cpf_adm, $id_denuncia);

    $stmt->execute();

    if($stmt->affected_rows > 0){
        $msg = "Resposta de denúncia adicionada com sucesso.";
    }else{
        $msg = "Não foi possível adicionar a resposta de denúncia.";
    }

    desconecta();
}

header("Location:../pages/respostadenuncia.php?msg={$msg}");

?>