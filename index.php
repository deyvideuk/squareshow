<?php
    include_once("php/config.php");
    include_once("php/requireID.php");
    include_once("php/submitLogin.php");
    include_once("php/submitLoggout.php");
    include_once("php/checkoutPlanos.php");
    include_once("php/checkoutCompra.php");
    include_once("php/submitRegistro.php");
    include_once("php/pegarIdEventos.php");
    include_once("php/submitNovoEvento.php");
    include_once("php/pegarDadosEventos.php");
    include_once("php/submitChangePerfil.php");
    include_once("php/submitexcluirEvento.php");
    include_once("php/submitAtualizarDados.php");

    

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Square Show - la piazza degli artisti">
    <meta property="og:description" content="Registrati e vendi i tuoi quadri o Fai  lezione on line, con artisti riconosciuti, docenti presso enti o scuole d’arte. Puoi seguire quello che più ti interessa nelle tecniche e arti pittoriche offerte. Iscriviti e segui la formazione, con corsi  collettivi o personali a frequenza concordata.">
    <meta property="og:image" content="https://squareshow.net/img/og/squareshow.png">
    <meta property="og:image:width" content="1080">
    <meta property="og:image:height" content="1038">
    <meta property="og:locale" content="it">
    <meta property="og:url" content="https://squareshow.net/img/og/squareshow.png">
    <meta property="og:site_name" content="Squareshow">
    <meta property=”fb:admins” content=”werockcontent″/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Squareshow, la piazza degli artisti registrati e vendi i tuoi quadri o Fai  lezione on line, con artisti riconosciuti, docenti presso enti o scuole d’arte. Puoi seguire quello che più ti interessa nelle tecniche e arti pittoriche offerte. Iscriviti e segui la formazione, con corsi  collettivi o personali a frequenza concordata.">
    <meta name="author" content="https://akestudiodigital.com"> 
    <meta name="keywords" content="Opere d'arte, arte, telaio, immagini, pittura, disegno artistico, vendere arte, vendere quadri, registrati e vendi i tuoi quadri, la piazza degli artisti, artisti, ">
    <meta name="theme-color" content="#ff7300" />


    <link rel="stylesheet" href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Index-mediaQuery.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="img/favicon/favicon_squareshow.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta name="adopt-website-id" content="ae441b12-8961-41f8-abe5-c63f8b501310" />
    <script src="//tag.goadopt.io/injector.js?website_code=ae441b12-8961-41f8-abe5-c63f8b501310" 
    class="adopt-injector"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

    <script src="https://www.ordertracker.com/sdk.js" defer></script>
    
    

    <!-- <script src="js/menu.js"defer></script> -->
    <!-- <script src="js/alert.js"defer></script> -->
    <script src="js/audio.js" defer></script>
    <script src="js/scroll.js" defer></script>
    <script src="js/blockScreenShot.js" defer></script>


    
    <title>Square Show</title>
