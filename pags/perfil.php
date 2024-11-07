<?php
include_once("../php/config.php");
include_once("../php/requireID.php");
include_once("../php/protection.php");
include_once("../php/pegarDadosUser.php");

if(isset($_GET['modulo']) && $_GET['modulo'] == "compras"){
    if(isset($_GET['checkout']) && $_GET['checkout'] == "ok"){
        echo"<script>msg('Acquisto effettuato con successo!', 'confirmar')</script>";
    }else{
        header("location: ?modulo=compras");
    }
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="../js/menu.js"></script>
<script src="../js/getPerfil.js"></script>
<script src="../js/myAjaxConfigs.js" defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<link rel="stylesheet" href="../css/perfil/perfil.css">
<link rel="stylesheet" href="../css/perfil/perfil-mediaQuery.css">


<section id="area-perfil">
    <div id="area-sidebar">
        <div class="menu-perfil">
            <div class="usuario">
                <div class="retrato-usuario">
                    <div class="foto-perfil">
                        <img src="<?php echo $_SESSION['pathPerfil'] == "" ? 'img/icones/no-retrato.png' : $_SESSION['pathPerfil'] ?>" id="imgProfile" alt="Image Profile">

                        
                    </div>

                    <?php if($_SESSION['categoria'] == "Admin") :?>
                        <div class="categoria-usuario Admin">
                            <p>
                                <?php echo $_SESSION['categoria'] ?>
                            </p>
                        </div>

                    <?php elseif($_SESSION['categoria'] == "Alunno/Acquirente") :?>
                        <div class="categoria-usuario Alunno">
                            <p>
                                <?php echo $_SESSION['categoria'] ?>
                            </p>
                        </div>

                    <?php elseif($_SESSION['categoria'] == "Artisti") :?>
                        <div class="categoria-usuario Artisti">
                            <p>
                                <?php echo $_SESSION['categoria'] ?>
                            </p>
                        </div>

                    <?php elseif($_SESSION['categoria'] == "Maestri") :?>
                        <div class="categoria-usuario Maestri">
                            <p>
                                <?php echo $_SESSION['categoria'] ?>
                            </p>
                        </div>
                        
                    <?php elseif($_SESSION['categoria'] == "Collezionista") :?>
                        <div class="categoria-usuario Collezionista">
                            <p>
                                <?php echo $_SESSION['categoria'] ?>
                            </p>
                        </div>
                    
                    <?php endif;?>
                </div>
            </div>

            <div class="nome">
                <strong><?php echo $_SESSION['nome']?></strong>
            </div>

            <div class="nome">
                <?php echo 'Utente dal: ' . substr($_SESSION['dataCriacao'], 0, 10)?>
            </div>

        </div>

        <div class="menu-perfil padding-none">
            <ul>
                <?php if($_SESSION['categoria'] == "Admin") :?>
                    
                    <?php
                        include_once("../pags/menuUsuarios/menuAdmin.php");    
                    ?>

                <?php elseif($_SESSION['categoria'] == "Alunno/Acquirente"):?>

                    <?php
                        include_once("../pags/menuUsuarios/menuAlunno.php");    
                    ?>

                <?php elseif($_SESSION['categoria'] == "Artisti"):?>

                    <?php
                        include_once("../pags/menuUsuarios/menuArtisti.php");    
                    ?>

                <?php elseif($_SESSION['categoria'] == "Maestri"):?>

                    <?php
                        include_once("../pags/menuUsuarios/menuMaestri.php");
                    ?>

                <?php elseif($_SESSION['categoria'] == "Collezionista"):?>

                    <?php
                        include_once("../pags/menuUsuarios/menuCollezionista.php");
                    ?>
                    
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div id="print-perfil" class="menu-perfil">
        <!-- Aqui sera impresso as opcoes de perfil -->
    </div>
    
    <div class="clear"></div>
</section>

<script>

    if(modulo == "senhaIncorreta" || modulo == "dadosAtualizados"){
        setTimeout(() => {
            $("#print-perfil").load("pags/perfil/conta.php");
        }, 1);
    }

    if(modulo == "dadosAtualizadosEnd"){
        setTimeout(() => {
            $("#print-perfil").load("pags/perfil/endereco.php");
        }, 1);
    }

    if(modulo == "dadosNaoAtualizadosEnd"){
        setTimeout(() => {
            $("#print-perfil").load("pags/perfil/endereco.php");
        }, 1);
    }

    if(modulo == "preenchaOsDados"){
        setTimeout(() => {
            $("#print-perfil").load("../pags/perfil/conta.php");
        }, 1);
    }

    if(modulo == "senhaAtualizada"){
        setTimeout(() => {
            $("#print-perfil").load("../pags/perfil/conta.php");
        }, 1);
    }

    if(modulo == "assinaturas"){
        setTimeout(() => {
            $("#print-perfil").load("../pags/perfil/minhasAssinaturas.php");
        }, 1);
        
    }

    if(modulo == "compras"){
        setTimeout(() => {
            $("#print-perfil").load("../pags/perfil/compras.php");
        }, 1);
    }

    if(modulo == "compras" && checkout == "ok"){
        msg("Acquisto effettuato con successo!", "confirmar");
    }

    if(modulo == "eventosCriado"){
        setTimeout(()=>{
            $("#print-perfil").load("../pags/perfil/eventos.php");
        }, 1);
    }

    if(modulo == "eventoExcluido"){
        setTimeout(() => {
            $("#print-perfil").load("../pags/perfil/eventos.php");
        }, 1);
    }

    
    
</script>


