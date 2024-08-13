<?php
session_start();
require_once("../../config/conecta.php");
require_once("imagem.php");

$msg = '';

if(empty($_POST['assunto'])){
    $msg = "Preencha o campo assunto";
}elseif(empty($_POST['data'])){
    $msg = "Preencha o campo data";
}elseif(empty($_POST['hora'])){
    $msg = "Preencha o campo hora";
}elseif(empty($_POST['descricao'])){
    $msg = "Preencha o campo descricao";
}elseif(empty($_POST['tipo'])){
    $msg = "Preencha o campo tipo";
}elseif(empty($_POST['local'])){
    $msg = "Preencha o campo local";
}else{

    $assunto = $_POST['assunto'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $local = $_POST['local'];
    $status_denuncia = 'Pendente';
    $data_hoje = date('Y-m-d'); // Formato: 2024-08-05

    $anexo = null; // Inicializando como null

    if (isset($_FILES['anexo']) && $_FILES['anexo']['error'] === UPLOAD_ERR_OK) {
        $anexo = Imagem($_FILES['anexo']);
    }

    conecta();
    global $mysqli;

    $id_user =  NULL;

    // Inserir o tipo de denúncia
    $sql = "INSERT INTO tipo_denuncia(descricao) VALUES(?);";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $tipo);
    $stmt->execute();
    $tipo_id = $stmt->insert_id;
    $stmt->close();

    // Inserir a denúncia com ou sem anexo
    $sql = "INSERT INTO denuncia(imagem, status_denuncia, data_d, hora_d, assunto, local_crime, descricao, id_fk, data_recebida, id_tipo_fk)
            VALUES(?,?,?,?,?,?,?,?,?, ?);";
    $stmt = $mysqli->prepare($sql);
    if (!$stmt) {
        die("Erro ao inserir. Problema no acesso ao banco de dados");
    }
    $stmt->bind_param("sssssssssi", $anexo, $status_denuncia, $data, $hora, $assunto, $local, $descricao, $id_user, $data_hoje, $tipo_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $msg = "Denúncia cadastrada com sucesso.";
    } else {
        $msg = "Não foi possível realizar a denúncia.";
    }
    $stmt->close();
    desconecta();

    header("Location: ../../pages/denuncia/realizardenuncia.php?msg_sucesso=$msg");
    exit();
}

?>
