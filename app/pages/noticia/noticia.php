
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/noticia.css">
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>Início | PRESERVIO</title>
</head>
<body>
<?php
require_once("../geral/cabecalho.php");
require_once('../../actions/informacao/listarnoticia.php')
?>

<main>
    <div class="container">
        <?php if ($noticia): ?>
            <h1><?php echo htmlspecialchars($noticia['titulo'], ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?php echo nl2br(htmlspecialchars($noticia['descricao'], ENT_QUOTES, 'UTF-8')); ?></p>

            <a href="#!"><img class="img" src="../../../public/img/noticia/<?php echo htmlspecialchars($noticia['imagem'], ENT_QUOTES, 'UTF-8'); ?>" alt="Imagem da notícia" /></a>
            <span class="legenda"><?php echo htmlspecialchars($noticia['legenda_imagem'], ENT_QUOTES, 'UTF-8'); ?></span>

            <p class="escritor">Escrito por: <?php echo htmlspecialchars($noticia['autor'], ENT_QUOTES, 'UTF-8'); ?><br>
                Escritora oficial Preservio</p>
        <?php else: ?>
            <p>Nenhuma notícia encontrada.</p>
        <?php endif; ?>
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

    <div id="divsobre">
        <p><i class="fa-solid fa-circle-info"></i> Sobre o Preservio <br> Um software desenvolvido para promover <br> a sustentabilidade ambiental</p>
    </div>
</footer>

<script src="js/cabeçalho.js"></script>

</body>
</html>