<?php
    include_once("../../php/config.php");
    include_once("../../php/protection.php");
    include_once("../../php/requireID.php");
    include_once("../../php/pegarDadosUser.php");
    if(!isset($_SESSION)){
        session_start();
    }
?>

<script src="js/menu.js" defer></script>
<script src="js/telefone.js" defer></script>
<script src="js/verificaDados.js" defer></script>
<script src="js/myAjaxConfigs.js"></script>

<section id="informacoes">
    <div class="bloco cabecalho">
        <div class="T">
            <h2>Il mio conto</h2>
            <p>Visualizza e modifica le tue info personali in basso.</p>
        </div>
    </div>
    
    <div class="bloco conta">
        <div class="T">
            <h3>Account</h3>
            <p>Aggiorna le tue informazioni personali.</p>
        </div>

        <div class="C">
            <p>Email di accesso:</p>
            <strong><?php echo $_SESSION['email'] ?></strong> <br>
            <p>L'email di accesso non può essere modificata</p>
        </div>
    </div>

    <div class="bloco atualizar">
        <form action="" method="post"  enctype="multipart/form-data">
            <div class="bloco-input">
                <label for="nome">Nome & Cognome</label>
                <input type="text" minlength="4" maxlength="20" name="Nome" id="nome" placeholder="<?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : "nome & Cognome"; ?>" autocomplete="on">
                <img src="img/icones/cadeado.png" alt="icone" class="icone" title="Dati privati">
            </div>
            
            <div class="bloco-input">
                <label for="pais">Paese</label>
                <img id="flag" src="" alt="">
                <select name="Paese" id="pais" onchange="changePais()">
                    <option value=""><?php echo 'Attuale - ' . $_SESSION['pais']?></option>
                    <option value="China" id="1">China</option>
                    <option value="Brasil" id="2">Brasil</option>
                    <option value="Italia" id="3">Italia</option>
                    <option value="Russia" id="4">Russia</option>
                    <option value="Repubblica_Dominicana" id="5">Repubblica Dominicana</option>
                </select>
                <!-- <img src="img/icones/cadeado.png" alt="icone" class="icone"> -->
            </div>

            <div class="bloco-input">
                <label for="telefone">Telefono</label>
                <input type="tel" name="telefone" id="telefone" placeholder="<?php echo isset($_SESSION['telefone']) ? $_SESSION['telefone'] : "Seleziona un Paese";?>">
                <img src="img/icones/cadeado.png" alt="icone" class="icone" title="Dati privati" >
            </div>

            <div class="bloco-input">
                <label for="senha-atual">password attuale</label>
                <input type="password" name="senha-atual" id="senha-atual" minlength="6" placeholder="************" onkeypress="isEnter()" autocomplete="on" required>
                
            </div>

            <div></div>

            <div class="botao d-none">
            </div>
            
            <div class="botao">
                <button type="submit" name="atualizar-dados" id="atualizar-dados">Aggiorna dati</button>
            </div>
        </form>
    </div>
</section>

<script>
    openLogin('close');

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

    botaoConta.setAttribute("class", "selected");
    botaoEndereco.removeAttribute("class", "selected");
    botaoAssinatura.removeAttribute("class", "selected");
    botaoEventos.removeAttribute("class", "selected");
    botaoCursos.removeAttribute("class", "selected");
    botaoCompras.removeAttribute("class", "selected");
    <?php if($_SESSION['categoria'] == "Admin"):?>
        botaoGerenciarUsuarios.removeAttribute("class", "selected");
    <?php endif;?>

    // AJAX
    if(modulo == "preenchaOsDados"){
        document.getElementById('nome').style.outline = "1px solid red !important";
    }    
    // AJAX
</script>