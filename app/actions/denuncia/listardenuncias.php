<?php

require_once("../../config/conecta.php");

conecta();

$sql = "SELECT id_denuncia, imagem, status_denuncia, data_d, hora_d, assunto, local_crime, descricao FROM denuncia ORDER BY data_d DESC, id_denuncia DESC;";
$result = $mysqli->query($sql);

$sql1 = "SELECT descricao FROM tipo_denuncia;";
$result1 = $mysqli->query($sql1);

if($result->num_rows > 0 && $result1->num_rows > 0){
    $listaDenuncias = $result->fetch_all(MYSQLI_ASSOC);
    $listaTipos = $result1->fetch_all(MYSQLI_ASSOC);
} else {
    $listaDenuncias = [];
    $listaTipos = [];
}

desconecta();

?>
