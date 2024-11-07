<?php
    include_once("../../php/config.php");
    include_once("../../php/protection.php");
    include_once("../../php/requireID.php");
    include_once("../../php/pegarDadosUser.php");
    include_once("../../php/pegarDadosEventos.php");
    

?>

<link rel="stylesheet" href="css/tariffe.css">
<link rel="stylesheet" href="css/tariffe-mediaQuerys.css">

<script src="js/menu.js" defer></script>
<script src="js/verificaDados.js" defer></script>
<script src="js/myAjaxConfigs.js" defer></script>

<section id="informacoes">
    <div class="bloco cabecalho">
        <div class="T">
            <h2>Eventi e biglietti</h2>
            <p>Visualizza e gestisci i tuoi biglietti ed eventi</p>
        </div>
    </div>
    
    <?php if($_SESSION['categoria'] == "Admin"):?>

        <?php if($result_eventos->num_rows > 0):?>

            <?php 
                while($dados_eventos = mysqli_fetch_assoc($result_eventos)){
                    include("../eventos/ticketEvento.php");
                }    
            ?>

            <?php if($result_eventos->num_rows < 3):?>
                <div class="botao">
                    <button type="button" class="botaoAddEventi">Aggiungi evento</button>
                </div>
            <?php else:?>
                <div class="botao">
                    <button type="button" class="botaoAddEventi inativo" disabled="true">Aggiungi evento</button>
                </div>
            <?php endif;?>
    
            <div class="bloco">

                <div id="print-eventos"></div>

                <?php if($_SESSION['plano'] == "Artisti_base"):?>

                <?php elseif($_SESSION['plano'] == "Artisti_intermedio"):?>

                <?php elseif($_SESSION['plano'] == "Artisti_premium"):?>

                <?php elseif($_SESSION['plano'] == "Maestri_intermedio"):?>

                <?php elseif($_SESSION['plano'] == "Maestri_premium"):?>

                <?php elseif($_SESSION['plano'] == "Collezionista_intermedio"):?>

                <?php elseif($_SESSION['plano'] == "Collezionista_premium"):?>

                <?php elseif($_SESSION['plano'] == "Formazione"):?>
                
                <?php endif;?>

            </div>

        <?php else:?>

            <div class="bloco center">
                <h3><b>Non ci sono eventi al momento.</b></h3>
                <div class="botao">
                    <button type="button" class="botaoAddEventi">Aggiungi evento</button>
                </div>
            </div>
        
        <?php endif;?>

    <?php else:?>

        <div class="bloco center">
            <h3><b>Visualizza eventi</b></h3>
            <div class="botao">
                <button type="button" class="botaoEventi">Eventis</button>
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
    botaoEventos.setAttribute("class", "selected");
    botaoCursos.removeAttribute("class", "selected");
    botaoCompras.removeAttribute("class", "selected");
    <?php if($_SESSION['categoria'] == "Admin"):?>
        botaoGerenciarUsuarios.removeAttribute("class", "selected");
    <?php endif;?>


    $(".botaoAddEventi").click(()=>{
        $("#informacoes").load("pags/perfil/addEventos.php");
    });

    $("#botaoGerenciarUsuarios").click(()=>{
        $("#print").load("pags/perfil/usuarios.php");
    });
        

    $(".botaoEventi").click(()=>{
        $("#print").load("pags/init.php");
        setTimeout(() => {
            toTop("eventi");
        }, 1);
    });

</script>

