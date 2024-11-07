<?php
    include_once("../../php/config.php");
    include_once("../../php/protection.php");
    include_once("../../php/requireID.php");
    include_once("../../php/pegarDadosUser.php");
    
?>

<script src="js/menu.js" defer></script>
<script src="js/verificaDados.js" defer></script>
<script src="js/myAjaxConfigs.js"></script>

<section id="informacoes">
    <div class="bloco cabecalho">
        <div class="T">
            <h2>I miei indirizzi</h2>
            <p>Gestisci gli indirizzi che utilizzi di frequente.</p>
        </div>
    </div>
    
    <div class="bloco endereco">
        <ol>
            <li>
                <p><b>Indirizzo:</b> <?php echo $_SESSION['endereco']?></p>
            </li>
            <li>
                <p><b>Città:</b> <?php echo $_SESSION['cidade']?></p>
            </li>
            <li>
                <p><b>Provincia:</b> <?php echo $_SESSION['provincia']?></p>
            </li>
            <li>
                <p><b>CAP/ZIP:</b> <?php echo $_SESSION['capzip']?></p>
            </li>
            <li>
                <p><b>Paese:</b> <?php echo $_SESSION['pais']?></p>
            </li>
        </ol>

        <div class="botao">
            <button type="button" id="botaoModificarEndereco">Modificare</button>
        </div>
    </div>
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
    botaoEndereco.setAttribute("class", "selected");
    botaoAssinatura.removeAttribute("class", "selected");
    botaoEventos.removeAttribute("class", "selected");
    botaoCursos.removeAttribute("class", "selected");
    botaoCompras.removeAttribute("class", "selected");
    <?php if($_SESSION['categoria'] == "Admin"):?>
        botaoGerenciarUsuarios.removeAttribute("class", "selected");
    <?php endif;?>


    $("#botaoModificarEndereco").click(()=>{
        botaoConta.removeAttribute("class", "selected");
        botaoEndereco.removeAttribute("class", "selected");
        botaoAssinatura.removeAttribute("class", "selected");
        botaoEventos.removeAttribute("class", "selected");
        botaoCursos.removeAttribute("class", "selected");
        botaoCompras.removeAttribute("class", "selected");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            botaoGerenciarUsuarios.removeAttribute("class", "selected");
        <?php endif;?>
    });

</script>