
<?php
    include_once("../php/pegarDadosEventos.php");
    include_once("../php/pegarIdEventos.php");

    
?>

<!-- Remove the delete statements -->



<script src="js/carrossel.js" ></script>
<script src="js/myAjaxConfigs.js" ></script>

<!-- <script src="js/countdown.js" defer></script> -->
<script src="js/getIp.js" defer></script>

<!-- Rest of your HTML code -->


<!-- Area Sliders -->
<section class="area-carrossel">
        <div id="moudura">
            <div class="prev" onclick="prev()"></div>
            <div class="next" onclick="next()"></div>
            <img src="img/Carrossel/moudura-carrossel-site.webp" alt="Square" class="moudura">
            <div id="carrossel" class="carrossel">

            <button id="botaoAriel" class="botaoArielCarrossel" title="incontrare l'artista"></button>

                <picture class="container" id="img" aria-valuemin="0" aria-valuemax="12">
                    <img src="img/artistis/Ariel_Pujol/opere/Arbol-de-la-luz.png" alt="Arbol-de-la-luz">
                    <img src="img/artistis/Ariel_Pujol/opere/Casas-de-cristal.png" alt="Casas-de-cristal">
                    <img src="img/artistis/Ariel_Pujol/opere/Castilho-perla.png" alt="Castilho-perla">
                    <img src="img/artistis/Ariel_Pujol/opere/Flor-de-cactus.png" alt="Flor-de-cactus">
                    <img src="img/artistis/Ariel_Pujol/opere/La-mina-de-mis-salinas.png" alt="La-mina-de-mis-salinas">
                    <img src="img/artistis/Ariel_Pujol/opere/Las-gaviotas-sin-rumbo.png" alt="Las-gaviotas-sin-rumbo">
                    <img src="img/artistis/Ariel_Pujol/opere/Las-tres-copas.png" alt="Las-tres-copas">
                    <img src="img/artistis/Ariel_Pujol/opere/Luz-de-la-tarde.png" alt="luz-de-la-tarde">
                    <img src="img/artistis/Ariel_Pujol/opere/Mi-bonito-campo.png" alt="Mi-bonito-campo">
                    <img src="img/artistis/Ariel_Pujol/opere/Mi-campo-imaginario.png" alt="Mi-campo-imaginario">
                    <img src="img/artistis/Ariel_Pujol/opere/Mi-pequeno-gigante.png" alt="Mi-pequeno-gigante">
                    <img src="img/artistis/Ariel_Pujol/opere/Mujer-de-mil-batalhas.png" alt="Mujer-de-mil-batalhas">
                    <img src="img/artistis/Ariel_Pujol/opere/Veleiro-de-plata.png" alt="Veleiro-de-plata">
                </picture>

                <div class="m-a">
                    <img src="img/Logo/logo-quareshownet-branca.png" alt="">
                </div>
            </div>
        
        </div>
    </section>
    <!-- Area Sliders -->

