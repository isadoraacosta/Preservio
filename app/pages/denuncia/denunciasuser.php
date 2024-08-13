<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/denuncias.css">
    <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
    <link rel="stylesheet" href="../../../public/css/rodape.css">
    <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
    <title>Início | PRESERVIO</title>
    <script>
        function redirecionar() {
            window.location.href = "visualizardenunciaadm.php";
        }
    </script>
</head>
<body>
    <?php
    require_once('../geral/cabecalhouser.php');
    require_once("../../actions/denuncia/listardenunciasuser.php");
    ?>

    <main>
        <h2 id="titulod">Minhas Denúncias</h2>

      

        <?php     
        if(!isset($listaDenuncias) || empty($listaDenuncias)){
            echo "<p>Nenhum registro encontrado.</p>";
        } else {       
        ?>

        <table>
            <tr>
                <th>Código</th>
                <th>Tipo</th>
                <th>Assunto</th>
                <th>Data</th>
                <th>Visualizar</th>
            </tr>
            
        <?php
            foreach($listaDenuncias as $key => $denuncia){
                $tipo = $listaTipos[$key]['descricao']; // Considerando que a ordem de tipos corresponde à ordem de denúncias
                $data = DateTime::createFromFormat('Y-m-d', $denuncia['data_d'])->format('d/m/Y');
                echo "<tr>";
                echo "<td>{$denuncia['id_denuncia']}</td>";
                echo "<td>{$tipo}</td>";
                echo "<td>{$denuncia['assunto']}</td>";
                echo "<td>{$data}</td>";
                echo "<td><a href='visualizardenunciauser.php?id_denuncia={$denuncia['id_denuncia']}'><button>Visualizar denúncia</button></a></td>";
                echo "</tr>";
            }
        ?>
        </table>

        <?php } // else fecha aqui ?>
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
</body>
</html>
