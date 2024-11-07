
<script>
    clearInterval(tela);
    clearInterval(interval);
</script>

<link rel="stylesheet" href="css/curso.css">

<!-- Area Iscriviti -->
<section id="area-descubra">
    <div class="descubra">
        <div class="capa">
            <img src="img/Iscriviti/capa-book.webp" alt="Corsi di disegno e acquerello">
        </div>

        <div class="conteudo">
            <div class="titulo">
                <h1>Come imparare a dipingere</h1>
                <h3>6 step</h3>
            </div>
            <div class="info">
                <h2>Info</h2>
                <p>
                    Vuoi imparare a dipingere o migliorare la tua tecnica pittorica? Grazie a tecniche ed esercizio riuscirai a migliorare!
                </p>
            </div>
            <div class="preco">
                <!-- <h2 class="laranja">Prezzo</h2>
                <h3 class="laranja">50,00 &euro;</h3> -->

                <?php if(isset($_COOKIE['id'])):?>
                    <div class="botao">
                        <button id="botaoTariff">Acquistare</button>
                    </div>
                <?php else:?>
                    <div class="botao">
                        <button class="botaoIscriviti">Iscriviti</button>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
<!-- Area Iscriviti -->


<script>

        clearInterval(interval);
        // clearInterval(x);
        delete interval;
        // delete x;

    //AREA AJAX DE CURSO
    if(typeof(botaoIscriviti) == 'undefined'){
            
        botaoIscriviti = document.getElementById('botaoIscriviti');
        clearInterval(tela);
        delete tela;   

    }else{
        clearInterval(tela);
        delete tela;
    }

    $("#botaoTariff").click(()=>{
        $("#print").load("pags/tariffe.php");
        botaoHome.removeAttribute("class", "active");
        botaoArtisti.removeAttribute("class", "active");
        botaoFormazione.removeAttribute("class", "active");
        botaoEventi.removeAttribute("class", "active");
        botaoTariffe.removeAttribute("class", "active");
        botaoContatti.removeAttribute("class", "active");
    });

    $("#botaoIscriviti").click(()=>{
        $("#print").load("pags/iscriviti.php");
        botaoHome.removeAttribute("class", "active");
        botaoArtisti.removeAttribute("class", "active");
        botaoFormazione.removeAttribute("class", "active");
        botaoEventi.removeAttribute("class", "active");
        botaoTariffe.setAttribute("class", "active");
        botaoContatti.removeAttribute("class", "active");
        
    });

    $(".botaoIscriviti").click(()=>{
        $("#print").load("pags/iscriviti.php");
        botaoHome.removeAttribute("class", "active");
        botaoArtisti.removeAttribute("class", "active");
        botaoFormazione.removeAttribute("class", "active");
        botaoEventi.removeAttribute("class", "active");
        botaoTariffe.setAttribute("class", "active");
        botaoContatti.removeAttribute("class", "active");
        
    });

    //AREA AJAX DE CURSO
</script>