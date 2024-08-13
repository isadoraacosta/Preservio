
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/principal.css">
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
    <div id="carrossel" >
        <div class="slideshow-container">
            <a href="../noticia/noticiaadm.php">
              <img src="../../../public/img/slide11.png" alt="Slide 1">
            </a>
            <a href="../noticia/noticiaadm.php">
              <img src="../../../public/img/slide22.png" alt="Slide 2">
            </a>
            <a href="../noticia/noticiaadm.php">
              <img src="../../../public/img/slide33.png" alt="Slide 3">
            </a>
            <a href="../noticia/noticiaadm.php">
              <img src="../../../public/img/slide44.png" alt="Slide 4">
            </a>
         
            <div class="dots">
        <!-- <span> é uma tag HTML utilizada para agrupar e estilizar partes específicas de um texto dentro de um elemento maior. Ele é um elemento de linha e não possui nenhum significado semântico específico, ou seja, é apenas uma caixa genérica para estilização e manipulação de texto -->
            <!-- o evento onclick fala que quando a for clicado vai chamar a função com o indice do slide correspondente    -->
            <span class="dot" onclick="atualSlide(0)"></span>
              <span class="dot" onclick="atualSlide(1)"></span>
              <span class="dot" onclick="atualSlide(2)"></span>
              <span class="dot" onclick="atualSlide(3)"></span>
            </div>
        </div>
    </div>


    <div >
        <h2 class="titulo titulo1">POR QUE PRESERVAR O MEIO AMBIENTE?</h2>
        <div id ="div1">
            <div class="conteud1">
                <i class="fa-solid fa-earth-asia iconeimp" style="color: #1F6031;"></i>
            <h3 class="subtitulo subimp">3 bilhões</h3>
            <p class="paragrafo">de pessoas no mundo vivem em lugares vulneráveis à crise climática</p>
            <p class="fonte">Fonte: IPCC</p>
        </div>
        <div class="conteud1">
            <i class="fa-solid fa-faucet-drip iconeimp" style="color: #1F6031;"></i>
            <h3 class="subtitulo subimp">25%</h3>
            <p class="paragrafo">dos municípios brasileiros distribuem água com resíduos de agrotóxicos para seus moradores</p>
            <p class="fonte">Fonte: Ministério da Saúde</p>
        </div>
        <div class="conteud1">
            <i class="fa-solid fa-tree iconeimp" style="color: #1F6031;"></i>
            <h3 class="subtitulo subimp">40 mil</h3>
            <p class="paragrafo">casos de intoxicação aguda por agrotóxicos foram registrados entre 2007 e 2017 no Brasil</p>
            <p class="fonte">Fonte: Ministério da Saúde</p>
        </div>
        </div>
    </div>



    <div id="div2">
        <iframe width="140px" height="50" src="https://www.youtube.com/embed/Edczwt571k8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div id="importancia">
            <h2 class=" titulo titulo-importancia" >Qual a importância de <a id="prestar" href="#">prestar denúncia?</a></h2>
            <p class="conteudo-importancia paragrafo">Prestar denúncia é fundamental para proteger o meio ambiente, promover responsabilidade e impulsionar práticas sustentáveis. Contribuir com denúncias é uma ação impactante para garantir um futuro mais verde e equilibrado.</p>
        </div>
    </div>


    <div id="botaodenuncia">
        <h2 class=" subtitulo">Faça uma denúncia!</h2>
        <a href="#">CLIQUE AQUI</a>
    </div>


    <div id="sobre1">
        <img id="imgsobre1" src="../../../public/img/Capturar.PNG" alt="">
        <div id="branco"></div>
        <div id="verde">
        <h2 class="titulo">SOBRE A SECRETARIA DO MEIO AMBIENTE</h2>
        <p class="paragrafo">A secretaria do meio ambiente é tão importante quanto as demais secretarias que fazem parte do órgão público, ela é responsável pela proteção, conservação e recuperação dos recursos naturais também tem por finalidade fiscalizar e garantir que as leis ambientais sejam cumpridas.</p>
        </div>
    </div>


    <div id="sobre2">
        <h2 class="titulo1 titulo">SOBRE NÓS</h2>
        <p class="paragrafo psobre">O projeto por nome Preservio trata sobre a preservação do meio ambiente, visando a  sustentabilidade da fauna e flora e de como podemos cuidar das mesmas. Devido o crescente desinteresse da sociedade em relação a questões associadas à preservação do biossistema foi criado este site com  o intuito de conscientizar e instruir a populaçãoa sobre esta  causa  e conceder aos usuários este espaço para prestaram suas denúncias, relacionadas aos malefícios contra o ecossistema tornando assim o meio ambiente um lugar mais sustentável.</p>
       
     
        <div class="container">
            <div class="block">
                <div class="autor">
                    <img src="../../../public/img/nos/isadora.jpg" alt="">
                </div>
                <div class="text">
                    <h2>Autora</h2>
                    <h1>Isadora Costa Nascimento</h1>
                    <p>Isadora Costa Nascimento nasceu em 23 de janeiro de 2006 no município de Carinhanha, Bahia. Realizou o ensino médio integrado ao curso Técnico em Informática no Instituto Federal de Educação Ciência e Tecnologia Baiano — Campus Bom Jesus da Lapa.</p>
                </div>
            </div>
            <hr class="linha">
    
            <div class="block">
                <div class="text">
                    <h2>Autora</h2>
                    <h1>Maria Eduarda Dourado Sodré</h1>
                    <p>Maria Eduarda Dourado Sodré nasceu em 26 de maio de 2006 no município de Bom Jesus da Lapa, Bahia. Realizou o ensino médio integrado ao curso Técnico em Informática no Instituto Federal de Educação Ciência e Tecnologia Baiano — Campus Bom Jesus da Lapa.</p>
                </div>
                <div class="autor">
                    <img src="../../../public/img/nos/maria.jpg" alt="">
                </div>
            </div>
            <hr class="linha">
    
            <div class="block">
                <div class="autor">
                    <img src="../../../public/img/nos/mariana.jpg" alt="">
                </div>
                <div class="text">
                    <h2>Autora</h2>
                    <h1>Mariana Pereira Silva</h1>
                    <p>Mariana Pereira Silva nasceu em 03 de outubro de 2005 no município de Carinhanha, Bahia. Realizou o ensino médio integrado ao curso Técnico em Informática no Instituto Federal de Educação Ciência e Tecnologia Baiano — Campus Bom Jesus da Lapa.</p>
                </div>
            </div>
            <hr class="linha">
        
            <div class="block">
                <div class="text">
                    <h2>Autora</h2>
                    <h1>Nathalia Helen Oliveira Leite</h1>
                    <p>Nathalia Helen Oliveira Leite nasceu em 04 de julho de 2006 no município de Bom Jesus da Lapa, Bahia. Realizou o ensino médio integrado ao curso Técnico em Informática no Instituto Federal de Educação Ciência e Tecnologia Baiano — Campus Bom Jesus da Lapa.</p>
                </div>
                <div class="autor">
                    <img src="../../../public/img/nos/nathalia.jpg" alt="">
                </div>
            </div>
            <hr class="linha">
            <div class="block">
                <div class="autor">
                    <img src="../../../public/img/nos/sofia.jpg" alt="">
                </div>
                <div class="text">
                    <h2>Autora</h2>
                    <h1>Sofia Rodrigues Gama</h1>
                    <p>Sofia Rodrigues Gama nasceu em 24 de setembro de 2005 na zona leste, cidade de São Paulo. Realizou o ensino médio integrado ao curso Técnico em Informática no Instituto Federal de Educação Ciência e Tecnologia Baiano — Campus Bom Jesus da Lapa.</p>
                </div>
            </div>
        </div>
        <hr class="linha">
        </div>


