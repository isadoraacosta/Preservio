<?php
require_once("../../config/conecta.php");

function Imagem($imagem){
    $novonome = uniqid() . "_" . $imagem["name"]; /* SELECIONA O NOME DO ARQUIVO E CRIA UM ID ÚNICO PARA ELE */
    $diretorio = "../../../public/img/denuncia/"; /* SELECIONA O DIRETÓRIO ONDE SERÃO ARMAZENADAS AS IMAGENS */
    $arqImagem = $diretorio.$novonome; /* CONCATENA PARA CRIAR O CAMINHO PARA A IMAGEM */
    if (move_uploaded_file($imagem["tmp_name"], $arqImagem)) { /* ADICIONA A IMAGEM NO CAMINHO CRIADO */
        return $novonome; /* RETORNA O NOME DO ARQUIVO PARA SER SALVO NO BANCO */
    } else {
        return null; /* RETORNA NULL SE HOUVER FALHA NO UPLOAD */
    }
}
?>
