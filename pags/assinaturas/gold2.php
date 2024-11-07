<div class="planos ouro">
    <div class="conteudo">
        <div class="tempo tempo-gold">
            <p>3 mese</p>
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
            <p>Fattura in EUR una volta ogni 3 mesi</p>
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
</div>