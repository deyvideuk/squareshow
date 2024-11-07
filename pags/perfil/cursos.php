<?php
    include_once("../../php/config.php");
    include_once("../../php/protection.php");
    include_once("../../php/requireID.php");
    include_once("../../php/pegarDadosUser.php");
    include_once("../../php/pegarDadosCompras.php");
    
?>

<link rel="stylesheet" href="css/tariffe.css">
<link rel="stylesheet" href="css/tariffe-mediaQuerys.css">

<script src="js/menu.js" defer></script>
<script src="js/verificaDados.js" defer></script>
<script src="js/myAjaxConfigs.js" defer></script>

<section id="informacoes">
    <div class="bloco cabecalho">
        <div class="T">
            <h2>Corsi</h2>
            <p>Visualizza e gestisci gli Corsi</p>
        </div>
    </div>
    
    <?php if($_SESSION['plano'] != "" || $_SESSION['plano'] != null):?>

        <div class="bloco">

            <p><?php echo 'Il tuo piano : ' . $_SESSION['plano']?></p>

            <br>

            <?php if($_SESSION['checkoutID'] != '' || $_SESSION['checkoutID'] != null):?>
                <div class="pagamento pago">
                    <p>Pagato</p>
                </div>

                <iframe src="https://player.vimeo.com/video/929728922?h=a4d8eb47bd" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

            <?php else:?>
                <div class="pagamento nao-pago">
                    <p>In attesa del pagamento</p>
                </div>
            <?php endif;?>

            <br>

            <div id="print-assinatura"></div>

            <?php if($_SESSION['plano'] == "Artisti_base"):?>

            <?php elseif($_SESSION['plano'] == "Artisti_intermedio"):?>

            <?php elseif($_SESSION['plano'] == "Artisti_premium"):?>

            <?php elseif($_SESSION['plano'] == "Maestri_intermedio"):?>

            <?php elseif($_SESSION['plano'] == "Maestri_premium"):?>

            <?php elseif($_SESSION['plano'] == "Collezionista_intermedio"):?>

            <?php elseif($_SESSION['plano'] == "Collezionista_premium"):?>

            <?php elseif($_SESSION['plano'] == "Formazione"):?>
                
            <?php endif;?>

            <div class="botao">
                <a href="https://chat.whatsapp.com/JWIW5PkFmDZ0M04YWmLgXv" target="">Corsi</a>
            </div>

    <?php else:?>

        <div class="bloco center">
            <h3><b>Non hai ancora acquistato nessun corso.</b></h3>
            <div class="botao">
                <button type="button" class="botaoTariffe">Visualizza i corsi disponibili</button>
            </div>
        </div>

    <?php endif;?>
</section>

<script>

    if(typeof botaoConta == "undefined"){
        var botaoConta = document.querySelector("#botaoConta");
        var botaoEndereco = document.querySelector("#botaoEndereco");
        var botaoAssinatura = document.querySelector("#botaoAssinatura");
        var botaoEventos = document.querySelector("#botaoEventos");
        var botaoCursos = document.querySelector("#botaoCursos");
        var botaoCompras = document.querySelector("#botaoCompras");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            var botaoGerenciarUsuarios = document.querySelector("#botaoGerenciarUsuarios");
        <?php endif;?>
    }else{
        botaoConta = document.querySelector("#botaoConta");
        botaoEndereco = document.querySelector("#botaoEndereco");
        botaoAssinatura = document.querySelector("#botaoAssinatura");
        botaoEventos = document.querySelector("#botaoEventos");
        botaoCursos = document.querySelector("#botaoCursos");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            var botaoGerenciarUsuarios = document.querySelector("#botaoGerenciarUsuarios");
        <?php endif;?>
    }

    botaoConta.removeAttribute("class", "selected");
    botaoEndereco.removeAttribute("class", "selected");
    botaoAssinatura.removeAttribute("class", "selected");
    botaoEventos.removeAttribute("class", "selected");
    botaoCursos.setAttribute("class", "selected");
    botaoCompras.removeAttribute("class", "selected");
    <?php if($_SESSION['categoria'] == "Admin"):?>
        botaoGerenciarUsuarios.removeAttribute("class", "selected");
    <?php endif;?>
</script>
