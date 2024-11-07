<div class="planos ouro">
    <div class="titulo color-gold">
        <h2>Gold</h2>
    </div>

    <div class="conteudo">
        <div class="tempo tempo-gold">
            <p>1 mese</p>
        </div>

        <div>
            <h2>Sconto</h2>
        </div>

        <div class="desconto">
            <h2>&euro; 120,00</h2>
        </div>

        <div class="valor">
            <h2>&euro; 85,00</h2>
            <br>
            <p>Paga in EURO una volta al mese</p>
        </div>

        <div class="qtd-obras">
            <img src="/img/icones/verificar.png" alt="">
            <p> 15 Opere</p>
        </div>

        <?php if(isset($_COOKIE['id'])): ?>
            <div class="botao bg-gold">
                <a href="https://buy.stripe.com/9AQ8yq7Hy4FScnKfZr" target="_blank">Scegli il piano</a>
            </div>
        <?php else: ?>
            <div class="botao bg-gold"> <!--inativo-->
                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Scegli il piano</button>
            </div>
        <?php endif;?>

    </div>

    <div class="conteudo">
        <div class="tempo tempo-gold">
            <p>3 mesi</p>
        </div>

        <div>
            <h2>Sconto</h2>
        </div>

        <div class="desconto">
            <h2>&euro; 255,00</h2>
        </div>

        <div class="valor">
            <h2>&euro; 250,00</h2>
            <br>
            <p>Paga in EURO una volta ogni 3 mesi</p>
        </div>

        <div class="qtd-obras">
            <img src="/img/icones/verificar.png" alt="">
            <p> 18 Opere</p>
        </div>

        <?php if(isset($_COOKIE['id'])): ?>
            <div class="botao bg-gold">
                <a href="https://buy.stripe.com/fZecOGe5Wdco4Vi28C" target="_blank">Scegli il piano</a>
            </div>
        <?php else: ?>
            <div class="botao bg-gold"> <!--inativo-->
                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Scegli il piano</button>
            </div>
        <?php endif;?>

    </div>

    <div class="conteudo">
        <div class="tempo tempo-gold">
            <p>6 mesi</p>
        </div>

        <div>
            <h2>Sconto</h2>
        </div>

        <div class="desconto">
            <h2>&euro; 490,00</h2>
        </div>

        <div class="valor">
            <h2>&euro; 440,00</h2>
            <br>
            <p>Paga in EURO una volta ogni 6 mesi</p>
        </div>

        <div class="qtd-obras">
            <img src="/img/icones/verificar.png" alt="">
            <p> 20 Opere</p>
        </div>

        <?php if(isset($_COOKIE['id'])): ?>
            <div class="botao bg-gold">
                <a href="https://buy.stripe.com/4gwdSK4vm5JWcnK7sX" target="_blank">Scegli il piano</a>
            </div>
        <?php else: ?>
            <div class="botao bg-gold"> <!--inativo-->
                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Scegli il piano</button>
            </div>
        <?php endif;?>

    </div>
</div>