<?php



require_once('../geral/cabecalhoADM.php');
require_once("../../config/conecta.php");
require_once("../../config/validação.php");
require_once("../../actions/administrador/sessoes.php");

conecta();

global $mysqli;

$id= $_SESSION['login']; 
$sql = "SELECT nome, sobrenome, data_nasc, cpf, email, senha FROM administrador WHERE email = ?;";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Nenhum usuário encontrado.";
}

$stmt->close();
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/visualizarperfil.css">
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>Editar Perfil | PRESERVIO</title>
</head>
<body>
<?php
require_once('../geral/cabecalhoADM.php');
?>

<main>
    <div class="perfil">
    <i class="fa-regular fa-user" style="font-size: 70px;  border-radius: 50%;
    border: 4px solid #1f6031; padding:40px 50px; color:#1f6031;"></i>
        <h2>Olá, <?php echo htmlspecialchars($user['nome']); ?>!</h2>
        <p>Visualize as informações da sua conta e altere-as, se necessário.</p>
    </div>

    <form action="../../actions/administrador/atualizarperfiladm.php" class="informacoes" name="cadadm" method="post">
        <h3>Dados pessoais</h3>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($user['nome']); ?>">
        
        <label for="sobrenome">Sobrenome</label>
        <input type="text" id="sobrenome" name="sobrenome" value="<?php echo htmlspecialchars($user['sobrenome']); ?>">
        
        <label for="dataNascimento">Data de nascimento</label>
        <input type="date" id="dataNascimento" name="dataNascimento" value="<?php echo htmlspecialchars($user['data_nasc']); ?>">
        
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($user['cpf']); ?>">
        
        <h3>Dados de acesso</h3>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>">
        
        <div id="buted">
            <button type="submit" id="saveButton">Salvar</button>
        </div>
    </form>
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
    <div id='divsobre'>
        <p><i class="fa-solid fa-circle-info"></i> Sobre o Preservio <br> Um software desenvolvido para promover <br> a sustentabilidade ambiental</p>
    </div>
</footer>

<script src="js/cabecalho.js"></script>
</body>
</html>
