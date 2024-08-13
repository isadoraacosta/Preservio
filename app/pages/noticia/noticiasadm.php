

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/noticias.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>Início | PRESERVIO</title>
</head>
<body>
<?php
require_once("../geral/cabecalhoAdm.php");
require_once('../../actions/informacao/listarnoticias.php');
?>


<body>
    <main>
    <div class="cabecalho">
        <h2>Notícias</h2>
        <hr>
    <div class="filtro">
        <form action="#" method="post" name="filtro"></form>
        <input type="text" id="titulo" name="titulo" placeholder="Título">
        <input type="date" id="data" name="data" placeholder="Data de publicação">
        <input type="text" id="categoria" name="categoria" placeholder="Categoria">
        <input class="botao" type="submit" value="Filtrar">
        </form>
    </div>
    </div>
  
    <div id="org">

            <?php
                if (!empty($listaNoticias)) {
                    foreach($listaNoticias as $noticia) {
                        echo '<div id="noticias">';
                        $data = DateTime::createFromFormat('Y-m-d', $noticia['data_postagem'])->format('d/m/Y');
                        echo '<div>';
                        echo "<p>{$data}</p>";
                        echo "<h3>{$noticia['titulo']}</h3>";
                        echo "<p>{$noticia['descricao']}</p>";
                        echo "<a href='noticiaadm.php?id_noticia={$noticia['id_info']}'>Ver mais</a>";
                        echo '</div>';
                        echo '<div >';
                        echo '<img src="../../../public/img/noticia/' . $noticia['imagem'] . '" alt="Imagem não encontrada">'; // Substitua "img/noticia1.jpg" pelo caminho real da imagem
                        echo '</div>';
                        echo '</div>';
                        echo '<hr>';
                    }
                } else {
                    echo "<p>Nenhuma notícia encontrada.</p>";
                }

            ?>
            
    </div>
<div class="navegacao">
    <a href="noticiasadm.php">1</a>
    <a href="noticiasadm.php">2</a>
    <a href="noticiasadm.php">3</a>
</div>

<div>
    <button class="inserir" onclick="window.location.href='publinformacao.php';" >
        <i class="fa-solid fa-pen" id="icone"></i>
    </button>
</div>
</main>

<script>
    // evento p qnd houver rolagem da pagina
    window.addEventListener('scroll', function(){
        var button = document.querySelector('.inserir');
        var footer = document.querySelector('footer');
        // obtenção da posicao do footer em relacao a janela do navegador
        var rodape = footer.getBoundingClientRect();
        // obtenção da altura da janela do navegador
        var alturaJanela = window.innerHeight;

        // ve se o footer ta visivel
        if(rodape.top < alturaJanela){
            // se tiver visivel adiciona a class visivel
            button.classList.add('visivel');
        } else{
            button.classList.remove('visivel');
        }
    });
</script>


<footer>
    <div>
        <p>Secretaria Municipal de Meio Ambiente <br> Bom Jesus da Lapa - Ba. <br>(77) 3481-7475</p>
    </div>


    <div>
        <p>Acompanhe a Secretaria</p>
        <div id="linksredes">
        <a href=""><i class="fa-brands fa-facebook iroda"></i></a>
        <a href=""><i class="fa-brands fa-instagram iroda"></i></a>
        <a href=""><i class="fa-solid fa-location-dot iroda"></i></a>
        <a href=""><i class="fa-brands fa-twitter iroda"></i></a>
    </div>


    </div>
    <div id = 'divsobre'>
        <p> <i class="fa-solid fa-circle-info"></i> Sobre o Preservio <br> Um software desenvolvido para promover <br> a sustentabilidade ambiental</p>
</div>


</footer>
</body>
</html>