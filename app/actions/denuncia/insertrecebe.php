<?php
// inserirVisualizacao.php

require_once('../../config/conecta.php'); // Ajuste o caminho conforme necessário
session_start();
conecta();
global $mysqli;

if (isset($_GET['id_denuncia'])) {
    $id_denuncia = intval($_GET['id_denuncia']);
    $id_administrador = $_SESSION['usuario']; // Supondo que o ID do admin esteja salvo na sessão

    // Verificar se já existe um registro com o id_administrador e id_denuncia
    $sql_verifica = "SELECT * FROM recebe WHERE id_denuncia_fk = ? AND id_fk = ?";
    $stmt_verifica = $mysqli->prepare($sql_verifica);
    $stmt_verifica->bind_param('ii', $id_denuncia, $id_administrador);
    $stmt_verifica->execute();
    $result = $stmt_verifica->get_result();

    if ($result->num_rows > 0) {
        // Já existe um registro, então não faz a inserção
        header("Location: ../../pages/denuncia/visualizardenunciaadm.php?id_denuncia=" . $id_denuncia);
    } else {
        // Obter a data atual
        $data_visu = date('Y-m-d');

        // Inserir na tabela `recebe`
        $sql_insert = "INSERT INTO recebe (data_visu, id_denuncia_fk, id_fk) VALUES (?, ?, ?)";
        $stmt_insert = $mysqli->prepare($sql_insert);
        $stmt_insert->bind_param('sii', $data_visu, $id_denuncia, $id_administrador);

        if ($stmt_insert->execute()) {
            // Redirecionar para a página de visualização da denúncia
            header("Location: ../../pages/denuncia/visualizardenunciaadm.php?id_denuncia=" . $id_denuncia);
            exit();
        } else {
            echo "Erro ao registrar visualização: " . $stmt_insert->error;
        }

        $stmt_insert->close();
    }

    $stmt_verifica->close();
    desconecta();
} else {
    echo "ID da denúncia não fornecido.";
}
?>
