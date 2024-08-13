
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/login.css">
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>Início | PRESERVIO</title>
</head>
<body>
<?php
require_once("../geral/cabecalho.php");
?>



    <main>

        <div id="divprincipal">

        <h2>Login</h2>
        <br>

        <form action="../../actions/usuario/verificaloginuser.php" name="loginuse" method="post">
            <fieldset>
                <label for="login">Usuário:</label> <br>
                <div class="icone">
                    <i class="fa-regular fa-circle-user"></i>
                    <input type="email" name="email" id="emailuse" placeholder="Insira seu email" required> 
                    <br> 
                </div>
                <label for="senha">Senha:</label> <br>
                <div class="icone">
                    <i class="fa-solid fa-lock"></i>
                <input type="password" name="senha" id="senhause" placeholder="Insira sua senha" required>
                <br>
            </div>
            <div id="botao5">
            <button class="button" type="submit" id="bt-login" >ENTRAR</button>
        </div>
            </fieldset>
        </form>
        <br>
        <div id="linkslogin2">
            <p class="linkslogin3">Não possui uma conta? <a class="linkslogin" href="../cadastro/cadastrouser.php">Cadastre-se!</a></p>
           
        </div>
        
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

