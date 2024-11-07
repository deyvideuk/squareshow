<?php
    include_once("../../php/config.php");
    include_once("../../php/pegarIdEventos.php");
    include_once("../../php/pegarDadosEventos.php");

    if(!isset($_SESSION)){
        session_start();
    }

    $query = "SELECT * FROM eventos WHERE id_eventos = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("s", $_SESSION['id_evento']);
    $stmt->execute();

    $result_dados = $stmt->get_result();
    $dados_eventos = mysqli_fetch_assoc($result_dados);
    $stmt->reset();
    $conexao->close();
?>

<!-- <link rel="stylesheet" href="../../css/index.css"> -->
<link rel="stylesheet" href="css/eventos.css">
<link rel="stylesheet" href="css/eventos-mediaQuerys.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- <script src="js/countdown.js" defer></script> -->
<script src="js/menu.js" defer></script>

<div class=" container container-fluid d-flex flex-column justify-content-center align-items-center m-5 gap-5">
    <div class="area-titulo">
        

        <div class="bg-img ">
            <img src="<?php echo $dados_eventos['banner_path_eventos'] == null || $dados_eventos['banner_path_eventos'] == "" ? "img/eventos/conferencia.webp" : $dados_eventos['banner_path_eventos']?>" alt="">
        </div>
    </div>

    <div class="jumbotron my-5 d-flex justify-content-center align-items-center flex-column">
    <div class="descricao-eventos mb-5">
            <div class="titulo">
                <h2><?php echo $dados_eventos['titulo_eventos']?></h2>
            </div>
            
            <div class="data-local-eventos">
                <div class="data-eventos">
                    <h4><?php echo $dados_eventos['dia_eventos']?></h4>
                    <h4><?php echo $dados_eventos['mes_eventos']?></h4>
                    <h4><?php echo $dados_eventos['ano_eventos']?></h4>
                </div>
                <div class="estado-eventos">
                    <h4 class="endereco"><?php echo $dados_eventos['local_eventos']?></h4>
                </div>
            </div>
        </div>
        <div class="detalhes">
            <div class="avo">
                <div class="sede">
                    <h2>Orario & Sede</h2>
                </div>

                <div class="ingresso">
                    <div class="icone">
                        <img src="img/icones/dois-ingressos-de-cinema.png" alt="ingressos">
                    </div>
                    <div class="texto">
                        <h2>Biglietti :</h3>
                        <h2 class="valor"><?php echo $dados_eventos['preco_eventos'] != null || $dados_eventos['preco_eventos'] != "" ? $dados_eventos['preco_eventos'] : "Gratuito"?></h2>
                    </div>
                </div>

            </div>

            <div class="endereco">
                <div class="data-hora">
                    <b>Programma dell'evento</b><span><?php echo $dados_eventos['hora_evento']?></span>
                </div>
                <div class="endereco">
                    <div><b>Indirizzo: </b> <span><?php echo $dados_eventos['endereco_eventos']?></span></div>
                    <div><b>Città: </b> <span><?php echo $dados_eventos['cidade_eventos']?></span></div>
                    <div><b>Provincia: </b> <span><?php echo $dados_eventos['provincia_eventos']?></span></div>
                    <div><b>CAP/ZIP: </b> <span><?php echo $dados_eventos['capzip_eventos']?></span></div>
                    <div><b>Paese: </b> <span><?php echo $dados_eventos['pais_eventos']?></span></div>
                </div>
            </div>

            <div class="info">
                <div class="titulo-info">
                    <h2>Info Sull'evento</h2>
                </div>
                <div class="descricao">
                    <p>
                        <?php echo $dados_eventos['descricao_eventos']?>
                    </p>
                </div>
            </div>
        </div>

        
    </div>

    <div class="mapa">
        <h3>Posizione:</h3>
        <br>
        <div id="print-mapa">
            <?php echo $dados_eventos['link_endereco_eventos'] == null || $dados_eventos['link_endereco_eventos'] == "" ? "<img src='img/eventos/backgrounds/google-maps.jpg' class='sem-gps'>" : str_replace("\\", "", $dados_eventos['link_endereco_eventos'])?>
        </div>
    </div>

    
</div>

<script>

    openLogin("close");

    if(typeof interval != "undefined" || typeof x != "undefined"){
        clearInterval(interval);
        // clearInterval(x);
        delete interval;
        // delete x;
    }

    
</script>

    
