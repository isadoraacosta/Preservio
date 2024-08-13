<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/visualizardenuncia.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>Início | PRESERVIO</title>
</head>
<body>
<?php
require_once('../geral/cabecalhoADM.php');
require_once("../../config/conecta.php");

conecta();

$id_denuncia = isset($_GET['id_denuncia']) && is_numeric($_GET['id_denuncia']) ? (int) $_GET['id_denuncia'] : null;

if ($id_denuncia) {
    // Primeira consulta: detalhes da denúncia
    $sql = "SELECT * FROM denuncia WHERE id_denuncia = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $id_denuncia);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $denuncia = $result->fetch_assoc();
        
        // Verifica se a denúncia é anônima ou não
        if (!empty($denuncia['id_fk'])) {
            // Segunda consulta: informações do usuário, se não for anônima
            $sql_usuario = "SELECT nome, email FROM usuario WHERE id = ?";
            $stmt_usuario = $mysqli->prepare($sql_usuario);
            $stmt_usuario->bind_param("i", $denuncia['id_fk']);
            $stmt_usuario->execute();
            $result_usuario = $stmt_usuario->get_result();
            $usuario = $result_usuario->fetch_assoc();
            $stmt_usuario->close();
        } else {
            $usuario = null; // Indica que é uma denúncia anônima
        }
        
        // Terceira consulta: tipo de denúncia
        $sql_tipo = "SELECT descricao FROM tipo_denuncia WHERE id_tipo = ?";
        $stmt_tipo = $mysqli->prepare($sql_tipo);
        $stmt_tipo->bind_param("i", $denuncia['id_tipo_fk']);
        $stmt_tipo->execute();
        $result_tipo = $stmt_tipo->get_result();
        $tipo_denuncia = $result_tipo->fetch_assoc();
        $stmt_tipo->close();
        
        // Quarta consulta: detalhes da revisão (data) na tabela `recebe`
        $sql_recebe = "SELECT data_visu FROM recebe WHERE id_denuncia_fk = ?";
        $stmt_recebe = $mysqli->prepare($sql_recebe);
        $stmt_recebe->bind_param("i", $id_denuncia);
        $stmt_recebe->execute();
        $result_recebe = $stmt_recebe->get_result();
        $revisao = $result_recebe->fetch_assoc();
        $stmt_recebe->close();
        
    } else {
        $denuncia = null;
        echo "<p>Denúncia não encontrada.</p>";
    }

    $stmt->close();
} else {
    echo "<p>ID da denúncia inválido ou não fornecido.</p>";
}

desconecta();
?>

<main>
  <div class="container">
    <?php if ($denuncia): ?>
    <div class="section">
      <h2>Informações da Denúncia</h2>
      <p><strong>ID da Denúncia:</strong> #<?php echo $denuncia['id_denuncia']; ?></p>
      <p><strong>Data da Denúncia:</strong> <?php echo date('d/m/Y', strtotime($denuncia['data_d'])); ?></p>
      <p><strong>Hora da Denúncia:</strong> <?php echo $denuncia['hora_d']; ?></p>
      <p><strong>Local da Denúncia:</strong> <?php echo $denuncia['local_crime']; ?></p>
    </div>
    <div class="section">
      <h2>Detalhes do Usuário</h2>
      <?php if ($usuario): ?>
        <p><strong>Nome do Usuário:</strong> <?php echo $usuario['nome']; ?></p>
        <p><strong>Email do Usuário:</strong> <?php echo $usuario['email']; ?></p>
      <?php else: ?>
        <p>Denúncia anônima</p>
      <?php endif; ?>
    </div>
    <div class="section">
      <h2>Detalhes da Denúncia</h2>
      <p><strong>Tipo de Denúncia:</strong> <?php echo $tipo_denuncia['descricao']; ?></p>
      <p><strong>Assunto da Denúncia:</strong> <?php echo $denuncia['assunto']; ?></p>
      <p><strong>Anexos:</strong></p>
      <ul>
        <?php if ($denuncia['imagem']): ?>
          <li><a href="../../../public/img/denuncia/<?php echo $denuncia['imagem']; ?>">Visualizar Anexo</a></li>
        <?php else: ?>
          <li>Nenhum anexo fornecido.</li>
        <?php endif; ?>
      </ul>
    </div>
    <div class="actions">
    <?php if ($denuncia['status_denuncia'] === 'Concluída'): ?>
        <button style="background-color: black;" disabled>Denúncia Resolvida</button>
    <?php else: ?>
        <form action="../../actions/denuncia/updatestatus.php" method="POST">
            <input type="hidden" name="id_denuncia" value="<?php echo $denuncia['id_denuncia']; ?>">
            <button id="resolverButton_<?php echo $denuncia['id_denuncia']; ?>" type="submit" onclick="marcarComoResolvida(<?php echo $denuncia['id_denuncia']; ?>)">Marcar como Resolvida</button>

        </form>
    <?php endif; ?>
    <a href="respostadenuncia.php?id_denuncia=<?php echo $denuncia['id_denuncia']; ?>">
    <button id="responderButton_<?php echo $denuncia['id_denuncia']; ?>" <?php echo $denuncia['status_denuncia'] === 'Respondida' ? 'disabled style="background-color: black;"' : ''; ?> onclick="responderDenuncia(<?php echo $denuncia['id_denuncia']; ?>)">
    Responder Denúncia</button>

    </a>
    <a href="denuncias.php"><button>Voltar à Lista de Denúncias</button></a>
</div>

    <div class="history">
      <h2>Últimas Ações</h2>
      <p><?php echo date('d/m/Y', strtotime($denuncia['data_recebida'])); ?> - Denúncia recebida</p>
      <?php if ($revisao): ?>
      <p><?php echo date('d/m/Y', strtotime($revisao['data_visu'])); ?> - Denúncia revisada pelo administrador</p>
      <?php else: ?>
      <p>Nenhuma revisão registrada.</p>
      <?php endif; ?>
    </div>
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
    <div id='divsobre'>
        <p><i class="fa-solid fa-circle-info"></i> Sobre o Preservio <br> Um software desenvolvido para promover <br> a sustentabilidade ambiental</p>
    </div>
</footer>

<script src="js/cabecalho.js"></script>



<script>
    function marcarComoResolvida(idDenuncia) {
        localStorage.setItem('denunciaResolvida_' + idDenuncia, 'true');
    }

    function responderDenuncia(idDenuncia) {
        localStorage.setItem('denunciaRespondida_' + idDenuncia, 'true');
    }

    window.onload = function() {
        var idDenuncia = <?php echo $denuncia['id_denuncia']; ?>;

        if (localStorage.getItem('denunciaResolvida_' + idDenuncia) === 'true') {
            var resolverButton = document.getElementById('resolverButton_' + idDenuncia);
            if (resolverButton) {
                resolverButton.disabled = true;
                resolverButton.innerText = 'Denúncia Resolvida';
                resolverButton.style.backgroundColor = 'black';
            }
        }

        if (localStorage.getItem('denunciaRespondida_' + idDenuncia) === 'true') {
            var responderButton = document.getElementById('responderButton_' + idDenuncia);
            if (responderButton) {
                responderButton.disabled = true;
                responderButton.innerText = 'Denúncia Respondida';
                responderButton.style.backgroundColor = 'black';
            }
        }
    }
</script>
</body>
</html>
