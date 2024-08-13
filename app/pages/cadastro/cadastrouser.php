

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/principal.css"> -->
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/cadastro.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>cadastro | PRESERVIO</title>
</head>
<body>
<?php
require_once("../geral/cabecalho.php");
?>



<main>
    <div class="container">
        <div class="left-side">
        </div>
        <div class="right-side">
            <h2>Cadastre-se</h2>
            <form action="../../actions/usuario/inserirusuario.php" name="cadusuario" method="post">
                <div class="form-group">
                    <input type="text" name="nome" id="nome2" placeholder="Insira seu nome" required>
                    <input type="text" name="sobrenome" id="sobrenome2"  placeholder="Insira seu sobrenome" required>
                </div>


                <div class="form-group">
                    <input type="date" name="data" id="datanasc2" placeholder="Insira sua data de nascimento" required>
                    <input type="email" name="email" placeholder="Insira seu email" required>
                </div>

                <div class="form-group">
                    <input type="password" name="senha" id="senha" placeholder="Insira sua senha" required>
                </div>
                <div class="form-group">
                    <input type="password" name="senhaconfirm" id="senha" placeholder="Insira novamente a sua senha" required>
                </div>

                <div id='botão'>
                <div class="terms">
                    <p>Ao clicar em "Criar conta", você aceita os Termos de Uso e Política de Privacidade.</p>
                </div>

                <button type="submit" class="adobotao">CRIAR CONTA</button>
            </div>
            </form>
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

<script src="../../../public/js/cabeçalho.js"></script>


<?php
// Isso só renderiza o JavaScript se houver uma mensagem na URL
if (isset($_GET['msg'])) {
    $msg = htmlspecialchars($_GET['msg']);
    // Usamos `window.onload` para garantir que o alerta só será mostrado após o carregamento completo da página.
    echo "<script type='text/javascript'>
            window.onload = function() {
                setTimeout(function() {
                    alert('$msg');
                }, 0);
            }
          </script>";
}
?>


<script type="text/javascript">
        function validarSenha() {
            var senha = document.getElementById('senha').value;
            var confirmarSenha = document.getElementById('confirmar_senha').value;
            
            if (senha !== confirmarSenha) {
                alert("As senhas não coincidem.");
                return false; // Impede o envio do formulário
            }
            return true; // Permite o envio do formulário
        }
    </script>



</body>
</html>
