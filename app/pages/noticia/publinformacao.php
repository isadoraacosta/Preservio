<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/publinfor.css">
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>Início | PRESERVIO</title>
</head>
<body>
<?php
require_once('../geral/cabecalhoADM.php');
?>


<main>
    <div class="container">
        <h1>Publicação de Notícia</h1>
        <form action="../../actions/informacao/insertinfo.php" name="publi" method="post" enctype="multipart/form-data">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="tipo">Tipo da publicação:</label>
            <select class="formulario" name="tipo" required>
                            <option value="maus tratos aos animais">Maus tratos aos animais</option>
                            <option value="desmatamento">Poluição do Ar</option>
                            <option value="queimada">Queimadas ou Incêndios Florestais</option>
                            <option value="maus tratos aos animais">Desmatamento Ilegal</option>
                            <option value="desmatamento">Poluição de Recursos Hídricos</option>
                            <option value="queimada">Descarte Irregular de Resíduos Sólidos</option>
                            <option value="maus tratos aos animais">Construções e Ocupações Irregulares</option>
                            <option value="desmatamento">Caça e Pesca Ilegal</option>
                            <option value="queimada">Ruído e Poluição Sonora</option>

            </select>

            <label for="imagem">Imagem</label>
            <input type="file" id="anexo" name="anexo">

            <label for="titulo">Legenda da imagem</label>
            <input type="text" id="legenda" name="legenda">

            <label for="conteudo">Conteúdo</label>
            <textarea id="conteudo" name="conteudo" required></textarea>

            <label for="titulo">Autor(a)</label>
            <input type="text" id="autor" name="autor" required>

            <a href="#"><button type="submit">Publicar</button></a>

        </form>
    </div>
</main>

    
    
    <footer>
        <div>
            <p>Secretaria Municipal de Meio Ambiente <br> Bom Jesus da Lapa - Ba. <br>(77) 3481-7475</p>
        </div>
    
    
        <div>
            <p>Acompanhe a Secretaria</p>
            <div id="linksredes">
            <a href="#"><i class="fa-brands fa-facebook iroda"></i></a>
            <a href="#"><i class="fa-brands fa-instagram iroda"></i></a>
            <a href="#"><i class="fa-solid fa-location-dot iroda"></i></a>
            <a href="#"><i class="fa-brands fa-twitter iroda"></i></a>
        </div>
    
    
        </div>
        <div id = 'divsobre'>
            <p> <i class="fa-solid fa-circle-info"></i> Sobre o Preservio <br> Um software desenvolvido para promover <br> a sustentabilidade ambiental</p>
    </div>
    
    
    </footer>
    
    
    <script src="js/cabeçalho.js"></script>
    
    
    </body>
    </html>
    
    
    
    
    