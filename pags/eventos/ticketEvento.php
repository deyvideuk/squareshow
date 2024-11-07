

<div class="eventos">
    <div class="box-eventos">

        <?php if(isset($_SESSION['categoria']) && $_SESSION['categoria'] == "Admin"):?>
            <form method="post">
                <div class="botao exluir-evento" title="Excluir Evento">
                    <input type="hidden" name="id_evento" value="<?php echo $dados_eventos['id_eventos']?>">
                    <input type="submit" name="excluirEventos" value="X">
                </div>
            </form>
        <?php endif;?>

        <div class="capa-eventos">
            <img src="<?php echo $dados_eventos['capa_path_eventos'] == null || $dados_eventos['capa_path_eventos'] == "" ? 'img/eventos/conferencia.webp' : $dados_eventos['capa_path_eventos'] ?>" alt="Pequenas Empresas">
        </div>

        <div class="divisao-eventos">
            <div class="descricao-eventos">
                <div class="titulo-eventos">
                    <h2><?php echo $dados_eventos['titulo_eventos']?></h2>
                </div>
                
                <div class="data-local-eventos">
                    <div class="data-eventos" style="display:flex; gap:10px;">
                        <h4 class="dia"><?php echo $dados_eventos['dia_eventos']?></h4>
                        <h4 class="mes"><?php echo $dados_eventos['mes_eventos']?></h4>
                        <h4 class="ano"><?php echo $dados_eventos['ano_eventos']?></h4>
                    </div>
                    <div class="estado-eventos">
                        <h4 class="endereco"><?php echo $dados_eventos['local_eventos']?></h4>
                    </div>
                </div>
                
                <div class="subtitulo-eventos">
                    <p><?php echo $dados_eventos['descricao_eventos']?></p>
                </div>
            </div>

            

            
            <form method="POST" class="form-evento">
                <div class="botao">
                    <input type="hidden" name="dados_evento" class="id_evento" value="<?php echo $dados_eventos['id_eventos']?>">
                    <input type="submit" name="evento" class="evento" class="evento-submit" value="Vedere">
                </div>
            </form>

            <!-- <div class="botao">
                <button class="botaoConferencia" id_evento="<?php echo $dados_eventos['id_eventos']?>">RSVP</button>
            </div> -->

        </div>

        <div class="ingresso-ticket">
            <img src="../../img/icones/bilhete.png" alt="">
        </div>
    </div>

</div>

<script>
    $(document).ready(() => {
        $(".evento").click(() => {
            setTimeout(() => {
                // Seleciona o formulário com a classe 'form-evento' e reseta
                $(".form-evento")[0].reset(); // [0] seleciona o primeiro elemento da coleção
            }, 100);
        });
    });

</script>




