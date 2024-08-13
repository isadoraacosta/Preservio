<?php
require_once('../geral/cabecalhoADM.php');
require_once("../../config/conecta.php");

conecta();

$id_denuncia = isset($_GET['id_denuncia']) && is_numeric($_GET['id_denuncia']) ? (int) $_GET['id_denuncia'] : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto'];
    $id_denuncia = $_POST['id_denuncia'];
    $id_fk = 1; // ID do administrador (você pode pegar da sessão)

    if (!empty($texto) && $id_denuncia) {
        $sql_insert = "INSERT INTO retorno (descricao, id_fk, id_denuncia_fk) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($sql_insert);
        $stmt->bind_param("sii", $texto, $id_fk, $id_denuncia);
        if ($stmt->execute()) {
            // Atualizar o status da denúncia para 'Respondida'
            $sql_update = "UPDATE denuncia SET status_denuncia = 'Respondida' WHERE id_denuncia = ?";
            $stmt_update = $mysqli->prepare($sql_update);
            $stmt_update->bind_param("i", $id_denuncia);
            $stmt_update->execute();
            $stmt_update->close();

            // Redirecionar de volta para a tela 1
            header("Location: visualizardenunciaadm.php?id_denuncia=$id_denuncia");
            exit();
        } else {
            echo "<p>Erro ao enviar a resposta. Tente novamente.</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Preencha a resposta antes de enviar.</p>";
    }
}

desconecta();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/respostadenuncia.css">
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>Início | PRESERVIO</title>
</head>
<body>
<main>
    <div class="tudo">
        <h1 id="titulo">Envie sua resposta</h1>
        <p>Registre o que ocorreu após a denúncia prestada! É de suma importância o usuário ter resposta, para que assim possa ter certeza de que algo foi feito.</p>
        <form name="resposta" action="respostadenuncia.php?id_denuncia=<?php echo $id_denuncia; ?>" method="post">
            <input type="hidden" name="id_denuncia" value="<?php echo $id_denuncia; ?>">
            <fieldset>
                <label for="texto"></label>
                <div class="icone">
                    <textarea name="texto" cols="60%" rows="13px"></textarea>
                </div>
            </fieldset>
            <div class="botao">
                <button type="submit" class="button">Enviar</button>
            </div>
        </form>
    </div>
</main>
<footer>
    <!-- Conteúdo do rodapé -->
</footer>
</body>
</html>
