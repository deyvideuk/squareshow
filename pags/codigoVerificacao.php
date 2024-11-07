<?php
    include_once('../php/config.php');        
    include_once('../php/submitAtualizarDados.php');

    if(!isset($_SESSION)) {
        session_start();
    }
?>

<?php if(!isset($_SESSION['emailTo']) || empty($_SESSION['emailTo'])) :?>
    <?php 
        header('location: ?modulo=main');
    ?>
<?php else:?>

    <script src="../js/menu.js" defer></script>
    <script src="../js/myAjaxConfigs.js" defer></script>


    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/alterarSenha.css">


    <section id="main">    

        <div class="area-formulario" id="form-codigo">
            <form action="" method="POST" name="alterar-senha" id="form-nova-senha">
                <fieldset>
                    <legend>Inserisci il tuo codice</legend>

                    <div class="box-form">
                        <label for="codigo">Controlla la tua email: <span><?php echo $_SESSION['emailTo']?></span></label>
                        <input type="code" name="codigo" id="input-codigo" placeholder="Inserire il codice qui" minlength="5" maxlength="5"  autocomplete="off" required>
                        <p class="msg"></p>
                    </div>

                    <div class="botao">
                        <input type="submit" name="verificar-codigo" id="verificar-codigo" value="convalidare">
                    </div>

                    <div id="loading-verifica-codigo" class="loading loader-tracker p-relative d-none">
                        <img src="../img/icones/loading.png" alt="loader">
                    </div>

                </fieldset>
            </form>
        </div>
    </section>

    <script>
        openLogin('close');

        if(typeof interval != "undefined" || typeof x != "undefined"){
            clearInterval(interval);
            // clearInterval(x);
            delete interval;
            // delete x;
        }

        botaoHome.removeAttribute("class", "active");
        botaoArtisti.removeAttribute("class", "active");
        botaoFormazione.removeAttribute("class", "active");
        botaoEventi.removeAttribute("class", "active");
        botaoTariffe.removeAttribute("class", "active");
        botaoContatti.removeAttribute("class", "active");

        $(document).ready(()=>{
            $("#form-codigo").submit(() =>{
                let botaoVerificarCodigo =document.getElementById("verificar-codigo");
                let loading =document.getElementById("loading-verifica-codigo");
                botaoVerificarCodigo.classList.add("d-none")
                loading.classList.remove("d-none");
            });
        });

        // AJAX
        if(modulo == "codigoErrado"){
            let inputCodigo = document.getElementById("input-codigo");
            inputCodigo.style.border = "1px solid red";
        } 
        // AJAX
    </script>

<?php endif;?>