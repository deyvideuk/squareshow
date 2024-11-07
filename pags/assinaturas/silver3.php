<div class="planos silver">
    <div class="conteudo">
        <div class="tempo tempo-silver">
            <p>6 mese</p>
        </div>

        <div>
            <h2>Sconto</h2>
        </div>

        <div class="desconto">
            <h2>&euro; 440,20</h2>
        </div>

        <div class="valor">
            <h2>&euro; 220,00</h2>
            <br>
            <p>Fattura in EUR una volta ogni 6 mesi</p>
        </div>

        <div class="qtd-obras">
            <img src="/img/icones/verificar.png" alt="">
            <p> 12 Opere</p>
        </div>

        <?php if(isset($_COOKIE['id'])): ?>
            <div class="botao bg-silver">
                <a href="https://buy.stripe.com/5kAbKC3ri0pCafCdR5" target="_blank">Seleziona</a>
            </div>
        <?php else: ?>
            <div class="botao inativo">
                <button onclick="openLogin('open'), toTop(0), openMenu()" title="Accedi per iscriverti">Scegli il piano</button>
            </div>
        <?php endif;?>
    </div>
</div>