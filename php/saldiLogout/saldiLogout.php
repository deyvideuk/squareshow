<script>
    // document.getElementById('sobre').style.display = "none";
    document.getElementById('conteudo').style.display = "block";
    document.getElementById('conteudo').style.height = "max-content";
    document.getElementById('conteudo').style.padding = "50px 0 0 0";
    document.getElementById('conteudo').style.transition = "all 0.1s";
    document.getElementById('area-carrossel').style.display = "none";
    document.getElementById('titulo-opere').style.display = "none";
    document.getElementById('btn-acquisto-logout').style.height = "0";
    document.getElementById('btn-acquisto-logout').style.transition = "all 0.5s ease-in-out";


</script>

<script src="../../js/menu.js" defer></script>

<div class="saldi" id="opere">
    
    <div class="titulo">
        <h2>In vendita</h2>
    </div>

    <div class="area-opere-vendita">

        <div class="area-saldi-logout">
            <div class="saldi-logout">


                <?php
                    include_once("../../pags/artistis/ariel_obras/saldi_logout.php");
                ?>

            </div>
        </div>
        

    </div>  
</div>