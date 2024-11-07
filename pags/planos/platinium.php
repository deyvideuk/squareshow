<div class="planos platinium ">
    <div class="titulo color-platinium">
        <h2>Platinium</h2>
    </div>

    <div class="conteudo">
        <div class="tempo tempo-platinium">
            <p>1 mese</p>
        </div>

        <div>
            <h2>Sconto</h2>
        </div>

        <div class="desconto">
            <h2>&euro; 163,97</h2>
        </div>

        <div class="valor">
            <h2>&euro; 113,97</h2>
            <br>
            <p>Paga in EURO una volta al mese</p>
        </div>

        <div class="qtd-obras">
            <img src="/img/icones/verificar.png" alt="">
            <p> 25 Opere</p>
        </div>

        <?php if(isset($_COOKIE['id'])): ?>
            <div class="botao bg-platinium">
                <a href="https://buy.stripe.com/fZe2a2bXO5JW1J6cNi" target="_blank">Scegli il piano</a>
            </div>
        <?php else: ?>
            <div class="botao bg-platinium"> <!--inativo-->
                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Scegli il piano</button>
            </div>
        <?php endif;?>

    </div>

    <div class="conteudo">
        <div class="tempo tempo-platinium">
            <p>3 mesi</p>
        </div>

        <div>
            <h2>Sconto</h2>
        </div>

        <div class="desconto">
            <h2>&euro; 357,99</h2>
        </div>

        <div class="valor">
            <h2>&euro; 307,08</h2>
            <br>
            <p>Paga in EURO una volta ogni 3 mesi</p>
        </div>

        <div class="qtd-obras">
            <img src="/img/icones/verificar.png" alt="">
            <p> 27 Opere</p>
        </div>

        <?php if(isset($_COOKIE['id'])): ?>
            <div class="botao bg-platinium">
                <a href="https://buy.stripe.com/14k6qi7Hy3BObjGdRn" target="_blank">Scegli il piano</a>
            </div>
        <?php else: ?>
            <div class="botao bg-platinium"> <!--inativo-->
                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Scegli il piano</button>
            </div>
        <?php endif;?>

    </div>

    <div class="conteudo">
        <div class="tempo tempo-platinium">
            <p>6 mesi</p>
        </div>

        <div>
            <h2>Sconto</h2>
        </div>

        <div class="desconto">
            <h2>&euro; 650,00</h2>
        </div>

        <div class="valor">
            <h2>&euro; 600,00</h2>
            <br>
            <p>Paga in EURO una volta ogni 6 mesi</p>
        </div>

        <div class="qtd-obras">
            <img src="/img/icones/verificar.png" alt="">
            <p> 30 Opere</p>
        </div>

        <?php if(isset($_COOKIE['id'])): ?>
            <div class="botao bg-platinium">
                <a href="https://buy.stripe.com/00g2a2d1Sdco0F23cK" target="_blank">Scegli il piano</a>
            </div>
        <?php else: ?>
            <div class="botao bg-platinium"> <!--inativo-->
                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Scegli il piano</button>
            </div>
        <?php endif;?>

    </div>
</div>