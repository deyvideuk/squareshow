<?php
    include_once('../php/config.php');    
    include_once('../php/requireID.php');    
    include_once('../php/submitAtualizarDados.php');

    if(!isset($_SESSION)){
        session_start();
    }
?>

<?php if(isset($_SESSION['emailTo'])):?>
    <script src="../js/menu.js" defer></script>
    <script src="../js/loader.js" defer></script>
    <script src="../js/myAjaxConfigs.js" defer></script>


    <link rel="stylesheet" href="../css/alterarSenha.css">


    <section id="main">
            
        </script>
        <div class="area-formulario">
            <form action="" method="POST" name="alterar-senha" id="form-nova-senha">
                <fieldset>
                    <legend>Aggiornare la password</legend>

                    <div class="box-form">
                        <label for="senha-atual">Nuova password</label>
                        <input type="password" id="password3" name="nova-senha" minlength="6" maxlength="20" autocomplete="off" placeholder="************" required>
                    </div>

                    <div class="box-form">
                        <label for="senha-atual">Conferma la nuova password</label>
                        <input type="password" id="password4" name="repete-nova-senha" minlength="6" maxlength="20" autocomplete="off" placeholder="************" required>
                        <div class="olho" onclick="showPassword(4)">
                            <img id="olho3" src="img/icones/olho-fechado-preto.png" alt="">
                        </div>
                    </div>

                    <div class="botao">
                        <input type="submit" name="alterar-senha" id="submit-nova-senha" value="Modificare">
                    </div>

                    <div id="loading-senhas" class="loading loader-tracker p-relative d-none">
                        <img src="../img/icones/loading.png" alt="loader">
                    </div>

                </fieldset>
            </form>
        </div>
    </section>

    <script src="../js/alert.js"></script>

    <script>
        openLogin('close');

        if(typeof interval != "undefined" || typeof x != "undefined"){
            clearInterval(interval);
            // clearInterval(x);
            delete interval;
            // delete x;
        }

        if(typeof novaSenha == "undefined"){
            var novaSenha = document.querySelector("#password3");
            var repeteNovaSenha = document.querySelector("#password4");
        }else{
            novaSenha = document.querySelector("#password3");
            repeteNovaSenha = document.querySelector("#password4");
        }

        $(document).ready(()=>{
            $("#form-nova-senha").submit(()=>{
                let loading =document.getElementById("loading-senhas");
                let botaoSubmit =document.getElementById("submit-nova-senha");
                botaoSubmit.classList.add("d-none");
                loading.classList.remove("d-none");
            });
        });

        // AJAX
        if(modulo == "erroSenha"){
            novaSenha.style.border = "1px solid red";
            repeteNovaSenha.style.border = "1px solid red";
        }
        // AJAX
    </script>
    <?php else:?>
        <script>
            window.location = "?modulo=main";
        </script>
<?php endif;?>