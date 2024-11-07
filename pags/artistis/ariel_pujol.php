<?php 

    // if(!isset($_COOKIE['id'])){
    //     echo "
    //         <script>
    //             setTimeout(()=>{
    //                 alert('Connettiti per acquistare!');
    //             }, 2000);
    //         </script>
    //     ";
    // }
?>

<script src="js/carrossel.js" defer></script>

<link rel="stylesheet" href="css/artistiOpere.css" rel="stylesheet">
<link rel="stylesheet" href="css/artisti-mediaQuery.css" rel="stylesheet">

<!-- Area do Artista -->
<article id="area-artista">
    <div class="artista" >
        <div class="sobre" id="sobre">

            <div id="sobre-artista">
                <h1>Ariel Pujols</h1>
                <h2>Mia Arte...</h2>
                <hr><br>
                <p>
                    "Una labor constante en la producción plástica y ha sido profesor de arte para niños."
                </p>
            </div>
        </div>

        <div class="foto">
            <img src="img/artistis/Ariel_Pujol/perfil/Ariel-Puljol-foto.png" alt="Foto d'artista">
        </div>
    </div>



    <div id="conteudo"></div>


    <?php if(isset($_COOKIE['id'])):?>

        <?php
            include_once('../../php/saldi/Ariel_puljol_saldi.php');
        ?>

    <?php else:?>

        <?php
            include_once('../../php/saldiLogout/saldiLogout.php');
        ?>

    <?php endif;?>

    <div class="biografia">
        <div class="titulo">
            <h2>Biografia</h2>
        </div>

        <div class="texto">
            <p>
                <span style="text-decoration: underline; font-weight: 600; padding-right: 10px;">ARIEL PUJOLS </span> <br> Baní, 1991.
                <br><br>
                A los 17 años ingresa a la Escuela Municipal de Bellas Artes de Baní, donde recibe clases de dibujo y pintura con la profesora Esmeralda Bobadilla.
                <br><br>
                Continúa esos estudios en la Escuela Vocacional de las FFAA de Baní, donde recibe clases de decoración y pintura por el profesor Bencosme, dándose a conocer como artista plástico y obteniendo la más alta calificación entre los estudiantes del centro.
                <br><br>
                Desde entonces, vive un constante creación de artes plásticas, mientras que trabaja como profesor de arte para niños.

                <br><br>
                Debutó con su primer colectivo homenaje a Casandra Damirón, 2019, Centro Cultural Perelló.
                Acutalmente vive en los Estados Unidos, buscando nuevas inspiraciones y comercializando sus obras.
                <br><br>
                
                
                
            </p>
        </div>
    </div>
    

    <div class="area-comentarios">
        <div class="comentarios">
            <div class="caixa">
                <img src="img/icones/comentarios.webp" alt="Aspas Duplas">
                <h2>Maria Beatrice</h2>
                <p>
                    "Adoravo le cornici dei miei quadri, erano bellissime. Il tuo trattamento è eccellente!!! Nelle cornici valorizzeremo i quadri che ai miei tempi hanno una memoria affettiva. Grazie mille per il tuo affetto."
                </p>
            </div>
            <div class="caixa">
                <img src="img/icones/comentarios.webp" alt="Aspas Duplas">
                <h2>Murillo Rami Figlio</h2>
                <p>
                    "Lavoro eccezionale nella vendita e nell'esposizione di cornici. Un luogo dove ritornare sempre e un luogo affidabile dove affidare le proprie opere alle cure di persone specializzate e serie."
                </p>
            </div>
            <div class="caixa">
                <img src="img/icones/comentarios.webp" alt="Aspas Duplas">
                <h2>Patrizia Guilhermino</h2>
                <p>
                    “Abbi fiducia e lascialo nelle sue mani!!!  Lui parla con i pezzi, loro rispondono e il risultato è fantastico!!!!  💋grazie”
                </p>
            </div>
        </div>
    </div>
</article>
<!-- Area do Artista -->

<script>
    // AJAX BOTÃO DO ACQUISTO OPERE
    
    
    if(typeof(btnAcquisto) == "undefined" || typeof(btnAcquisto2) == "undefined" || typeof(btnCancelar) == "undefined"){
        const btnAcquisto = document.querySelector('#btn-acquisto');
        const btnAcquisto2 = document.querySelector('#btn-acquisto2');
        const btnAcquistoLogout = document.querySelector('#btn-acquisto-logout');
        

        $(btnAcquisto).click(function(){
            $("#conteudo").load("php/saldi/Ariel_puljol_saldi.php");
            window.scrollTo({
            top: 550,
            behavior: 'smooth'
            });
        });

        $(btnAcquistoLogout).click(function(){
            $('#conteudo').load("php/saldiLogout/saldiLogout.php");
            window.scrollTo({
            top: 550,
            behavior: 'smooth'
            });
        });

        $(btnAcquisto2).click(function(){
            $("#conteudo").load("php/saldi/Ariel_puljol_saldi.php");
            window.scrollTo({
            top: 550,
            behavior: 'smooth'
            });
        });
    }else{

        $(btnAcquisto).click(function(){
            $("#conteudo").load("php/saldi/Ariel_puljol_saldi.php");
            window.scrollTo({
            top: 550,
            behavior: 'smooth'
            });
        });

        $(btnAcquisto2).click(function(){
            $("#conteudo").load("php/saldi/Ariel_puljol_saldi.php");
            window.scrollTo({
            top: 550,
            behavior: 'smooth'
            });
        });
    }

    
        // AJAX BOTÃO DO ACQUISTO OPERE
</script>
