<?php

require_once("../../config/conecta.php");

// Conectar ao banco de dados
conecta();

$sql = "SELECT * FROM informacoes ORDER BY id_info DESC";
$result = $mysqli->query($sql);

if ($result) {
    // Verificar se existem registros
    if ($result->num_rows > 0) {
        $listaNoticias = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        echo "Nenhuma notícia encontrada no banco de dados.";
    }
} else {
    echo "Erro na consulta SQL: " . $mysqli->error;
}


?>
