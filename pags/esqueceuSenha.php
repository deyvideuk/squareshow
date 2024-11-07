<?php
    include_once('../php/config.php');             
    include_once('../php/submitAtualizarDados.php');
?>

<script src="../js/menu.js" defer></script>
<script src="../js/myAjaxConfigs.js" defer></script>


<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/alterarSenha.css">



<section id="main">    

    <div class="area-formulario" id="form-codigo">
        <form action="" method="POST" name="alterar-senha" id="form-nova-senha">
            <fieldset>
                <legend>Aggiornare la password</legend>

                <div class="box-form">
                    <label for="email">Inserisci il tuo indirizzo email</label>
                    <input type="email" name="email" id="email" placeholder="youremail@gmail.com" required>
                </div>

                <div class="box-form">
                    <p>Invieremo un codice alla tua email</p>
                </div>


                <div class="botao">
                    <input type="submit" name="enviar-codigo" id="enviar-codigo" value="Manda il codice">
                    <br>
                    <div id="loading-submit-codigo" class="loading loader-tracker p-relative d-none">
                        <img src="../../img/icones/loading.png" alt="loader">
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</section>

    


<script>
    
    if(typeof carrosselWidth != "undefined"){
        clearInterval(interval);
    }

    openLogin('close');

    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");


    $(document).ready(() => {
        $("#form-codigo").submit(() => {
            let loading = document.getElementById("loading-submit-codigo");
            let botaoEnviarCodigo = document.getElementById("enviar-codigo");
            let inputEmail = document.getElementById("email");
            loading.classList.remove("d-none");
            botaoEnviarCodigo.classList.add("d-none");
            inputEmail.style.border = "1px solid var(--gray-fraco)";
        });
    });

    
    // AJAX
    if(modulo == "emailNaoExiste"){
        let inputEmail = document.getElementById("email");
        inputEmail.style.border = "1px solid red";
    }
    // AJAX
</script>