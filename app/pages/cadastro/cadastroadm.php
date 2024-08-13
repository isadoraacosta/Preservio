

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/cadastro.css">
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>Início | PRESERVIO</title>
</head>
<body>

<?php
require_once("../geral/cabecalhoADM.php");
?>


    <main>
        <div class="container">
            <div class="left-side">
            </div>
            <div class="right-side">
                <h2 id="tituloadm">Registre um novo administrador</h2>
                <form action="../../actions/administrador/inseriradm.php" name="cadadm" method="post"  onsubmit="return validarFormulario();">
                    <div class="form-group">
                        <input type="text" name="nome" id="nome" placeholder="Insira seu nome" required>
                        <input type="text" name="sobrenome" id="sobrenome"  placeholder="Insira seu sobrenome" required>
                    </div>
    
                    <div class="form-group">
                        <input type="date" name="data" id="datanasc" placeholder="Insira sua data de nascimento" required>
                        <input type="text" name="cpf" id="cpf" placeholder="Insira seu CPF, somente números" pattern="\d{11}" maxlength="11" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Insira seu email" required>
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



<script type="text/javascript">
    function validarCPF(cpf) {
        // Remove caracteres não numéricos
        cpf = cpf.replace(/[^\d]/g, '');

        // Verifica se o CPF tem 11 dígitos
        if (cpf.length !== 11) {
            return false;
        }

        // Verifica se todos os dígitos são iguais (ex: 11111111111)
        if (/^(\d)\1{10}$/.test(cpf)) {
            return false;
        }

        // Calcula e valida os dígitos verificadores
        function calcularDigito(cpf, peso) {
            let soma = 0;
            for (let i = 0; i < peso; i++) {
                soma += cpf[i] * (peso + 1 - i);
            }
            let resto = (soma * 10) % 11;
            return resto === 10 ? 0 : resto;
        }

        let digito1 = calcularDigito(cpf, 9);
        let digito2 = calcularDigito(cpf, 10);

        return digito1 === parseInt(cpf[9]) && digito2 === parseInt(cpf[10]);
    }

    function validarFormulario() {
        let cpf = document.getElementById('cpf').value;
        if (!validarCPF(cpf)) {
            alert('CPF inválido.');
            return false;
        }
        return true;
    }
</script>


</body>
</html>

