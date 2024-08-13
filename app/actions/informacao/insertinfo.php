<?php

require_once("../../config/conecta.php");
require_once("imagem.php");
session_start(); // Inicie a sessão para acessar as variáveis de sessão

$msg = "";

// Validação dos campos
if (empty($_POST['titulo'])) {
    $msg = "Preencha o campo do título";
} elseif (empty($_POST['conteudo'])) {
    $msg = "Preencha o campo do conteúdo";
} elseif (empty($_POST['autor'])) {
    $msg = "Preencha o campo com o nome do autor";
} elseif (empty($_POST['tipo'])) {
    $msg = "Preencha o campo do tipo";
} else {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $autor = $_POST['autor'];
    $legenda = isset($_POST['legenda']) ? $_POST['legenda'] : null; // Legenda opcional
    $tipo = $_POST['tipo'];
    $data_hoje = date('Y-m-d'); // Formato: 2024-08-05

    $anexo = null; // Inicializando como null

    // Verifica se uma imagem foi enviada
    if (isset($_FILES['anexo']) && $_FILES['anexo']['error'] === UPLOAD_ERR_OK) {
        $anexo = Imagem($_FILES['anexo']);
    }

    // Pega o valor da chave estrangeira (id_fk) da sessão
    $id_fk = $_SESSION['usuario']; // Assumindo que 'usuario' seja o id_fk

    conecta();

    // Inserindo o tipo de informação
    $sql = "INSERT INTO tipo_info(descricao) VALUES (?);";
    $stmt = $mysqli->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $tipo);
        $stmt->execute();
        $tipo_id = $stmt->insert_id;
        $stmt->close();
        $id_tipo_info = $tipo_id;

        // Inserindo as informações da publicação
        $sql = "INSERT INTO informacoes(titulo, descricao, imagem, legenda_imagem, autor, data_postagem, id_fk, id_tipo_info_fk)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssssssii", $titulo, $conteudo, $anexo, $legenda, $autor, $data_hoje, $id_fk, $id_tipo_info);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {





                $msg = "Publicação realizada com sucesso.";
            } else {
                $msg = "Não foi possível realizar a publicação.";
            }

            $stmt->close();
        } else {
            $msg = "Erro ao preparar a inserção da informação.";
        }
    } else {
        $msg = "Erro ao preparar a inserção do tipo de informação.";
    }

    desconecta();
}

header("Location: ../../pages/noticia/noticiasadm.php?msg=" . urlencode($msg));
?>
