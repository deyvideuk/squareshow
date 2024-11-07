


<link rel="stylesheet" href="css/artisti.css" rel="stylesheet">
<link rel="stylesheet" href="css/artisti-mediaQuery.css" rel="stylesheet">

<script src="js/getIp.js" defer></script>

<!-- <script src="js/carrossel.js" ></script> -->
<script src="js/myAjaxConfigs.js" ></script>

<section id="artisti" class="topico">
    <div class="sub-titulo-h2">
        <h2>Artisti</h2>
    </div>

    <div class="area-quadros center-grid">
        <div class="opere">
            <div class="capa">
                <img src="img/artistis/Ariel_Pujol/opere/Flor-de-cactus.png" alt="Flor de Cactus">
            </div>

            <div class="area-artista">
                <p id="artista" class="artista">Ariel Pujols</p>
                <button id="botaoAriel">Scopri di più</button>
            </div>
        </div>
    </div>
</section>

<section id="maestri" class="topico">
    <div class="sub-titulo-h2">
        <h2>Maestri</h2>
    </div>

    <div class="area-quadros center-grid">
        <div class="opere "> <!--inativo-->
            <div class="capa">
                <img src="img/artistis/foto-artista-null/paisagemIA.png" alt="squareshow.net">
            </div>

            <div class="area-artista">
                <p id="artista" class="artista">Registrati e metti in evidenza i tuoi corsi.</p>
                <button class="botaoIscriviti">Registro</button>
            </div>
        </div>
    </div>
</section>

<section id="collezioni" class="topico">
    <div class="sub-titulo-h2">
        <h2>Collezioni</h2>
    </div>

    <div class="area-quadros">
        <div class="opere inativo" title="In fase di sviluppo">
            <div class="capa">
                <img src="img/artistis/Collezioni/Van Gogh/campo_di_grano_con_cipressi.webp" alt="Van_Gogh">
            </div>

            <div class="area-artista">
                <p id="artista" class="artista">Registrati e metti in evidenza i tuoi lavori.</p>
                <button class="botaoIscriviti">Registro</button>
            </div>
        </div>

        <div class="opere inativo" title="In fase di sviluppo">
            <div class="capa" title="In fase di sviluppo">
                <img src="img/artistis/Collezioni/Artista/madonna_col_bambino.webp" alt="Artista">
            </div>

            <div class="area-artista">
                <p id="artista" class="artista">Registrati e metti in evidenza i tuoi lavori.</p>
                <button class="botaoIscriviti">Registro</button>
            </div>
        </div>
    </div>
</section>
<!-- Area Artisti -->

<!-- Area contato -->
<section id="area-contato">
    <section id="contatti">
    <div class="titulo">
        <h2>contatti</h2>
    </div>

    <div class="sub-titulo">
        <p>
            per ulteriori informazioni:
        </p>
    </div>
    </section>
    <!-- Area contato -->

    <!-- Area Formulario -->
    <form action="https://formsubmit.co/squareshownet@gmail.com" class="area-formulario" method="POST">

    <!-- <input type="hidden" name="_cc" value="https://deyvideukcosta.dc@gmail.com"> -->
    <input type="hidden" name="_blacklist" value="sex, sesso, porn, Sborra, Fanculo">
    <input type="hidden" name="_captcha" value="true">
    <input type="hidden" name="_template" value="table">
    <input type="hidden" name="_next" value="https://squareshow.net/?module=formSubmited">

    <fieldset class="formulario">
        <div class="ladoalado">
            <div class="nome">
                <label for="nome">Nome e cognome*</label>
                <input type="text" minlength="12" name="Nome" id="nome" autocomplete="on" required>
            </div>
            <div class="email">
                <label for="email">E-mail*</label>
                <input type="email" name="Email" id="email" autocomplete="on" required>
            </div>
            <div class="oggetto">
                <label for="oggetto">Oggetto*</label>
                <input type="text" minlength="5" maxlength="30" name="Oggetto" id="oggetto" required>
            </div>
        </div>

        <div class="messaggio">
            <label for="messaggio">Messaggio*</label>
            <textarea name="Messaggio" id="messaggio" cols="40" rows="3" required></textarea>
        </div>

        <div>
            <input type="hidden" name="IP_address" id="ip" class="ip">
        </div>

        <div class="checkbox">
            <input type="checkbox" name="Autorizzazione" required value="Acconsento al trattamento dei miei dati personali da parte del proprietario di questo sito Web."> <span>Acconsento al trattamento dei miei dati personali da parte del proprietario di questo sito Web.</span>
        </div>

        <div class="botao-submit">
            <input type="submit" value="">
        </div>
    </fieldset>
    
    </form>


    <!-- Area Formulario -->
</section>

<script>
    var elemento = document.getElementsByClassName('carrossel');

    if (!elemento) {
        clearInterval(interval);
    }

    

    if(typeof interval != "undefined" || typeof x != "undefined"){
        clearInterval(interval);
        // clearInterval(x);
        delete interval;
        // delete x;
    }

    $("#botaoAriel").click(function() {
            $("#print").load("pags/artistis/ariel_pujol.php");
            botaoHome.removeAttribute("class", "active");
            botaoArtisti.setAttribute("class", "active");
            botaoFormazione.removeAttribute("class", "active");
            botaoEventi.removeAttribute("class", "active");
            botaoTariffe.removeAttribute("class", "active");
            botaoContatti.removeAttribute("class", "active");
            toTop(0);
        });
</script>


