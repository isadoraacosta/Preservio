<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../public/css/realizardenuncia.css">
  <link rel="stylesheet" href="../../../public/css/cabeçalho.css">
  <link rel="stylesheet" href="../../../public/css/rodape.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'/>
  <link rel="shortcut icon" href="../../../public/img/logo/1-fotor-bg-remover-2023112994232.png" type="image/x-icon">
  <title>Denuncie | Preservio</title>
    <style>
        .bt-submit {
            display: none;
        }
        .verde{
          background-color: #1F6031;
          color: white;
          border: #1F6031;
        }
        .iindicador, .indicator p {
            transition: color 0.3s;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET['msg_sucesso'])) {
    echo $_GET['msg_sucesso'];
}
require_once("../geral/cabecalhouser.php");
?>

<main>
    <div id="maior">
        <div id="denuncia">
            <h2 class="titulo"> FAÇA SUA <br>  DENÚNCIA</h2>
            <p>Através do processo de denúncia, é viável identificar questões na origem, nomear os participantes envolvidos e abordar a situação antes que evolua para impactos mais graves.</p>
        </div>
        <div id="informacao">
            <h3>A sua denúncia ajuda na:</h3>
            <div id="informacoes">
                <p>Conscientização</p>
                <p>Preservação</p>
                <p>Proteção</p>
            </div>
        </div>
    </div>

    <div id="meio">
        <i class="fa-solid fa-crow animal"></i>
        <p>“Todos têm direito ao meio ambiente ecologicamente equilibrado, bem de uso comum do povo e essencial à sadia qualidade de vida, impondo-se ao Poder Público e à coletividade o dever de defendê-lo e preservá-lo para as presentes e futuras gerações.”</p>
        <blockquote>Artigo 225 da Constituição Federal de 1988.</blockquote>
    </div>

    <div id="importante">
        <ul>
            <li><p>Apresente dados claros e precisos sobre a denúncia a ser formulada. </p></li>
            <li><p>Insuficiência de dados impossibilita ou retarda o atendimento à denúncia. </p></li>
            <li><p>Riqueza de detalhes agiliza a localização do endereço do suposto crime. </p></li>
            <li><p>Importante: caso esteja registrado na página após o encaminhamento da <br> denúncia a unidade responsável dará um retorno da denúncia.</p></li>
        </ul>
    </div>

    <div id="tudo">
        <div class="container1">
            <div id="indicador1" class="indicator">
                <i class="fa-solid fa-font iindicador" id="i1"></i>
                <p id="p1">Assunto</p>
            </div>
            <div id="indicador2" class="indicator">
                <i class="fa-regular fa-calendar-days iindicador" id="i2"></i>
                <p id="p2">Data</p>
            </div>
            <div id="indicador3" class="indicator">
                <i class="fa-solid fa-clock iindicador" id="i3"></i>
                <p id="p3">Hora</p>
            </div>
            <div id="indicador4" class="indicator">
                <i class="fa-solid fa-pen iindicador" id="i4"></i>
                <p id="p4">Descrição</p>
            </div>
            <div id="indicador5" class="indicator">
                <i class="fa-solid fa-quote-left iindicador" id="i5"></i>
                <p id="p5">Tipo</p>
            </div>
            <div id="indicador6" class="indicator">
                <i class="fa-solid fa-location-dot iindicador" id="i6"></i>
                <p id="p6">Local</p>
            </div>
            <div id="indicador7" class="indicator">
                <i class="fa-solid fa-thumbtack iindicador" id="i7"></i>
                <p id="p7">Anexo</p>
            </div>
        </div>

        <?php
        if (!isset($_GET['msg_sucesso'])) {
        ?>
        <form action="../../actions/denuncia/insertdenunciauser.php" method="post" name="denuncia" enctype="multipart/form-data">

            <div id="containerform" class="containerform">

                <div id="parte1" class="parteform visivel">
                    <h2>Registro de denúncia</h2>
                    <p class="paragrafo">Vamos Começar!</p>
                    <label for="assunto">Assunto:</label>
                    <br>
                    <div class="icone">
                        <i class="fa-solid fa-font"></i>
                        <input type="text" id="assunto" name="assunto" required>
                    </div>
                    <button type="button" onclick="validarCampo('assunto', 1)">Próximo</button>
                </div>

                <div id="parte2" class="parteform">
                    <h2>Registro de denúncia</h2>
                    <label for="data">Data:</label>
                    <br>
                    <div class="icone">
                        <i class="fa-regular fa-calendar-days"></i>
                        <input type="date" id="data" name="data" required>
                    </div>
                    <button type="button" onclick="validarCampo('data', 2)">Próximo</button>
                </div>

                <div id="parte3" class="parteform">
                    <h2>Registro de denúncia</h2>
                    <label for="hora">Hora:</label>
                    <br>
                    <div class="icone">
                        <i class="fa-solid fa-clock"></i>
                        <input type="time" id="hora" name="hora" required>
                    </div>
                    <button type="button" onclick="validarCampo('hora', 3)">Próximo</button>
                </div>

                <div id="parte4" class="parteform">
                    <h2>Registro de denúncia</h2>
                    <label for="descricao">Descrição:</label>
                    <br>
                    <div class="icone">
                        <i class="fa-solid fa-pen"></i>
                        <textarea name="descricao" id="descricao" cols="10px" rows="3px" required></textarea>
                    </div>
                    <button type="button" onclick="validarCampo('descricao', 4)">Próximo</button>
                </div>

                <div id="parte5" class="parteform">
                    <h2>Registro de denúncia</h2>
                    <label for="tipo">Tipo:</label>
                    <br>
                    <div class="icone">
                        <i class="fa-solid fa-quote-left"></i>
                        <select name='tipo' id='tipo'>
                            <option value="maus tratos aos animais">Maus tratos aos animais</option>
                            <option value="desmatamento">Poluição do Ar</option>
                            <option value="queimada">Queimadas ou Incêndios Florestais</option>
                            <option value="maus tratos aos animais">Desmatamento Ilegal</option>
                            <option value="desmatamento">Poluição de Recursos Hídricos</option>
                            <option value="queimada">Descarte Irregular de Resíduos Sólidos</option>
                            <option value="maus tratos aos animais">Construções e Ocupações Irregulares</option>
                            <option value="desmatamento">Caça e Pesca Ilegal</option>
                            <option value="queimada">Ruído e Poluição Sonora</option>
                        </select>
                    </div>
                    <button type="button" onclick="validarCampo('tipo', 5)">Próximo</button>
                </div>

                <div id="parte6" class="parteform">
                    <h2>Registro de denúncia</h2>
                    <label for="local">Local:</label>
                    <br>
                    <div class="icone">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" id="local" name="local" required>
                    </div>
                    <button type="button" onclick="validarCampo('local', 6)">Próximo</button>
                </div>

                <div id="parte7" class="parteform">
                    <h2>Registro de denúncia</h2>
                    <label for="anexo">Anexo:</label>
                    <br>
                    <div class="icone">
                        <i class="fa-solid fa-thumbtack"></i>
                        <input type="file" id="anexo" name="anexo">
                    </div>
                    <button class="bt-submit" type="submit">Enviar</button>
                </div>
            </div>
        </form>
        <?php
        } else {
            echo "<div>";
            echo "<h2>Registro de denúncia</h2>";
            echo "<p>Denúncia feita com sucesso. <br> Agradecemos por sua coragem e compromisso com a verdade.</p>";
            echo "</div>";
        }
        ?>
    </div>
