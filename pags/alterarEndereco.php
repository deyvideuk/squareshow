<?php
    include_once("../php/config.php");
    include_once("../php/protection.php");
    include_once("../php/requireID.php");
    include_once("../php/pegarDadosUser.php");
    if(!isset($_SESSION)){
        session_start();
    }
?>

<script src="js/menu.js" defer></script>
<script src="js/verificaDados.js" defer></script>
<script src="js/myAjaxConfigs.js"></script>

<div class="bloco cabecalho">
    <div class="T">
        <h2>I miei indirizzi</h2>
        <p>Gestisci gli indirizzi che utilizzi di frequente.</p>
    </div>
</div>

<div id="informacoes">
    <form action="" method="post" enctype="multipart/form-data" class="bloco endereco">
        <ol>
            <li>
                <div>
                    <b><label for="endereco">Indirizzo*</label></b>
                    <input type="text" name="Indirizzo" id="endereco" placeholder="Modificare" required>
                </div>
            </li>
            <li>
                <div>
                    <b><label for="cidade">Città*</label></b>
                    <input type="text" name="Citta" id="cidade" placeholder="Modificare" minlength="4" maxlength="20" required>
                </div>
            </li>
            <li>
                <div>
                    <b><label for="provincia">Provincia*</label></b>
                    <input type="text" name="Provincia" id="provincia" placeholder="Modificare" minlength="4" maxlength="20" required>
                </div>
            </li>
            <li>
                <div>
                    <b><label for="capzip">CAP/ZIP*</label></b>
                    <input type="text" name="CAP/ZIP" id="capzip" placeholder="Modificare" minlength="4" maxlength="20" required>
                </div>
            </li>
            <li>
                <div>
                    <b><label for="pais">Paese*</label></b>
                    <img id="flag" src="" alt="">
                    <select name="Paese" id="pais" onchange="changePais()" required>
                        <option value="">Selezionare*</option>
                        <option value="China" id="1">China</option>
                        <option value="Brasil" id="2">Brasil</option>
                        <option value="Italia" id="3">Italia</option>
                        <option value="Russia" id="4">Russia</option>
                        <option value="Repubblica_Dominicana" id="5">Repubblica Dominicana</option>
                    </select>
                </div>
            </li>
        </ol>

        <div class="botao">
            <button type="submit" name="atualizar-dados-endereco" id="atualizar-dados-endereco">Salvare</button>
        </div>
    </form>
</div>

<script>
    openLogin('close');

    if(typeof interval != "undefined" || typeof x != "undefined"){
        clearInterval(interval);
        // clearInterval(x);
        delete interval;
        // delete x;
    }

    // AJAX
    if(modulo == "senhaIncorreta"){
        document.getElementById('senha-atual').style.outline = "1px solid red";
        areaPopup.style.display = 'flex';
        <?php $msga = "password errata!"?>
        areaMsg.innerHTML = "<?php echo $msga?>";
        areaMsg.style.color = "var(--branco)";
        tempo = setInterval(() => {
            areaPopup.style.display = "none";
            document.getElementById('senha-atual').style.outline = "none";
        }, 6000);
    }

    if(modulo == "senhaAtualizada"){
        document.getElementById('senha-atual').style.outline = "1px solid red";
        areaPopup.style.display = 'flex';
        <?php $msga = "Password aggiornata"?>
        areaMsg.innerHTML = "<?php echo $msga?>";
        areaMsg.style.color = "var(--branco)";
        }

    if(modulo == "preenchaOsDados"){
        document.getElementById('nome').style.outline = "1px solid red !important";
    }

    
    // AJAX
</script>