<?php
include_once("../php/config.php");
?>

<!-- <script src="js/getArquivos.js" defer></script> -->
<script src="js/telefone.js" defer></script>
<script src="js/menu.js" defer></script>
<script src="js/getip.js" defer></script>

<link rel="stylesheet" href="css/incrivit-curso.css">
<link rel="stylesheet" href="css/incrivit-Curso-MediaQuery.css">


<section id="area-contato">
    <!-- Area contato -->
    <section id="contatti">
    <div class="titulo">
        <h2>Registro</h2>
    </div>
    </section>
    <!-- Area contato -->

    <!-- Area Formulario -->
    <!-- <form action="https://formsubmit.co/deyvideukcosta.dc@gmail.com" class="area-formulario" method="POST" enctype="multipart/form-data"> -->
    <form action="?registro=formSubmited" class="area-formulario" method="POST" enctype="multipart/form-data"> <!-- enctype="multipart/form-data"-->

        <!-- <input type="hidden" name="_cc" value="akestudiodigital@gmail.com">
        <input type="hidden" name="_blacklist" value="sex, sesso, porn, Sborra, Fanculo">
        <input type="hidden" name="_captcha" value="true">
        <input type="hidden" name="_template" value="table"> -->

        <fieldset class="formulario">
            <div class="row">
                <div class="nome">
                    <label for="nome">Nome e Cognome *</label>
                    <input type="text" minlength="4" maxlength="20" name="Nome" id="nome" required>
                </div>
                <div class="email">
                    <label for="email">E-mail *</label>
                    <input type="email" name="Email" id="email" autocomplete="on" required>
                </div>
            </div>

            <div class="row">
                <div class="senha1 flex-column">
                    <label for="password1">Password *</label>
                    <input type="password" minlength="6" maxlength="20" name="password1" id="password1" autocomplete="on" required>
                </div>
                <div class="senha2 flex-column">
                    <label for="password2">Conferma Password *</label>
                    <input type="password" minlength="6" maxlength="20" name="password2" id="password2" autocomplete="on" required>
                    <div class="olho-login" onclick="showPassword(2)">
                        <img class="olho" id="olho1" src="img/icones/olho-fechado-branco.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="categoria flex-column">
                    <label for="pais">Paese</label>
                    <?php include("../php/paisesAceitos.php")?>
                </div>
                <div class="telefone flex-column">
                    <label for="telefone">Telefono *</label>
                    <input type="tel" name="Telefono" id="telefone" minlength="12" placeholder="<?php echo isset($_SESSION['telefone']) ? $_SESSION['telefone'] : "Seleziona un Paese"; ?>" required>
                </div>

                <div class="endereco flex-column">
                    <label for="endereco">Indirizzo *</label>
                    <input type="text" name="Indirizzo" id="endereco" required>
                </div>
            </div>

            <div class="row">
                <div class="cidade flex-column">
                    <label for="cidade">Città *</label>
                    <input type="text" name="Citta" id="cidade" minlength="4" maxlength="20" required>
                </div>
                <div class="provincia flex-column">
                    <label for="provincia">Provincia *</label>
                    <input type="text" name="Provincia" id="provincia" minlength="4" maxlength="20" required>
                </div>
            </div>

            <div>
                <div class="capzip flex-column">
                    <label for="capzip">CAP/ZIP *</label>
                    <input type="text" name="CAP/ZIP" id="capzip" minlength="4" maxlength="20" required>
                </div>
            </div>

            <div class="row">
                <div class="categoria">
                    <label for="categoria">CATEGORIA *</label>
                    <select name="Categoria" id="categoria" required>
                        <option value="">Selezionare*</option>
                        <option value="Alunno/Acquirente">Alunno/Acquirente</option>
                        <option value="Artisti">Artisti</option>
                        <option value="Maestri">Maestri</option>
                        <option value="Collezionista">Collezionista</option>
                    </select>
                </div>

                <!-- <div class="categoria">
                    <label for="sesso">Sesso *</label>
                    <select name="Sesso" id="sesso" required>
                        <option value="">Selezionare*</option>
                        <option value="Maschile">Maschile</option>
                        <option value="Femminile">Femminile</option>
                    </select>
                </div> -->
            </div>


            <div class="arquivos">
                <label for="Opere">Immagine del profilo</label>
                <input type="file" name="Opere" id="Opere" accept="image/*, .zip,.rar">

                <div id="preview"></div>

                <!-- <p style="color: rgb(78, 78, 78);">Per inviare più di un'immagine, è necessario comprimere le immagini in una cartella (.zip/.rar)</p> -->
                <p style="color: rgb(78, 78, 78);">La somma delle dimensioni di ciascun file non deve superare il limite di dimensione di 5 MB.</p>

                <input type="file" style="display: none;" id="teste">
            </div>

            <div class="checkbox">
                <input type="checkbox" name="Autorizzazione" required value="Acconsento al trattamento dei miei dati personali da parte del proprietario di questo sito Web."> <span>Acconsento al trattamento dei miei dati personali da parte del proprietario di questo sito Web.</span>
                
            </div>

            <div>
                <input type="hidden" name="IP_address" id="ip" class="ip">
            </div>

            
        </fieldset>
        <div class="botao-submit">
            <input type="submit" name="submit-registro" value="">
        </div>
    </form>
    <!-- Area Formulario -->
</section>

<script>
        clearInterval(interval);
        // clearInterval(x);
        delete interval;
        carrosselWidth = null;
        // delete x;
    if(typeof interval != "undefined" || typeof x != "undefined"){
        clearInterval(interval);
        // clearInterval(x);
        delete interval;
        // delete x;
    }
</script>

        