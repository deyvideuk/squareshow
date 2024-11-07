<div class="planos platinium ">
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
            <p>EUR/mese Fattura una volta al mese</p>
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
</div>