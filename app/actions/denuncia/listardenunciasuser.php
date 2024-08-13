<?php

require_once("../../config/conecta.php");

    conecta();


    session_start();
    global $mysqli;
    
    // Verifica se o ID do usuário está na sessão
    if (!isset($_SESSION['usuario'])) {
        echo "Erro: Usuário não autenticado.";
        return;
    }

    // Obtém o ID do usuário da sessão
    $idUsuario = $_SESSION['usuario'];

    // Consulta SQL para obter as denúncias do usuário
    $sqlDenuncias = "SELECT id_denuncia, assunto, data_d, id_tipo_fk 
                     FROM denuncia 
                     WHERE id_fk = ?";
                     
    // Prepara a consulta
    $stmtDenuncias = $mysqli->prepare($sqlDenuncias);
    $stmtDenuncias->bind_param("i", $idUsuario);

    // Executa a consulta
    $stmtDenuncias->execute();
    $resultadoDenuncias = $stmtDenuncias->get_result();

    // Inicializa as listas de denúncias e tipos
    $listaDenuncias = [];
    $listaTipos = [];

    // Processa os resultados das denúncias
    while ($rowDenuncia = $resultadoDenuncias->fetch_assoc()) {
        $listaDenuncias[] = $rowDenuncia;

        // Consulta SQL para obter a descrição do tipo de denúncia
        $sqlTipo = "SELECT descricao FROM tipo_denuncia WHERE id_tipo = ?";
        $stmtTipo = $mysqli->prepare($sqlTipo);
        $stmtTipo->bind_param("i", $rowDenuncia['id_tipo_fk']);

        // Executa a consulta do tipo de denúncia
        $stmtTipo->execute();
        $resultadoTipo = $stmtTipo->get_result();
        $rowTipo = $resultadoTipo->fetch_assoc();

        // Adiciona a descrição do tipo de denúncia à lista
        $listaTipos[] = $rowTipo;

        // Fecha a consulta do tipo de denúncia
        $stmtTipo->close();
    }

    // Fecha a consulta das denúncias
    $stmtDenuncias->close();

    // Retorna as listas para serem usadas no HTML
   
    desconecta();




?>
