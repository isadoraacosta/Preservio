<?php
require_once("../../config/conecta.php");

conecta();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_denuncia = isset($_POST['id_denuncia']) && is_numeric($_POST['id_denuncia']) ? (int)$_POST['id_denuncia'] : null;

    if ($id_denuncia) {
        $sql = "UPDATE denuncia SET status_denuncia = 'Concluída' WHERE id_denuncia = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $id_denuncia);

        if ($stmt->execute()) {
            // Redireciona para a página de visualização da denúncia após a atualização
            header("Location: ../../pages/denuncia/visualizardenunciaadm.php?id_denuncia=$id_denuncia");
            exit();
        } else {
            echo "Erro ao atualizar o status da denúncia.";
        }

        $stmt->close();
    } else {
        echo "ID da denúncia inválido.";
    }
}

desconecta();
?>
