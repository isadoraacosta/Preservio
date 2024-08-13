<?php
// Conecte ao banco de dados
require_once("../../config/conecta.php");

conecta();

// Verifica se o ID da notícia foi passado pela URL
if (isset($_GET['id_noticia']) && is_numeric($_GET['id_noticia'])) {
    $id_noticia = (int) $_GET['id_noticia'];

    // Consulta para buscar a notícia com base no ID
    $sql = "SELECT * FROM informacoes WHERE id_info = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $id_noticia);
    $stmt->execute();
    $result = $stmt->get_result();

    $noticia = null;
    if ($result && $result->num_rows > 0) {
        // Obtemos os dados da notícia
        $noticia = $result->fetch_assoc();
    } else {
        echo "<p>Notícia não encontrada.</p>";
    }

    $stmt->close();
} else {
    echo "<p>ID da notícia inválido ou não fornecido.</p>";
}

desconecta();
?>