<div class="main-ajustes">

    <!-- Area de apresentação -->
        <div id="area-apresentacao">
            <div class="apresentacao">
                
            </div>
        </div>
    <!-- Area de apresentação -->

    <!-- Area botao galeria -->
        <div class="botao area-botao-galeria">
            <button class="botaoArtisti btn-galeria" data-aos="fade-up">Scopri la nostra gallery</button>
        </div>
    <!-- Area botao galeria -->

     <!-- // include_once("../pags/quemSomos.php"); -->

    <!-- Area tipos de categorias-->

    <div id="area-categorias">
        <h2 class="titulo">Come funziona</h2>
        <h3 class="sub-titulo">Trasparenza, funzionalità e passione per l’arte</h3>
        <br><br>
        <div class="categorias">

            <div class="bloco-categoria artista" data-aos="fade-right" data-aos-delay="">
                <img src="../img/icones/artista.png" alt="">
                <h2 class="titulo">ARTISTA</h2>
                <p class="sub-titulo">Metti in mostra le tue opere e vendi direttamente
                Pubblica locandine per mettere in evidenza i tuoi eventi</p>
            </div>

            <div class="bloco-categoria comprador" data-aos="fade-up" data-aos-delay="1000">
                <img src="../img/icones/comprador.png" alt="">
                <h2 class="titulo">ACQUIRENTE</h2>
                <p class="sub-titulo">
                Passeggia nella mostra virtuale
                Scegli il quadro che ti interessa e acquistalo direttamente
                </p>
            </div>

            <div class="bloco-categoria estudante" data-aos="fade-left" data-aos-delay="1200">
                <img src="../img/icones/estudo-universitario.png" alt="">
                <h2 class="titulo">ALLIEVO/A 
                </h2>
                <p class="sub-titulo">
                Scegli le attività artistiche e i corsi per imparare o migliorare la tua abilità
                artistica
                </p>
            </div>

            <div class="bloco-categoria colecionador" data-aos="fade-right" data-aos-delay="1400">
                <img src="../img/icones/selo.png" alt="">
                <h2 class="titulo">COLLEZIONISTA</h2>
                <p class="sub-titulo">
                Metti in mostra le opere che desideri condividere o vendere
                Trova contatti con la tua stessa passione per l’arte
                </p>
            </div>

            <div class="bloco-categoria maestro" data-aos="fade-left" data-aos-delay="1600">
                <img src="../img/icones/educacao-online.png" alt="">
                <h2 class="titulo">MAESTRO/A</h2>
                <p class="sub-titulo">
                Iscriviti per mettere in evidenza i tuoi corsi e le tue attività artistiche
                </p>
            </div>
        </div>

        <br><br>

        <div class="center">
            <h2 class="titulo">Sei Un Artista?</h2>
            <p class="sub-titulo">Iscriviti subito e crea la tua galleria digitale</p>
            <div class="botao">
                <button class="botaoIscriviti">Iscrizione</button>
            </div>
        </div>
    </div>

    <!-- Area tipos de categorias -->


    <!-- Area  valores -->

    <div id="area-categorias">
        <h2 class="titulo">I valori di Squareshow</h2>
        <h3 class="sub-titulo">Le basi della nostra missione</h3>
        <br><br>
        <div class="categorias">

            <div class="bloco-categoria artista" data-aos="fade-right" data-aos-delay="">
                <img src="../img/icones/consistencia.png" alt="">
                <h2 class="titulo">Consistenza</h2>
                <p class="sub-titulo">È la capacità di sostenere uno standard o una qualità costante, dimostrando stabilità e affidabilità.</p>
            </div>

            <div class="bloco-categoria comprador" data-aos="fade-up" data-aos-delay="1000">
                <img src="../img/icones/cliente.png" alt="">
                <h2 class="titulo">Esperienza</h2>
                <p class="sub-titulo">Ci spinge a continuare, a cercare cambiamenti e a credere in possibilità migliori.</p>
            </div>

            <div class="bloco-categoria estudante" data-aos="fade-left" data-aos-delay="1200">
                <img src="../img/icones/livro-de-historia.png" alt="">
                <h2 class="titulo">Storia</h2>
                <p class="sub-titulo">
                    La missione di Squareshow è rendere l'arte più accessibile e riconosciuta, dando visibilità agli artisti di talento e promuovendo l'apprezzamento dell'arte in tutte le sue forme.    
                </p>
            </div>

            <div class="bloco-categoria colecionador" data-aos="fade-right" data-aos-delay="1400">
                <img src="../img/icones/unidade.png" alt="">
                <h2 class="titulo">Rispetto</h2>
                <p class="sub-titulo">
                Valorizzare la diversità artistica e le interazioni positive, garantendo dignità e riconoscimento a tutti i soggetti coinvolti.
                </p>
            </div>

            <div class="bloco-categoria maestro" data-aos="fade-left" data-aos-delay="1600">
                <img src="../img/icones/paixao.png" alt="">
                <h2 class="titulo">Passione</h2>
                <p class="sub-titulo">
                Intensa dedizione alla condivisione e alla promozione dell'arte, guidata dall'amore e dall'impegno per l'espressione creativa.
                </p>
            </div>
        </div>

        <br><br>

        <div class="center">
            <h2 class="titulo">Creatività</h2>
            <p class="sub-titulo">Iscriviti subito e crea la tua galleria digitale</p>
            <div class="botao">
                <button class="botaoIscriviti">Iscrizione</button>
            </div>
        </div>
    </div>

    <!-- Area  valores -->

    <!-- Area Formazione -->
    <section id="area-formazione">
        <div class="formazione">
            <div class="area-estatua" data-aos="fade" data-aos-delay="1000">
                <img src="img/estatua/Estatua.webp" alt="">
            </div>
            <div class="titulo">
                <h2>Formazione</h2>
            </div>

            <div class="subtitulo">
                <p class="sub-titulo">Mettiamo In Evidenza Attività Formazione Artistiche</p>
            </div>

            <div class="sub-titulo max-width-600">
                
            </div>

            <div class="programma">
                <h3>In Programma</h3>
            </div>

            <div id="iscriviti">
                <div class="capa" data-aos="fade" data-aos-delay="200">
                    <img src="img/Iscriviti/capa-book.webp" alt="capa de livro">
                </div>

                <div class="legenda">
                    <p class="sub-titulo">Consulta le attività artistiche pubblicate e partecipa alle formazioni con artisti
                    riconosciuti e docenti presso enti, scuole d’arte oppure online. Impara o
                    affina la tua tecnica nelle arti pittoriche attraverso lezioni, sessioni individuali
                    o corsi di gruppo. </p>

                    <!-- <h2>
                        50,00&euro;
                    </h2> -->

                    <div class="botao">
                        <button id="botaoAprender">Scopri di più</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="center">
        <h2 class="titulo titulo-mestre">Sei Un Mastro D’arte?</h2>
        <p class="sub-titulo">Hai un’attività artistica da mettere in evidenza? <br> Sei un Maestro o un Maestra d’arte? <br> Iscriviti per pubblicare la tua locandina e le tue informazioni.</p>
        <div class="botao">
            <button class="botaoIscriviti">Iscrizione</button>
        </div>
    </div>
    <!-- Area Formazione -->

    <!-- Area Wallpaper -->
    <!-- <section id="wallpaper"></section> -->
    <!-- Area Wallpaper -->

    <!-- Area Eventi -->
    <!-- <section id="eventi">
        <div class="titulo">
            <h2>Eventi e Mostre</h2>
        </div>

        <div class="center">
            <p class="sub-titulo">Suggerimenti Per Incontrare L’Arte</p>
            <p class="sub-titulo">Da appassionati d’arte ne ricerchiamo sempre l’essenza in ogni dove, per questo abbiamo pensato di selezionare luoghi o eventi in cui la si possa respirare e ammirare, nella sua più profonda autenticità.</p>
        </div>

        <div class="elemento-avo">
            <div class="area-video">
                <video class="lazyloaded " preload="auto" autoplay data-autoplay loop playsinline muted data-poster>
                    <source media="(min-width: 100px)" src="video/eventos/GAF_LOOP_HOMEPAGE_V5.webm" type="video/webm">
                    <source media="(min-width: 100px)" src="video/eventos/GAF_LOOP_HOMEPAGE_V5.mp4" type="video/mp4">
                </video>
                
                
            </div>

            <p>Galleria dell’Accademia</p>

            <div class="icone-exclusivo">
                <img src="img/icones/exclusivo.png" alt="">
            </div>
        </div>
        
        <div class="area-descricao">
            <div class="descricao">
                <div class="row">
                    <div class="sub-titulo">
                        <p>
                            La Galleria dell'Accademia di Belle Arti di Firenze, o semplicemente
                            Galleria dell'Accademia, è un importante museo di Firenze,
                            dedicato alla conservazione di una ricca collezione di opere d'arte
                            dal tardo gotico alla fine del XIX secolo.

                        </p>
                    </div>
                    <div class="ingresso d-none">
                        <div class="icone">
                            <img src="img/icones/dois-ingressos-de-cinema.png" alt="ingressos">
                        </div>
                        <div class="texto">
                            <h2>Biglietti :</h3>
                            <h2 class="valor">Gratuito</h2>
                        </div>
                    </div>
                </div>
                <div class="area-local">
                    <div class="local">
                        <img src="img/icones/pino-local.png" alt="pino">
                        <h3 class="endereco">Via Ricasoli, 58/60, 50129 Firenze FI, Itália</h3>
                    </div>
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2880.80924800479!2d11.256067476589363!3d43.77681834442622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a558cbc91b927%3A0x6d4cf7aefa41a2c7!2sGaleria%20da%20Academia%20de%20Belas%20Artes%20de%20Floren%C3%A7a!5e0!3m2!1spt-BR!2sbr!4v1721601429935!5m2!1spt-BR!2sbr" width="90%" height="400" style="border:0; margin: 10px auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="data">
                        <h4 id="data"></h4>
                        
                    </div>
                </div>
            </div>
        </div>

        
    </section> -->
    <!-- Area Eventi -->

    <?php if($result_eventos->num_rows > 0):?>

    <?php 
        while($dados_eventos = mysqli_fetch_assoc($result_eventos)){
            include("eventos/ticketEvento.php");
        }    
    ?>
    
    <?php endif;?>



    

    
    
