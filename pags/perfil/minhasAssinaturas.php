<?php
    include_once("../../php/config.php");
    include_once("../../php/protection.php");
    include_once("../../php/requireID.php");
    include_once("../../php/pegarDadosUser.php");
    
?>

<link rel="stylesheet" href="css/tariffe.css">
<link rel="stylesheet" href="css/tariffe-mediaQuerys.css">



<script src="js/menu.js" defer></script>
<script src="js/verificaDados.js" defer></script>
<script src="js/myAjaxConfigs.js" defer></script>

<section id="informacoes">
    <div class="bloco cabecalho">
        <div class="T">
            <h2>Abbonamenti</h2>
            <p>Visualizza e gestisci gli abbonamenti acquistati</p>
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

            <!-- Imprime os dados -->
            
            <div id="print-assinatura"></div>

            <!-- Imprime os dados -->

            <?php if($_SESSION['plano'] == "Silver1"):?>

                <script>
                    $("#print-assinatura").load("../../pags/assinaturas/silver1.php");
                </script>

            <?php elseif($_SESSION['plano'] == "Silver2"):?>

                <script>
                    $("#print-assinatura").load("../../pags/assinaturas/silver2.php");
                </script>

            <?php elseif($_SESSION['plano'] == "Silver3"):?>

                <script>
                    $("#print-assinatura").load("../../pags/assinaturas/silver3.php");
                </script>

            <?php elseif($_SESSION['plano'] == "Gold1"):?>

            <script>
                $("#print-assinatura").load("../../pags/assinaturas/gold1.php");
            </script>

            <?php elseif($_SESSION['plano'] == "Gold2"):?>

                <script>
                    $("#print-assinatura").load("../../pags/assinaturas/gold2.php");
                </script>

            <?php elseif($_SESSION['plano'] == "Gold3"):?>

                <script>
                    $("#print-assinatura").load("../../pags/assinaturas/gold3.php");
                </script>

            <?php elseif($_SESSION['plano'] == "Platinium1"):?>
                
                <script>
                    $("#print-assinatura").load("../../pags/assinaturas/platinium1.php");
                </script>
            <?php elseif($_SESSION['plano'] == "Platinium2"):?>
                
                <script>
                    $("#print-assinatura").load("../../pags/assinaturas/platinium2.php");
                </script>

            <?php elseif($_SESSION['plano'] == "Platinium3"):?>
                                
                <script>
                    $("#print-assinatura").load("../../pags/assinaturas/platinium3.php");
                </script>

            <?php elseif($_SESSION['plano'] == "Formazione"):?>

                <script>
                    $("#print-assinatura").load("../../pags/assinaturas/formazione.php");
                </script>

            <?php endif;?>

            <div class="botao">
                <a href="https://billing.stripe.com/p/login/28ocP56AJ0VRbm06oo" target="_blank">Gestisci il mio piano</a>
            </div>
        </div>

    <?php else:?>

        <div class="bloco center">
            <h3><b>Non hai ancora acquistato alcun abbonamento.</b></h3>
            <div class="botao">
                <button type="button" class="botaoTariffe">Vendi Piani e Prezzi</button>
            </div>
        </div>

    <?php endif;?>
</section>