</head>
<body id="body">
   
    <!-- Area Main -->
    <div id="main">
        <!-- Area Topo -->
        <header id="topo">
            <div id="logo" >
                <div>
                    <img src="img/Logo/logo_squareshow-net-preto2.0.png" alt="Logo Square Show">
                </div>
            </div>
            
            <div class="apresentacao">
                <div>
                    <h2 class="amostra laranja">
                        La piazza degli <strong class="laranja">artisti</strong>
                    </h2>

                    <h3 class="sub-amostra">
                        <strong>Registrati e vendi</strong> i tuoi quadri
                    </h3>
                </div>
            </div>

            <div id="area-icone-menu" onclick="openMenu()">
                <div class="icone-menu" >
                    <img src="img/icones/menu-suspenso.webp" alt="Apri il menu">
                </div>
            </div>

            <nav id="menu">
                <ul id="nav" class="menu">
                    <li id="area-logo-menu">
                            <div class="icone-logo-menu">
                                <img src="img/Logo/logo_squareshownet-preto.png" alt="Logo di Squareshow.net">
                            </div>
                    </li>

                    <li><a href="?modulo=main" id="botaoHome" class="active" onclick="closeMenu()">Home</a></li>

                    <div class="area-sub-menu"  onclick="openSubMenu()">
                        <p class="sub-titulo" style="color: var(--gray);">Squareshow</p>
                        <div class="area-jogar2">
                            <img id="jogar2" src="img/icones/jogar.png" alt="">
                        </div>

                        <ol id="sub-menu" onmouseleave="closeSubMenu()" onclick="closeSubMenu()">
                            <li>
                                <a href="?modulo=Chi-siamo" onclick="closeMenu(), closeSubMenu()">Su Noi</a>
                            </li>
                            <li>
                                <a href="?modulo=Come-funziona" onclick="closeMenu(), closeSubMenu()">Come funziona</a>
                            </li>
                        </ol>
                    </div>
                    <li><button id="botaoArtisti" onclick="closeMenu()">Artisti</button></li>
                    <li><button id="botaoGaleria" onclick="closeMenu()">Galleria</button></li>
                    <li><a href="#area-formazione" id="botaoFormazione" onclick="closeMenu()">Formazione</a></li>
                    <li><a href="#eventi" id="botaoEventi" onclick="closeMenu()">Eventi</a></li>
                    <li><button id="botaoTariffe" onclick="closeMenu()">Prezzi</button></li>
                    <li><a href="#area-contato" id="botaoContatti" onclick="closeMenu()">Contatti</a></li>

                    <?php 
                        include_once("php/painel.php");
                    ?>
                    
                    
                    <li class="follow">
                        <p>Seguici</p> 
                        <a href="#">
                            <img src="img/icones/social-facebook-icone-preto.webp" alt="Facebook">
                        </a>
                        <a  href="#">
                            <img src="img/icones/social-instagram-icone-preto.webp" alt="instagram">
                        </a>
                        <a href="#">
                            <img src="img/icones/telegram-icone-preto.png" alt="Telegram">
                        </a>
                    </li>
                    <li>
                        <div id="area-close-menu">
                            <div class="close-menu" onclick="closeMenu()">
                                <img src="img/icones/close.webp" alt="Chiudi menù">
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- Area Topo -->

        <div id="popup" class="popup">
            <p id="texto"></p>
            <img id="popupImg" src="" alt="popupImg">
        </div>

        <!-- Area do Audio -->
        <div id="audioPopup" class="square-popup">
            <div class="area-audio">
                <div class="titulo-popup">
                    <h3>
                        Musica di sottofondo
                    </h3>
                </div>

                <div class="texto-popup">
                    <p>
                        Vuoi riprodurre musica durante la navigazione?
                    </p>
                </div>
            </div>

            <div class="area-btn-popup">
                <button type="button" id="btn-sim" class="active" onclick="playSong()" onmouseover="selectOption(0)">SÌ</button>
                <button type="button" id="btn-nao" onclick="closePopup()" onmouseover="selectOption(1)">NO</button>
            </div>
        </div>

        <div id="audioPopup2" class="circle-popup" onclick="changeSong()" title="Fare clic per riprodurre/mettere in pausa">
            <img src="img/icones/music-stop.png" class="circle-popup-icone" alt="">
        </div>

        <audio id="myAudio" class="audio-icone" controls controlsList="nodownload "  loop> <!-- autoplay="on" -->
            <source src="audio/Tropical-Chill-Pop-(Music-For-Videos)-Miss-You-Back-byNettson&Redbird.mp3" type="audio/mp3">
            Seu navegador não possui suporte para audio.
        </audio>
        <!-- Area do Audio -->

        <!-- AREA PRINT ON SCREEN-->
        <div id="print">
            <!-- Aqui será impresso todo conteudo do site! -->
        </div>
        <!-- AREA PRINT ON SCREEN-->


        <!-- AREA COOKIES -->

            <!-- <div id="area-cookies">
                <php? class="cookies">
                    <div class="texto-cookies">
                        <p>
                            Utilzziamo i cookie per offrirti la miglior esperienza possibile sul nostro sito web.  Accettando, accetti l'ultilizzo di tali cookie. <br>
                            presente sito offre anche a inserzioni e acquirenti un collegamento su piattaforme social per i quali i cookies potranno essere raccolti e utilizzati. <br>

                            <button class="target7" style="border:none; color: blue;cursor: pointer;">Informativa sulla Privacy</button>
                        </p>
                    </div>

                    

                    <div class="botoes-cookies">
                        <button class="target7 btn-cookie btn-branco" >Scopri di più</button>
                        <form action="" method="post">
                            <input type="submit" class="btn-cookie btn-preto" value="Accetto" name="accetto">
                        </form>
                    </div>

                    <?php 
                        if(isset($_POST['accetto'])){
                            if(isset($_SESSION['id'])){
                                echo "n";
                            }else{
                                echo "s";
                            }
                        }
                    ?>

                </div>
            </div> -->

        <!-- AREA COOKIES -->

        <!-- Area Footer -->
        <footer id="footer">
            <div class="area-footer">
                <div class="area-opt">
                    <div class="btn-opt opt1">
                        <button id="target1">Aiuti per I'acquisto</button>
                    </div>
                    <div class="btn-opt opt2">
                        <button id="target2">Regole di acquisto</button>
                    </div>
                    <div class="btn-opt opt3">
                        <button id="target3">Condizioni di vendita</button>
                    </div>
                    <div class="btn-opt opt4">
                        <button id="target4">Regole inserzioni</button>
                    </div>
                    <div class="btn-opt opt5">
                        <button id="target5">Condizioni generali</button>
                    </div>
                    <div class="btn-opt opt6">
                        <button id="target6">Regole annunci</button>
                    </div>
                    <div class="btn-opt opt7">
                        <button id="target7">Informativa sulla Privacy</button>
                    </div>
                </div>

                <div class="redes">
                    <div class="sociais">
                        <div>
                            <a href="#" target="_blank">
                                <img src="img/icones/social-facebook-icone.webp" alt="Facebook">
                            </a>
                        </div>
                        <div>
                            <a href="#" target="_blank">
                                <img src="img/icones/social-instagram-icone.webp" alt="instagram">
                            </a>
                        </div>
                        <div>
                            <a href="https://t.me/Ciao, sono arrivato qui tramite il sito Squareshow e sono interessato a saperne di più sull'acquisto di opere d'arte o sull'esposizione delle mie creazioni. Come posso sfogliare le opere disponibili o inviare i miei pezzi per una possibile mostra? Desidero ricevere indicazioni su come implementare e registrare le opere d'arte sul sito. Ringrazio anticipatamente per l'attenzione e attendo con ansia di ricevere ulteriori informazioni. Grazie!" target="_blank">
                                <img src="img/icones/telegram-icone.png" alt="Telegram">
                            </a>
                        </div>
                        <div>
                            <a href="https://wa.me//+393275938276?text=Ciao, sono arrivato qui tramite il sito Squareshow e sono interessato a saperne di più sull'acquisto di opere d'arte o sull'esposizione delle mie creazioni. Come posso sfogliare le opere disponibili o inviare i miei pezzi per una possibile mostra? Desidero ricevere indicazioni su come implementare e registrare le opere d'arte sul sito. Ringrazio anticipatamente per l'attenzione e attendo con ansia di ricevere ulteriori informazioni. Grazie!" target="_blank">
                            <img src="img/icones/social-whatsapp-icone-branco.png" alt="Telegram">
                            </a>
                        </div>
                    </div>

                    <div class="piva">
                        <p>
                            P.IVA 04085520361 <br>
                            Made in Italy
                        </p>
                        <!-- <p style="max-width: 350px; margin:0 auto;">
                            Per maggiori informazioni contattaci tramite i canali di servizio disponibili!
                        </p> -->
                        
                    </div>
                </div>

                <div class="copyright">
                    <p>Copyright &copy; 2023-2024 v2.0<br> squareshow.net &reg; Tutti i diritti riservati.</p>
                </div>
            </div>
        </footer>
        <!-- Area Footer -->
    </div>
    <!-- Area Main -->

    <div id="areaPopup">
        <h4 id="areaMsg"></h4>
    </div>

    
    <!-- AJAX -->
    <script src="js/myAjaxConfigs.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/modulos.js"></script>

    <script>
    // AJAX 
        // AJAX DO EVENTOS
        $(".botaoConferencia").click((e)=>{
            e.preventDefault();
            $("#print").load("pags/eventos/eventos.php");
            botaoHome.removeAttribute("class", "active");
            botaoArtisti.removeAttribute("class", "active");
            botaoFormazione.removeAttribute("class", "active");
            botaoEventi.removeAttribute("class", "active");
            botaoTariffe.removeAttribute("class", "active");
            botaoContatti.removeAttribute("class", "active");
        });
        // AJAX DO EVENTOS
    </script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        

        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 100, // offset (in px) from the original trigger point
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: true, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
</body>
</html>

