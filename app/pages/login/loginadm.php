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

            <h2>Login de Administrador</h2>
            <br>
    
            <h3>Esta área é exclusivamente de uso interno da Secretaria do Meio Ambiente. Portanto, só funcionarios da Secretaria do Meio Ambiente ou parceiros credenciados têm permissão para acessá-la.</h3> 
            <br>

        <form action="../../actions/administrador/verificaloginadm.php" name="loginadm" method="post">
            <fieldset>
                <label for="login">Usuário:</label> <br>
                <div class="icone">
                    <i class="fa-regular fa-circle-user"></i>
                    
                    <input type="email" name="emailadm" id="emailadm" placeholder="Insira seu email" required> 
                    <br> 
                </div>
                <label for="senha">Senha:</label> <br>
                <div class="icone">
                    <i class="fa-solid fa-lock"></i>
                <input type="password" name="senhaadm" id="senhaadm" placeholder="Insira sua senha" required>
                <br>
            </div>
            <div id="botao5">
            <button class="button" type="submit" id="bt-login" >ENTRAR</button>
        </div>
            </fieldset>
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
<script>
        
    /*    var bt_login =document.querySelector("#bt-login");

        bt_login.addEventListener("click", function(){
            window.location.href = "principaladm.php";

        });*/

    </script>
    
</body>
</html>