</main>

<footer>
    <div>
        <p>Secretaria Municipal de Meio Ambiente <br> Bom Jesus da Lapa - Ba. <br>(77) 3481-7475</p>
    </div>
    <div>
        <p>Acompanhe a Secretaria</p>
        <div id="linksredes">
            <a href=""><i class="fa-brands fa-facebook iroda"></i></a>
            <a href=""><i class="fa-brands fa-instagram iroda"></i></a>
            <a href=""><i class="fa-solid fa-location-dot iroda"></i></a>
            <a href=""><i class="fa-brands fa-twitter iroda"></i></a>
        </div>
    </div>
    <div id='divsobre'>
        <p> <i class="fa-solid fa-circle-info"></i> Sobre o Preservio <br> Um software desenvolvido para promover <br> a sustentabilidade ambiental</p>
    </div>
</footer>

<script>
    function validarCampo(campo, etapa) {
        const valor = document.getElementById(campo).value;
        if (valor.trim() === "") {
            alert("Preencha o campo " + campo + " antes de prosseguir.");
            return;
        }
        
        const parteAtual = document.getElementById("parte" + etapa);
        const proximaParte = document.getElementById("parte" + (etapa + 1));
        
        parteAtual.classList.remove("visivel");
        proximaParte.classList.add("visivel");

        // Alterar cor dos indicadores e ícones
        document.getElementById("indicador" + etapa).classList.add("verde");
        document.getElementById("i" + etapa).style.color = 'white';
        document.getElementById("p" + etapa).style.color = 'white';

        if (etapa === 6) {
            document.querySelector(".bt-submit").style.display = "block";
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".parteform").forEach(function (parte) {
            parte.classList.remove("visivel");
        });
        document.getElementById("parte1").classList.add("visivel");
    });
</script>

</body>
</html>
