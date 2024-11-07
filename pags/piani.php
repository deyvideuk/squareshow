<?php 

    if(!isset($_COOKIE['id'])){
        echo "
            <script>
                msg('Connettiti per acquistare!', 'error');
            </script>
        ";
    }
?>

<link rel="stylesheet" href="css/tariffe.css">
<link rel="stylesheet" href="css/tariffe-mediaQuerys.css">
<script src="js/scroll.js" defer></script>
<script async src="https://js.stripe.com/v3/buy-button.js"></script>

<div id="area-tariffe">
    <!-- se existir sessão -->
    <?php if(isset($_COOKIE['id'])):?>
        <?php include_once ("../php/pegarDadosUser.php")?>
    <?php endif;?>

    <div class="titulo">
        <h1>Piani</h1>
    </div>

    <div class="area-planos">

            <!-- plano silver -->
            <?php
                include_once("../pags/planos/silver.php");
            ?>
            <!-- plano silver -->

            <!-- plano gold -->
            <?php
                include_once("../pags/planos/gold.php");
            ?>
            <!-- plano gold -->

            <!-- plano platinium -->
            <?php
                include_once("../pags/planos/platinium.php")
            ?>
            <!-- plano platinium -->

        </div>
        <div class="center">
            <p class="sub-titulo">*Si prega di notare che per ogni opera d'arte venduta attraverso la nostra piattaforma, la galleria riceve una commissione del 32% sul valore di ogni singola pittura venduta.</p>
        </div>
        
    
</div>

<script>
    var elemento = document.getElementsByClassName('carrossel');

    if (!elemento) {
        clearInterval(interval);
    }
    
    if(typeof interval != "undefined" || typeof x != "undefined"){
        clearInterval(interval);
        // clearInterval(x);
        delete interval;
        // delete x;
    }
</script>

