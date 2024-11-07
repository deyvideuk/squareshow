<?php
    include_once("../../php/config.php");
    include_once("../../php/requireID.php");
    include_once("../../php/submitNovoEvento.php");
?>

<link rel="stylesheet" href="../../css/eventos/criarEventos.css">

<script src="../../js/menu" ></script>
<script src="../../js/getPerfil.js" ></script>
<script src="../../js/myAjaxConfigs.js" ></script>

<script>
    // if(typeof interval != "undefined" || typeof x != "undefined"){
    //     clearInterval(interval);
    //     // clearInterval(x);
    //     delete interval;
    //     // delete x;
    // }

    function contemApenasNumeros(str) {
            return /^\d+$/.test(str);
        }

    function contemApenasLetras(str) {
        return /^[a-zA-Z]+$/.test(str);
    }

    function mascaraHora(event){
        document.addEventListener('keydown', (tecla)=>{
            Tecla = tecla.key;
            console.log(Tecla);
        });

        if(contemApenasNumeros(event.value)){
            if (event.value.length == 2 && Tecla != "Backspace") {
                event.value += ':';
            } 
        }

        if(contemApenasLetras(event.value)){
            if(event.value.length > 0){
                event.value = '';
            }
        }

        
        
    }
</script>

<br>
<h2>Creare biglietto per eventi</h2>
<br>

<form method="POST" enctype="multipart/form-data" id="form-eventos">

    <div class="criar-box-eventos" style="border: 1px solid gray">
        <div class="capa-eventos" style="border: 5px dashed gray;">
            <img src="img/eventos/conferencia.webp" alt="Insira uma capa">
            
            <div class="change-capa-eventos" id="preview_capa_eventos"></div>

            <div class="change-capa-eventos">
                <label for="change-capa-eventos" id="label-change-capa-eventos"></label>
                <input type="file" name="change-capa-eventos" id="change-capa-eventos" accept="png,jpg,jpeg,webp" onchange="changeCapaEventos(this)" > <!--onchange="changeCapaEventos(this)"-->
            </div>
        </div>

        <div class="conteudo-eventos">
            <div class="box-conteudo-eventos">
                <h4>Titolo dell'evento</h4>
                <div>
                    <input type="text" name="titulo_eventos" id="titulo-eventos" placeholder="Ex: Conferência de pequenas empresas"  maxlength="30" required>
                </div>
            </div>
            <div class="box-conteudo-eventos">
                <h4>Giorno, mese e anno</h4>
                <div class="criar-data-eventos flex-row">
                <select name="dia_eventos" id="dia_eventos" required>
                        <option value="">Data</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                    <select name="mes_eventos" id="mes_eventos" required>
                        <option value="">Mese</option>
                        <option value="gennaio">gennaio</option>
                        <option value="febbraio">febbraio</option>
                        <option value="marzo">marzo</option>
                        <option value="aprile">aprile</option>
                        <option value="maggio">maggio</option>
                        <option value="giugno">giugno</option>
                        <option value="luglio">luglio</option>
                        <option value="agosto">agosto</option>
                        <option value="settembre">settembre</option>
                        <option value="ottobre">ottobre</option>
                        <option value="novembre">novembre</option>
                        <option value="dicembre">dicembre</option>
                    </select>
                    
                    <select name="ano_eventos" id="ano_eventos" required>
                        <option value="">Anno</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                    </select>
                </div>
            </div>

            <div class="box-conteudo-eventos">
                <h4>Luogo dell'evento</h4>
                <div>
                    <input type="text" name="local_eventos" id="local_eventos" placeholder="Ex: Montanhas"  maxlength="30" required>
                </div>
            </div>

            <div class="box-conteudo-eventos">
                <h4>Descrizione dell'evento</h4>
                <div>
                    <textarea name="descricao_eventos" id="descricao_eventos" cols="30" rows="10" max="390" maxlength="390" required></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="complementos-criacao-eventos">

        <div class="box-conteudo-eventos">
            <h3>Seleziona un banner per la pagina</h3>

            <div class="banner-eventos" style="border: 5px dashed gray;">
                <img src="img/eventos/backgrounds/bg-conferencias.jpg" alt="Insira uma capa">
                
                <div class="change-banner-eventos" id="preview_banner_eventos"></div>

                <div class="change-banner-eventos" id="preview_banner_eventos">
                    <label for="change-banner-eventos" id="label-change-banner-eventos"></label>
                    <input type="file" name="change-banner-eventos" id="change-banner-eventos" accept="png,jpg,jpeg,webp" onchange="changeBannerEventos(this)">
                </div>
            </div>

        </div>

        <div class="complementos">

            <div class="box-conteudo-eventos">
                <h4>Indirizzo dell'evento</h4>
                <div>
                    <input type="text" name="indirizzo" id="endereco" autocomplete="on" placeholder="Ex: Via Amerigo Vespucci" required>
                </div>
            </div>

            <div class="box-conteudo-eventos">
                <h4>Città dell'evento</h4>
                <div>
                    <input type="text" name="Citta" id="cidade" minlength="4" maxlength="20"  placeholder="Ex: Viareggio (Lucca)" required>
                </div>
            </div>

            <div class="box-conteudo-eventos">
                <h4>Provincia dell'evento</h4>
                <div>
                    <input type="text" name="Provincia" id="provincia" minlength="4" maxlength="20"  placeholder="Ex: Napoli NA" required>
                </div>
            </div>

            <div class="box-conteudo-eventos">
                <h4>CAP/ZIP dell'evento</h4>
                <div>
                    <input type="text" name="Capzip" id="capzip" minlength="4" maxlength="20"  placeholder="Ex: 55049" required>
                </div>
            </div>

            <div class="box-conteudo-eventos">
                <h4>Paese dell'evento</h4>
                <div>
                    <?php include("../../php/paisesAceitos.php")?>
                </div>
            </div>

            <div class="box-conteudo-eventos">
                <h4>Costo d'ingresso</h4>
                <div>
                    <input type="number" minlength="1" min="0" placeholder="Ex: 2000" onkeyup="formatCurrency(this.value, 'EUR', 'IT')" onchange="formatCurrency(this.value, 'EUR', 'IT')" required>
                    
                    <input type="text" name="preco_eventos" id="preco_eventos"  placeholder="0,00 €" style="border:none;">
                </div>
            </div>

            <div class="box-conteudo-eventos">
                <h4>Orario dell'evento</h4>
                <div>
                    <input type="time" name="horario" required>
                </div>
            </div>
            <div class="box-conteudo-eventos">
                <h4>Map - Exact location</h4>
                <div>
                    <input type="text" name="link_endereco_eventos" placeholder="Ex: <iframe src='https://www.google.com/maps/embed?'">
                </div>
            </div>

        </div>
    </div>

    <div class="botao">
        <input type="submit" name="submitChangeEventos" id="botaoSubmitChangeEventos">
    </div>
