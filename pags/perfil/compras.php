<?php
    include_once("../../php/config.php");
    include_once("../../php/protection.php");
    include_once("../../php/requireID.php");
    include_once("../../php/pegarDadosUser.php");

    

?>

<!-- <link rel="stylesheet" href="css/tariffe.css"> -->
<!-- <link rel="stylesheet" href="css/tariffe-mediaQuerys.css"> -->



<script src="js/menu.js" defer></script>

<script src="js/verificaDados.js" defer></script>
<script src="js/myAjaxConfigs.js" defer></script>

    

<section id="informacoes" >
    <div class="bloco cabecalho">
        <div class="T">
            <h2>La mia spesa</h2>
            <p>Visualizza i tuoi acquisti e lo stato della spedizione</p>
        </div>
    </div>
    
    <?php if($_SESSION['plano'] != "" || $_SESSION['plano'] != null):?>

        <div class="bloco">

        <?php if($_SESSION['checkoutID'] != '' || $_SESSION['checkoutID'] != null):?>

        <div class="alert d-flex flex-row justify-content-between align-items-center flex-wrap">
            <div class="alert alert-info w-75">
                <p><?php echo 'Il tuo piano : ' . $_SESSION['plano']?></p>
            </div>
            <div class="alert alert-success">
                <p>Pagato</p>
            </div>
        </div>

        <?php else:?>

        <div class="pagamento nao-pago">
            <p>In attesa del pagamento</p>
        </div>

        <?php endif;?>
        
            <br>
            <?php if($_SESSION['checkoutID'] != '' || $_SESSION['checkoutID'] != null):?>
                
                <div class="jumbotron">
                    <h4>Tieni traccia del mio acquisto</h4>
                    <p>Inserisci il tuo codice di monitoraggio</p>
                    <br>
                    <script src="js/loader.js"></script>
                    
                    <div id="ordertracker-widget" class="area-tracker">
                        <div class="loading loader-tracker">
                            <img src="../../img/icones/loading.png" alt="loader">
                        </div>
                    </div>
                    <script>
                        Ordertracker({
                            "id": "660a068eb028f7036d31b9cd",
                            /*
                                If you want to load the tracking status directly instead of showing a tracking form
                                Uncomment the next line & replace YOUR_TRACKING_NUMBER by a valid tracking number
                            */
                            // "trackingNumber": "TE007302221BR"
                        }).render('#ordertracker-widget')
                    </script>
                </div>
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
            <h3><b>Nessun acquisto in questo momento</b></h3>
            <div class="botao">
                <button type="button" class="botaoArtisti">Guarda le opere in vendita</button>
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
    botaoCursos.removeAttribute("class", "selected");
    botaoCompras.setAttribute("class", "selected");
    <?php if($_SESSION['categoria'] == "Admin"):?>
        botaoGerenciarUsuarios.removeAttribute("class", "selected");
    <?php endif;?>
    

</script>