</div>


        <div id="obj">
        <h3 class="subtitulo subcomp">Nossos <br> Compromissos</h3>
        <ul>
            <div >
                <li>Priorizamos a investigação urgente de denúncias ambientais recebidas pelo nosso site, comprometendo-nos a agir rapidamente com uma equipe especializada para punir os responsáveis.</li>
                <li>Implementamos práticas sustentáveis em todas as nossas operações, desde o uso eficiente de energia até a redução de resíduos.</li>
            </div>
            <div >
                <li>A educação é a chave para a construção de um futuro mais sustentável. Por isso, publicaremos materiais educativos sobre temas ambientais, como poluição, desmatamento e mudanças climáticas.</li>
                <li>A inovação é essencial para a proteção do meio ambiente. Portanto, realizaremos pesquisas e buscaremos desenvolver novas tecnologias e soluções ambientais.</li>
            </div>
        </ul>
       
        <div id="objetivos">
            <div class="objetivo">
                <div class="bloco linha1">
                    <h2>1</h2>
                    <p>VIDA NA ÁGUA</p>
                    <div class="foto cor1"><div class="foto2"><i class="fa-solid fa-water iconeobj"></i></div></div>
                </div>
               
                <div class="bloco linha1">
                    <h2>2</h2>
                    <p>AÇÃO CONTRA A MUDANÇA GLOBAL DO CLIMA</p>
                    <div class="foto cor2"><div class="foto2"><i class="fa-solid fa-volcano iconeobj"></i></div></div>
                </div>
               
                <div class="bloco linha2">
                    <h2>3</h2>
                    <p>PROTEÇÃO A ECOSSISTEMAS</p>
                    <div class="foto cor3"><div class="foto2"><i class="fa-solid fa-tree-city iconeobj"></i></div></div>
                </div>
               
                <div class="bloco linha2">
                    <h2>4</h2>
                    <p>CONSUMO E PRODUÇÃO RESPONSÁVEIS</p>
                    <div class="foto cor4"><div class="foto2"><i class="fa-solid fa-industry iconeobj"></i></div></div>
                </div>
               
                <div class="bloco linha3">
                    <h2>5</h2>
                    <p>COMBATER AS MUDANÇAS CLIMÁTICAS</p>
                    <div class="foto cor5"><div class="foto2"><i class="fa-solid fa-cloud-rain iconeobj"></i></div></div>
                </div>
            </div>
            <div class="objetivo">
                <div class="bloco linha3">
                    <h2>6</h2>
                    <p>PROTEGER TERRAS E ÁGUAS</p>
                    <div class="foto cor6"><div class="foto2"><i class="fa-solid fa-earth-asia iconeobj"></i></div></div>
                </div>
                <div class="bloco linha4">
                    <h2>7</h2>
                    <p>CONSTRUIR CIDADES SAUDÁVEIS</p>
                    <div class= "foto cor7"><div class="foto2"><i class="fa-solid fa-tree iconeobj"></i></div></div>
                </div>
                <div class="bloco linha4">
                    <h2>8</h2>
                    <p>EDUCAR SOBRE A BIODIVERSIDADE</p>
                    <div class= "foto cor8" ><div class="foto2"><i class="fa-solid fa-otter iconeobj"></i></div></div>
                </div>
                <div class="bloco linha5">
                    <h2>9</h2>
                    <p>REDUZIR O DESPERDÍCIO DE RECURSOS</p>
                    <div class= "foto cor9" ><div class="foto2"><i class="fa-solid fa-trash-can iconeobj"></i></div></div>
                </div>
            </div>
            <div class="objetivo">
                <div class="bloco linha5">
                    <h2>10</h2>
                    <p>CONSERVAR ESPÉCIES AMEAÇADAS</p>
                    <div class="foto cor10"><div class="foto2"><i class="fa-solid fa-crow iconeobj"></i></div></div>
                </div>
                <div class="bloco linha6">
                    <h2>11</h2>
                    <p>FOMENTAR A RECICLAGEM E REUTILIZAÇÃO</p>
                    <div class="foto cor11"><div class="foto2"><i class="fa-solid fa-bottle-water iconeobj"></i></div></div>
                </div>
                <div class="bloco linha6">
                    <h2>12</h2>
                    <p>DIMINUIR A POLUIÇÃO DO AR E DA ÁGUA</p>
                    <div class="foto cor12"><div class="foto2"><i class="fa-solid fa-droplet iconeobj"></i></div></div>
                </div>
            </div>
        </div>
</div>


<div id="conjnoticias">
            <h2>Últimas notícias</h2>
            <div id="noticias">
                <?php
                require_once("../../config/conecta.php");
                conecta();

                // Selecionando as últimas notícias
                $sql = "SELECT * FROM informacoes ORDER BY data_postagem DESC LIMIT 4";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($noticia = $result->fetch_assoc()) {
                        echo '<div class="noticia">';
                        echo '<a href="../noticia/noticiaadm.php?id_noticia=' . $noticia['id_info'] . '">';
                        echo '<img src="../../../public/img/noticia/' . $noticia['imagem'] . '" alt="">';
                        echo '<h4>' . $noticia['titulo'] . '</h4> </a>';
                        echo '<p>' . substr($noticia['descricao'], 0, 100) . '...</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Nenhuma notícia encontrada.</p>';
                }

                desconecta();
                ?>
            </div>
            <a href="../noticia/noticiasadm.php" id="lermais"> Ler todas as notícias  ˃ </a>
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


<script src="../../../public/js/principal.js"> </script>


</body>
</html>