</form>
<br>

<script>

    if(typeof botaoConta == "undefined"){
        var botaoConta = document.querySelector("#botaoConta");
        var botaoEndereco = document.querySelector("#botaoEndereco");
        var botaoAssinatura = document.querySelector("#botaoAssinatura");
        var botaoEventos = document.querySelector("#botaoEventos");
        var botaoCursos = document.querySelector("#botaoCursos");
        var botaoCompras = document.querySelector("#botaoCompras");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            var botaoGerenciarUsuarios = document.querySelector("#botaoGerenciarUsuarios");
        <?php endif;?>
    }else{
        botaoConta = document.querySelector("#botaoConta");
        botaoEndereco = document.querySelector("#botaoEndereco");
        botaoAssinatura = document.querySelector("#botaoAssinatura");
        botaoEventos = document.querySelector("#botaoEventos");
        botaoCursos = document.querySelector("#botaoCursos");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            var botaoGerenciarUsuarios = document.querySelector("#botaoGerenciarUsuarios");
        <?php endif;?>
    }

    botaoConta.removeAttribute("class", "selected");
    botaoEndereco.removeAttribute("class", "selected");
    botaoAssinatura.removeAttribute("class", "selected");
    botaoEventos.setAttribute("class", "selected");
    botaoCursos.removeAttribute("class", "selected");
    botaoCompras.removeAttribute("class", "selected");
    <?php if($_SESSION['categoria'] == "Admin"):?>
        botaoGerenciarUsuarios.removeAttribute("class", "selected");
    <?php endif;?>

    
    
</script>




