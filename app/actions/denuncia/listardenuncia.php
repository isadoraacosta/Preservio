<?php
require_once("../../config/conecta.php");


conecta();

// Verifica se o ID da denúncia foi passado pela URL
if (isset($_GET['id_denuncia']) && is_numeric($_GET['id_denuncia'])) {
    $id_denuncia = (int) $_GET['id_denuncia'];

    // Primeira consulta para obter os detalhes da denúncia e o id_fk
    $sql = "SELECT * FROM denuncia WHERE id_denuncia = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $id_denuncia);
    $stmt->execute();
    $result = $stmt->get_result();

    $denuncia = null;
    $usuario = null;
    
    if ($result && $result->num_rows > 0) {
        $denuncia = $result->fetch_assoc();

        // Obtém o id_fk (id do usuário) da denúncia
        $id_fk = $denuncia['id_fk'];

        // Segunda consulta para obter o nome e o e-mail do usuário
        $sql_usuario = "SELECT nome, email FROM usuario WHERE id = ?";
        $stmt_usuario = $mysqli->prepare($sql_usuario);
        $stmt_usuario->bind_param("i", $id_fk);
        $stmt_usuario->execute();
        $result_usuario = $stmt_usuario->get_result();

        if ($result_usuario && $result_usuario->num_rows > 0) {
            $usuario = $result_usuario->fetch_assoc();
        } else {
            echo "<p>Usuário não encontrado.</p>";
        }

        $stmt_usuario->close();
    } else {
        echo "<p>Denúncia não encontrada.</p>";
    }

    $stmt->close();
} else {
    echo "<p>ID da denúncia inválido ou não fornecido.</p>";
}

desconecta();
?>
