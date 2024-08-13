<?php
require_once("../../config/conecta.php");


function verificarEmailadm($email){
    conecta();

    global $mysqli;

    $sql = "SELECT email FROM administrador WHERE email = ?;";
    $stmt = $mysqli->prepare($sql);

    if(!$stmt){
        die("Erro.");
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $retorno = $stmt->get_result();

    if($retorno->num_rows == 1){
        return true;
    }else{
        return false;
    }
}





function verificarEmailuser($email){
    conecta();

    global $mysqli;

    $sql = "SELECT email FROM usuario WHERE email = ?;";
    $stmt = $mysqli->prepare($sql);

    if(!$stmt){
        die("Erro.");
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $retorno = $stmt->get_result();

    if($retorno->num_rows == 1){
        return true;
    }else{
        return false;
    }
}






function verificarCPF($cpf){
    conecta();

    global $mysqli;

    $sql = "SELECT cpf FROM administrador WHERE cpf = ?;";
    $stmt = $mysqli->prepare($sql);

    if(!$stmt){
        die("Erro.");
    }
    $stmt->bind_param("s", $cpf);
    $stmt->execute();

    $retorno = $stmt->get_result();

    if($retorno->num_rows == 1){
        return true;
    }else{
        return false;
    }
}







// Função para calcular o dígito verificador
function (){
    function calcularDigito($cpf, $peso) {
        $soma = 0;
        for ($i = 0; $i < $peso; $i++) {
            $soma += $cpf[$i] * ($peso + 1 - $i);
        }
        $resto = ($soma * 10) % 11;
        return $resto === 10 ? 0 : $resto;
    }

    // Função para validar o CPF
    function validarCPF($cpf) {
        // Remove caracteres não numéricos
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        // Verifica se o CPF tem 11 dígitos
        if (strlen($cpf) !== 11) {
            return false;
        }

        // Verifica se todos os dígitos são iguais
        if (preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }

        // Calcula e valida os dígitos verificadores
        $digito1 = calcularDigito($cpf, 9);
        $digito2 = calcularDigito($cpf, 10);

        return $digito1 === (int)$cpf[9] && $digito2 === (int)$cpf[10];
    }

    // No processamento do formulário
    if (empty($_POST['cpf']) || !validarCPF($_POST['cpf'])) {
        $msg = "CPF inválido.";
        // Lidar com o erro, como redirecionar ou exibir uma mensagem
        header("Location: ../../pages/cadastro/cadastroadm.php?msg={$msg}");
        exit();
    }

}

?>
