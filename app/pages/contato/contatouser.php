

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/principal.css"> -->
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/contato.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>cadastro | PRESERVIO</title>
</head>
<body>
<?php
require_once("../geral/cabecalhouser.php");
?>


<main>
    <div class="container">
        <h1>Contato</h1>
        <div class="contact-message">
        Se você tiver qualquer dúvida ou precisar de assistência, não hesite em nos contatar. Nossa equipe está disponível para ajudá-lo da melhor forma possível. Envie um e-mail para: projetobiosystem@gmail.com e responderemos prontamente. <a href="mailto:tanana@example.com" class="email">projetobiosystem@gmail.com</a>
        </div>
        <div class="faq">
        <h2>Perguntas Frequentes</h2>

<div class="faq-item" onclick="toggleAnswer(this)">
    <strong>Pergunta 1:</strong> Como posso criar uma conta?
    <span class="toggle-icon">▼</span>
    <div class="faq-answer">
        Para criar uma conta, clique no botão "Cadastrar" na tela de realizar login e siga as instruções.
    </div>
</div>

<div class="faq-item" onclick="toggleAnswer(this)">
    <strong>Pergunta 2:</strong> Onde posso registrar uma denúncia?
    <span class="toggle-icon">▼</span>
    <div class="faq-answer">
        Para realizar uma denúncia acesse o cabeçalho e clique em "Denuncie".
    </div>
</div>

<div class="faq-item" onclick="toggleAnswer(this)">
    <strong>Pergunta 3:</strong> Como posso entrar em contato com o suporte técnico?
    <span class="toggle-icon">▼</span>
    <div class="faq-answer">
        Você pode entrar em contato com o suporte técnico enviando um e-mail para <a href="mailto:projetobiosystem@gmail.com" class="email">projetobiosystem@gmail.com</a>.
    </div>
</div>
</div>
</div>

    <script>
        function toggleAnswer(element) {
            element.classList.toggle("active");
        }
    </script>

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
    
    
    
</body>
</html>
