<?php
    include_once("../../php/config.php");
    include_once("../../php/protection.php");
    include_once("../../php/requireID.php");
    include_once("../../php/pegarDadosUser.php");
    include_once("../../php/pegarDadosUsuarios.php");

    
?>

<?php if($_SESSION['categoria'] == "Admin") :?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/tariffe.css">
    <link rel="stylesheet" href="css/tariffe-mediaQuerys.css">

    <script src="js/menu.js" defer></script>
    <script src="js/scroll.js" defer></script>
    <script src="js/verificaDados.js" defer></script>
    <script src="js/myAjaxConfigs.js" defer></script>

    <section class="jumbotron m-5">
        <div class="bloco cabecalho">
            <div class="T">
                <h2>Utentes registrato</h2>
                <p>Visualizza e gestisci i tuoi Utentes registrato</p>
                <br><br>
            </div>
        </div>
        
        <?php if($_SESSION['categoria'] == "Admin"):?>
            
            <?php if($result_usuarios->num_rows > 0):?>
            
                <table class="table table-dark">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Città</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Paese</th>
                        <th scope="col">Registrato dal</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Piano contrattato</th>
                        <th scope="col">ID della cassa</th>
                        </tr>
                    </thead>
                
                    <?php while($dados_usuarios = mysqli_fetch_assoc($result_usuarios)) : ?>
                        <tbody>
                            <tr class="g-2 text-center justify-content-center">
                                <td class="align-middle" scope="row"><img style="width: 100%; max-width:50px; height:50px; border-radius:50%; object-fit:cover;" src="<?php echo $dados_usuarios['pathPerfil'] == null || $dados_usuarios['pathPerfil'] == "" ? "img/icones/no-retrato.png" : $dados_usuarios['pathPerfil']?>" alt="user">  - </td>
                                <td class="align-middle"><?php echo $dados_usuarios['nome']?></td>
                                <td class="align-middle"><?php echo $dados_usuarios['email']?></td>
                                <td class="align-middle"><?php echo $dados_usuarios['telefone']?></td>
                                <td class="align-middle"><?php echo $dados_usuarios['cidade']?></td>
                                <td class="align-middle"><?php echo $dados_usuarios['provincia']?></td>
                                <td class="align-middle"><?php echo $dados_usuarios['pais']?></td>
                                <td class="align-middle"><?php echo substr($dados_usuarios['dataCriacao'], 0, 10)?></td>
                                <td class="align-middle"><?php echo $dados_usuarios['categoria']?></td>

                                <td class="align-middle"><?php echo $dados_usuarios['plano'] == null || $dados_usuarios['plano'] == "" ? "------" : $dados_usuarios['plano']?></td>
                                
                                <td class="align-middle d-inline-block text-wrap text-truncate" style="max-width:250px;"><?php echo $dados_usuarios['checkoutID'] == null || $dados_usuarios['checkoutID'] == "" ? "------" : $dados_usuarios['checkoutID']?></td>
                                
                            </tr>
                        </tbody>
                        <?php endwhile;?>
                </table>

                

            <?php else:?>

                <div class="bloco center">
                    <h3><b>Non ci sono utenti registrati.</b></h3>
                </div>
            
            <?php endif;?>

        <?php else:?>

            <div class="bloco center">
                <h3><b>Visualizza eventi</b></h3>
                <div class="botao">
                    <button type="button" class="botaoEventi">Eventis</button>
                </div>
            </div>

        <?php endif;?>
    </section>

    <script>

    openLogin("close");

        toTop(350);

        $(".botaoAddEventi").click(()=>{
            $("#informacoes").load("pags/perfil/addEventos.php");
        });

        $(".botaoEventi").click(()=>{
            $("#print").load("pags/init.php");
            setTimeout(() => {
                toTop("eventi");
            }, 1);
            // $("#informacoes").load("pags/perfil/addEventos.php");
        });


        if(modulo == "eventosCriado"){
            areaPopup.style.display = 'flex';
            <?php $msga = "Evento aggiunto con successo!"?>
            areaMsg.innerHTML = "<?php echo $msga?>";
            areaMsg.style.color = "var(--branco)";
            tempo = setInterval(() => {
                areaPopup.style.display = "none";
            }, 6000);
        }

        else if(modulo == "eventoExcluido"){
            areaPopup.style.display = 'flex';
            <?php $msga = "Evento rimosso con successo!"?>
            areaMsg.innerHTML = "<?php echo $msga?>";
            areaMsg.style.color = "var(--branco)";
            tempo = setInterval(() => {
                areaPopup.style.display = "none";
            }, 6000);
        }

    </script>

<?php else:?>
    <?php header("location: https://squareshow.net")?>
<?php endif;?>