</div>

<div id="new-banner">
    <div class="area-new-banner">
    </div>
</div>

<div class="center">
    <p class="sub-titulo">ORGANIZZI O CONOSCI UN EVENTO D’ARTE DA SUGGERIRE?</p>
    <p class="sub-titulo">Scrivici una email con i dettagli qui sotto  <img src="/img/icones/apontando-para-baixo.png" alt=""></p>
</div>

<section id="area-contato">
    <!-- Area contato -->
    <section id="contatti">
        <div class="titulo">
            <h2>Contatti</h2>
        </div>

        <div class="sub-titulo">
            <img id="icone-telefone" src="img/icones/telefone-icone.png" alt="telefone-icone.png">
            <p id="numero-telefone">+39 327 593 8276</p>
            <span id="divisor">|</span>
            <img id="icone-email" src="img/icones/e-mail-icone.png" alt="email.png">
            <p id="email-sub-titulo">squareshownet@gmail.com</p>
        </div>
    </section>
    <!-- Area contato -->
        
    <!-- Area Formulario -->
    <form action="https://formsubmit.co/squareshownet@gmail.com" class="area-formulario" method="POST">
    
    <input type="hidden" name="_blacklist" value="sex, sesso, porn, Sborra, Fanculo">
    <input type="hidden" name="_captcha" value="true">
    <input type="hidden" name="_template" value="table">
    <input type="hidden" name="_next" value="https://squareshow.net/?module=formSubmited">

    <fieldset class="formulario">
        <div class="ladoalado">
            <div class="nome area-input">
                <label for="nome">Nome e cognome*</label>
                <input type="text" minlength="12" name="Nome" id="nome" required>
            </div>
            <div class="email area-input">
                <label for="email">E-mail*</label>
                <input type="email" name="Email" id="email" autocomplete="on" required>
            </div>
            <div class="oggetto area-input">
                <label for="oggetto">Oggetto*</label>
                <input type="text" minlength="5" maxlength="30" name="Oggetto" id="oggetto" required>
            </div>
        </div>

        <div class="messaggio area-input">
            <label for="messaggio">Messaggio*</label>
            <textarea name="Messaggio" id="messaggio" cols="40" rows="3" required></textarea>
        </div>

        <div>
            <input type="hidden" name="IP_address" id="ipHome" class="ip">
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
