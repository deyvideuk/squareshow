<?php 

    if(!isset($_COOKIE['id'])){
        echo "
            <script>
                msg('Connettiti per acquistare!', 'confirmar');
            </script>
        ";
    }
?>

<link rel="stylesheet" href="css/tariffe.css">
<link rel="stylesheet" href="css/tariffe-mediaQuerys.css">
<script src="js/scroll.js" defer></script>
<script async src="https://js.stripe.com/v3/buy-button.js"></script>

<div id="area-tariffe">
    <div class="titulo">
        <h2>Scegli il tuo piano di pagamento</h2>
    </div>

    <?php if(!isset($_COOKIE['id'])):?>
        <!-- ARTISTAS -->
    <div class="tariffe">
        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>ARTISTA</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>37<sup>99</sup></h3>
                </div>
                <div>
                    <p>ogni 1 mesi</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Piano di base</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/28oaGy1jadco5Zm28l">Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/verificado.webp" alt="icone verificado">
                    <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/comissao.png" alt="icone verificado">
                    <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/paleta-de-cores.png" alt="">
            </div>
        </div>

        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>ARTISTA</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>102<sup>60</sup></h3>
                </div>
                <div>
                    <p>ogni 3 mesi</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Piano Intermedio</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/aEU15Y5zq8W8drOfZc">Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/verificado.webp" alt="icone verificado">
                    <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/comissao.png" alt="icone verificado">
                    <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/paleta-de-cores.png" alt="">
            </div>
        </div>

        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>ARTISTA</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>220<sup>00</sup></h3>
                </div>
                <div>
                    <p>ogni 6 mesi</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Piano Premium</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/5kAbKC3ri0pCafCdR5">Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/verificado.webp" alt="icone verificado">
                    <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/comissao.png" alt="icone verificado">
                    <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/paleta-de-cores.png" alt="">
            </div>
        </div>
        <!-- ARTISTA -->


        <!-- MAESTRI -->
        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>MAESTRI</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>149<sup>00</sup></h3>
                </div>
                <div>
                    <p>ogni 1 mesi</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Piano di base</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/5kAdSKfa0b4g1J67sO">Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                    <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/comissao.png" alt="icone verificado">
                    <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/maestro.png" alt="">
            </div>
        </div> 

        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>MAESTRI</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>399<sup>00</sup></h3>
                </div>
                <div>
                    <p>ogni 3 mesi</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Piano Intermedio</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/dR6cOGe5WgoAgE0dRd">Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                    <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/comissao.png" alt="icone verificado">
                    <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/maestro.png" alt="">
            </div>
        </div>

        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>MAESTRI</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>799<sup>00</sup></h3>
                </div>
                <div>
                    <p>ogni 6 mesi</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Piano Premium</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/aEU5me6Dub4g3Re4gE">Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                    <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/comissao.png" alt="icone verificado">
                    <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/maestro.png" alt="">
            </div>
        </div> 
        <!-- MAESTRI -->


        <!-- COLLEZIONISTA -->
        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>COLLEZIONISTA</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>78<sup>00</sup></h3>
                </div>
                <div>
                    <p>ogni 1 mes</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Piano di base</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/cN2dSK1ja0pC0F2cNb">Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                    <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/comissao.png" alt="icone verificado">
                    <p>Squareshow ottiene una commissione del 22% sulle vendite</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/colecionador.png" alt="">
            </div>
        </div>
        
        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>COLLEZIONISTA</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>234<sup>00</sup></h3>
                </div>
                <div>
                    <p>ogni 3 mesi</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Piano Intermedio</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/3cscOG4vm8W84ViaF5">Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                    <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/comissao.png" alt="icone verificado">
                    <p>Squareshow ottiene una commissione del 22% sulle vendite</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/colecionador.png" alt="">
            </div>
        </div>


        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>COLLEZIONISTA</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>450<sup>00</sup></h3>
                </div>
                <div>
                    <p>ogni 6 mesi</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Piano Premium</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/6oE6qi3ri3BO5ZmbJ8">Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                    <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/comissao.png" alt="icone verificado">
                    <p>Squareshow ottiene una commissione del 22% sulle vendite</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/colecionador.png" alt="">
            </div> 
        </div>
        <!-- COLLEZIONISTA -->


        <!-- FORMAZIONE -->
        <div class="box-tariffe">
            <div class="nome-tariffe">
                <h4>FORMAZIONE</h4>
            </div>

            <div class="preco-tariffe">
                <div>
                    <h3 class="preco"><sub>&euro;</sub>50<sup>00</sup></h3>
                </div>
                <div>
                    <p>Mensile</p>
                </div>
            </div>

            <div class="validade-tariffe">
                <p>Ottieni l'accesso ai corsi di video pittura tenuti da uno dei nostri maestri</p>
            </div>

            <?php if(isset($_COOKIE['id'])): ?>
                <div class="botao">
                    <a href="https://buy.stripe.com/28o01Ue5W8W83RebJa" >Seleziona</a>
                </div>
            <?php else: ?>
                <div class="botao inativo">
                    <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                </div>
                
            <?php endif;?>

            <hr>

            <div class="direitos-tariffe">
                <div class="direitos">
                    <img src="img/icones/pintar.png" alt="icone verificado">
                    <p>Scopri l'artista che è in te con il nostro corso di pittura!</p>
                </div>
                <div class="direitos">
                    <img src="img/icones/pintar.png" alt="icone verificado">
                    <p>Impara le tecniche, esplora la tua creatività e crea opere incredibili.</p>
                </div>
            </div>

            <div class="oferta">
                <img src="img/icones/curso.png" alt="">
            </div>
        </div> 
        <!-- FORMAZIONE -->
    </div>
    <!-- se existir sessão -->
    <?php else:?>
        <?php include_once ("../php/pegarDadosUser.php")?>

        <?php if($_SESSION['categoria'] == "Artisti"):?>
            <!-- ARTISTAS -->
            <div class="tariffe">
                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>ARTISTA</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>37<sup>99</sup></h3>
                        </div>
                        <div>
                            <p>ogni 1 mesi</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Piano di base</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/28oaGy1jadco5Zm28l">Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/verificado.webp" alt="icone verificado">
                            <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                        </div>
                        <div class="direitos">
                            <img src="img/icones/comissao.png" alt="icone verificado">
                            <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/paleta-de-cores.png" alt="">
                    </div>
                </div>

                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>ARTISTA</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>102<sup>60</sup></h3>
                        </div>
                        <div>
                            <p>ogni 3 mesi</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Piano Intermedio</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/aEU15Y5zq8W8drOfZc">Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/verificado.webp" alt="icone verificado">
                            <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                        </div>
                        <div class="direitos">
                            <img src="img/icones/comissao.png" alt="icone verificado">
                            <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/paleta-de-cores.png" alt="">
                    </div>
                </div>

                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>ARTISTA</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>220<sup>00</sup></h3>
                        </div>
                        <div>
                            <p>ogni 6 mesi</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Piano Premium</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/5kAbKC3ri0pCafCdR5">Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/verificado.webp" alt="icone verificado">
                            <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                      </div>
                        <div class="direitos">
                            <img src="img/icones/comissao.png" alt="icone verificado">
                            <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/paleta-de-cores.png" alt="">
                    </div>
                </div>
            </div>
            <!-- ARTISTA -->
            
            <?php elseif($_SESSION['categoria'] == 'Maestri'): ?>
            <!-- MAESTRI -->
            <div class="tariffe">
                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>MAESTRI</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>149<sup>00</sup></h3>
                        </div>
                        <div>
                            <p>ogni 1 mesi</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Piano di base</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/5kAdSKfa0b4g1J67sO">Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                            <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                        </div>
                        <div class="direitos">
                            <img src="img/icones/comissao.png" alt="icone verificado">
                            <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/maestro.png" alt="">
                    </div>
                </div> 

                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>MAESTRI</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>399<sup>00</sup></h3>
                        </div>
                        <div>
                            <p>ogni 3 mesi</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Piano Intermedio</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/dR6cOGe5WgoAgE0dRd">Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                            <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                        </div>
                        <div class="direitos">
                            <img src="img/icones/comissao.png" alt="icone verificado">
                            <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/maestro.png" alt="">
                    </div>
                </div>

                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>MAESTRI</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>799<sup>00</sup></h3>
                        </div>
                        <div>
                            <p>ogni 6 mesi</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Piano Premium</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/aEU5me6Dub4g3Re4gE">Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                            <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                        </div>
                        <div class="direitos">
                            <img src="img/icones/comissao.png" alt="icone verificado">
                            <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/maestro.png" alt="">
                    </div>
                </div> 
            </div>
            <!-- MAESTRI -->

            <?php elseif($_SESSION['categoria'] == "Collezionista"): ?>
            <!-- COLLEZIONISTA -->
            <div class="tariffe">
                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>COLLEZIONISTA</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>78<sup>00</sup></h3>
                        </div>
                        <div>
                            <p>ogni 1 mesi</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Piano di base</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/cN2dSK1ja0pC0F2cNb">Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                            <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                        </div>
                        <div class="direitos">
                            <img src="img/icones/comissao.png" alt="icone verificado">
                            <p>Squareshow ottiene una commissione del 22% sulle vendite</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/colecionador.png" alt="">
                    </div>
                </div>
                
                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>COLLEZIONISTA</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>234<sup>00</sup></h3>
                        </div>
                        <div>
                            <p>ogni 3 mesi</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Piano Intermedio</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/3cscOG4vm8W84ViaF5">Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                            <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                        </div>
                        <div class="direitos">
                            <img src="img/icones/comissao.png" alt="icone verificado">
                            <p>Squareshow ottiene una commissione del 22% sulle vendite</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/colecionador.png" alt="">
                    </div>
                </div>


                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>COLLEZIONISTA</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>450<sup>00</sup></h3>
                        </div>
                        <div>
                            <p>ogni 6 mesi</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Piano Premium</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/6oE6qi3ri3BO5ZmbJ8">Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                            <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                        </div>
                        <div class="direitos">
                            <img src="img/icones/comissao.png" alt="icone verificado">
                            <p>Squareshow ottiene una commissione del 22% sulle vendite</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/colecionador.png" alt="">
                    </div> 
                </div>
            </div>       
            <!-- COLLEZIONISTA -->

            <?php elseif($_SESSION['categoria'] == 'Alunno/Acquirente'): ?>

            <!-- FORMAZIONE -->
            <div class="tariffe">
                <div class="box-tariffe">
                    <div class="nome-tariffe">
                        <h4>FORMAZIONE</h4>
                    </div>

                    <div class="preco-tariffe">
                        <div>
                            <h3 class="preco"><sub>&euro;</sub>50<sup>00</sup></h3>
                        </div>
                        <div>
                            <p>Mensile</p>
                        </div>
                    </div>

                    <div class="validade-tariffe">
                        <p>Ottieni l'accesso ai corsi di video pittura tenuti da uno dei nostri maestri</p>
                    </div>

                    <?php if(isset($_COOKIE['id'])): ?>
                        <div class="botao">
                            <a href="https://buy.stripe.com/28o01Ue5W8W83RebJa" >Seleziona</a>
                        </div>
                    <?php else: ?>
                        <div class="botao inativo">
                            <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                        </div>
                        
                    <?php endif;?>

                    <hr>

                    <div class="direitos-tariffe">
                        <div class="direitos">
                            <img src="img/icones/pintar.png" alt="icone verificado">
                            <p>Scopri l'artista che è in te con il nostro corso di pittura!</p>
                        </div>
                        <div class="direitos">
                            <img src="img/icones/pintar.png" alt="icone verificado">
                            <p>Impara le tecniche, esplora la tua creatività e crea opere incredibili.</p>
                        </div>
                    </div>

                    <div class="oferta">
                        <img src="img/icones/curso.png" alt="">
                    </div>
                </div>
            </div> 
            <!-- FORMAZIONE -->

            <!-- AREA ADMIN -->
            <?php elseif ($_SESSION['categoria'] == "Admin"): ?>
                <!-- ARTISTAS -->
                <div class="tariffe">
                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>ARTISTA</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>37<sup>99</sup></h3>
                            </div>
                            <div>
                                <p>ogni 1 mesi</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Piano di base</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/28oaGy1jadco5Zm28l">Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/verificado.webp" alt="icone verificado">
                                <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/comissao.png" alt="icone verificado">
                                <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/paleta-de-cores.png" alt="">
                        </div>
                    </div>

                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>ARTISTA</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>102<sup>60</sup></h3>
                            </div>
                            <div>
                                <p>ogni 3 mesi</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Piano Intermedio</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/aEU15Y5zq8W8drOfZc">Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/verificado.webp" alt="icone verificado">
                                <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/comissao.png" alt="icone verificado">
                                <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/paleta-de-cores.png" alt="">
                        </div>
                    </div>

                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>ARTISTA</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>220<sup>00</sup></h3>
                            </div>
                            <div>
                                <p>ogni 6 mesi</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Piano Premium</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/5kAbKC3ri0pCafCdR5">Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/verificado.webp" alt="icone verificado">
                                <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/comissao.png" alt="icone verificado">
                                <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/paleta-de-cores.png" alt="">
                        </div>
                    </div>
                    <!-- ARTISTA -->


                    <!-- MAESTRI -->
                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>MAESTRI</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>149<sup>00</sup></h3>
                            </div>
                            <div>
                                <p>ogni 1 mesi</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Piano di base</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/5kAdSKfa0b4g1J67sO">Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                                <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/comissao.png" alt="icone verificado">
                                <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/maestro.png" alt="">
                        </div>
                    </div> 

                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>MAESTRI</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>399<sup>00</sup></h3>
                            </div>
                            <div>
                                <p>ogni 3 mesi</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Piano Intermedio</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/dR6cOGe5WgoAgE0dRd">Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                                <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/comissao.png" alt="icone verificado">
                                <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/maestro.png" alt="">
                        </div>
                    </div>

                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>MAESTRI</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>799<sup>00</sup></h3>
                            </div>
                            <div>
                                <p>ogni 6 mesi</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Piano Premium</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/aEU5me6Dub4g3Re4gE">Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                                <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/comissao.png" alt="icone verificado">
                                <p>Squareshow ottiene una commissione del 32% sulle vendite</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/maestro.png" alt="">
                        </div>
                    </div> 
                    <!-- MAESTRI -->


                    <!-- COLLEZIONISTA -->
                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>COLLEZIONISTA</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>78<sup>00</sup></h3>
                            </div>
                            <div>
                                <p>ogni 1 mesi</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Piano di base</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/cN2dSK1ja0pC0F2cNb">Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                                <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/comissao.png" alt="icone verificado">
                                <p>Squareshow ottiene una commissione del 22% sulle vendite</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/colecionador.png" alt="">
                        </div>
                    </div>
                    
                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>COLLEZIONISTA</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>234<sup>00</sup></h3>
                            </div>
                            <div>
                                <p>ogni 3 mesi</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Piano Intermedio</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/3cscOG4vm8W84ViaF5">Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                                <p>Pubblicazione di 4 opere per esposizione e vendita</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/comissao.png" alt="icone verificado">
                                <p>Squareshow ottiene una commissione del 22% sulle vendite</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/colecionador.png" alt="">
                        </div>
                    </div>

                   
                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>COLLEZIONISTA</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>450<sup>00</sup></h3>
                            </div>
                            <div>
                                <p>ogni 6 mesi</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Piano Premium</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/6oE6qi3ri3BO5ZmbJ8">Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/verificado-dourado.png" alt="icone verificado">
                                <p>Pubblicazione di 8 opere per esposizione e vendita</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/comissao.png" alt="icone verificado">
                                <p>Squareshow ottiene una commissione del 22% sulle vendite</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/colecionador.png" alt="">
                        </div> 
                    </div>
                    <!-- COLLEZIONISTA -->


                    <!-- FORMAZIONE -->
                    <div class="box-tariffe">
                        <div class="nome-tariffe">
                            <h4>FORMAZIONE</h4>
                        </div>

                        <div class="preco-tariffe">
                            <div>
                                <h3 class="preco"><sub>&euro;</sub>50<sup>00</sup></h3>
                            </div>
                            <div>
                                <p>Mensile</p>
                            </div>
                        </div>

                        <div class="validade-tariffe">
                            <p>Ottieni l'accesso ai corsi di video pittura tenuti da uno dei nostri maestri</p>
                        </div>

                        <?php if(isset($_COOKIE['id'])): ?>
                            <div class="botao">
                                <a href="https://buy.stripe.com/28o01Ue5W8W83RebJa" >Seleziona</a>
                            </div>
                        <?php else: ?>
                            <div class="botao inativo">
                                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Seleziona</button>
                            </div>
                            
                        <?php endif;?>

                        <hr>

                        <div class="direitos-tariffe">
                            <div class="direitos">
                                <img src="img/icones/pintar.png" alt="icone verificado">
                                <p>Scopri l'artista che è in te con il nostro corso di pittura!</p>
                            </div>
                            <div class="direitos">
                                <img src="img/icones/pintar.png" alt="icone verificado">
                                <p>Impara le tecniche, esplora la tua creatività e crea opere incredibili.</p>
                            </div>
                        </div>

                        <div class="oferta">
                            <img src="img/icones/curso.png" alt="">
                        </div>
                    </div> 
                    <!-- FORMAZIONE -->
                </div>
            <!-- AREA ADMIN -->
        </div>
        <?php endif;?>
    <?php endif;?>
</div>

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
</script>

