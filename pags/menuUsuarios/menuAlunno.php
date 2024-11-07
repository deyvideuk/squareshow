<li>
    <button id="botaoConta">Il mio conto</button>
</li>
<li>
    <button id="botaoEndereco" >Il mio indirizzo</button>
</li>
<!-- <li>
    <button id="botaoAssinatura" >Le mie sottoscrizioni</button>
</li> -->
<!-- <li>
    <button id="botaoEventos" >Eventis</button>
</li> -->
<li>
    <button id="botaoCursos" >I miei corsi</button>
</li>
<li>
    <button id="botaoCompras" >La mia spesa</button>
</li>

<script>

    if(typeof botaoConta == "undefined"){
        var botaoConta = document.querySelector("#botaoConta");
        var botaoEndereco = document.querySelector("#botaoEndereco");
        // var botaoAssinatura = document.querySelector("#botaoAssinatura");
        // var botaoEventos = document.querySelector("#botaoEventos");
        var botaoCursos = document.querySelector("#botaoCursos");
        var botaoCompras = document.querySelector("#botaoCompras");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            var botaoGerenciarUsuarios = document.querySelector("#botaoGerenciarUsuarios");
        <?php endif;?>
    }else{
        botaoConta = document.querySelector("#botaoConta");
        botaoEndereco = document.querySelector("#botaoEndereco");
        // // botaoAssinatura = document.querySelector("#botaoAssinatura");
        // botaoEventos = document.querySelector("#botaoEventos");
        botaoCursos = document.querySelector("#botaoCursos");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            var botaoGerenciarUsuarios = document.querySelector("#botaoGerenciarUsuarios");
        <?php endif;?>
    }

    botaoConta.removeAttribute("class", "selected");
    botaoEndereco.removeAttribute("class", "selected");
    // botaoAssinatura.setAttribute("class", "selected");
    // botaoEventos.removeAttribute("class", "selected");
    botaoCursos.removeAttribute("class", "selected");
    botaoCompras.removeAttribute("class", "selected");
    <?php if($_SESSION['categoria'] == "Admin"):?>
        botaoGerenciarUsuarios.removeAttribute("class", "selected");
    <?php endif;?>

</script>

<!-- -==============================================================================- -->

<script>
    var elemento = document.getElementsByClassName('carrossel');

    if (!elemento) {
        clearInterval(interval);
    }

    if(typeof botaoConta == "undefined"){
        var botaoConta = document.querySelector("#botaoConta");
        var botaoEndereco = document.querySelector("#botaoEndereco");
        // // var botaoAssinatura = document.querySelector("#botaoAssinatura");
        // var botaoEventos = document.querySelector("#botaoEventos");
        var botaoCursos = document.querySelector("#botaoCursos");
        var botaoCompras = document.querySelector("#botaoCompras");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            var botaoGerenciarUsuarios = document.querySelector("#botaoGerenciarUsuarios");
        <?php endif;?>
    }else{
        botaoConta = document.querySelector("#botaoConta");
        botaoEndereco = document.querySelector("#botaoEndereco");
        // // botaoAssinatura = document.querySelector("#botaoAssinatura");
        // botaoEventos = document.querySelector("#botaoEventos");
        botaoCursos = document.querySelector("#botaoCursos");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            var botaoGerenciarUsuarios = document.querySelector("#botaoGerenciarUsuarios");
        <?php endif;?>
    }

    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    // botaoEventos.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    botaoCompras.removeAttribute("class", "selected");
    <?php if($_SESSION['categoria'] == "Admin"):?>
        botaoGerenciarUsuarios.removeAttribute("class", "selected");
    <?php endif;?>

    $("#print-perfil").load("pags/perfil/conta.php");
    botaoConta.setAttribute("class", "selected");
    botaoEndereco.removeAttribute("class", "selected");
    // botaoAssinatura.removeAttribute("class", "selected");
    // botaoEventos.removeAttribute("class", "selected");
    botaoCursos.removeAttribute("class", "selected");
    botaoCompras.removeAttribute("class", "selected");
    <?php if($_SESSION['categoria'] == "Admin"):?>
        botaoGerenciarUsuarios.removeAttribute("class", "selected");
    <?php endif;?>


    $("#botaoConta").click(()=>{
        $("#print-perfil").load("pags/perfil/conta.php");
        botaoConta.setAttribute("class", "selected");
        botaoEndereco.removeAttribute("class", "selected");
        // botaoAssinatura.removeAttribute("class", "selected");
        // botaoEventos.removeAttribute("class", "selected");
        botaoCursos.removeAttribute("class", "selected");
        botaoCompras.removeAttribute("class", "selected");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            botaoGerenciarUsuarios.removeAttribute("class", "selected");
        <?php endif;?>

        toTop(250);
    });
    $("#botaoEndereco").click(()=>{
        $("#print-perfil").load("pags/perfil/endereco.php");
        botaoConta.removeAttribute("class", "selected");
        botaoEndereco.setAttribute("class", "selected");
        // botaoAssinatura.removeAttribute("class", "selected");
        // botaoEventos.removeAttribute("class", "selected");
        botaoCursos.removeAttribute("class", "selected");
        botaoCompras.removeAttribute("class", "selected");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            botaoGerenciarUsuarios.removeAttribute("class", "selected");
        <?php endif;?>

        toTop(250);
    });
    $("#botaoAssinatura").click(()=>{
        $("#print-perfil").load("pags/perfil/minhasAssinaturas.php");
        botaoConta.removeAttribute("class", "selected");
        botaoEndereco.removeAttribute("class", "selected");
        // botaoAssinatura.setAttribute("class", "selected");
        // botaoEventos.removeAttribute("class", "selected");
        botaoCursos.removeAttribute("class", "selected");
        botaoCompras.removeAttribute("class", "selected");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            botaoGerenciarUsuarios.removeAttribute("class", "selected");
        <?php endif;?>

        toTop(250);
    });
    $("#botaoEventos").click(()=>{
        $("#print-perfil").load("pags/perfil/eventos.php");
        botaoConta.removeAttribute("class", "selected");
        botaoEndereco.removeAttribute("class", "selected");
        // botaoAssinatura.removeAttribute("class", "selected");
        // botaoEventos.setAttribute("class", "selected");
        botaoCursos.removeAttribute("class", "selected");
        botaoCompras.removeAttribute("class", "selected");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            botaoGerenciarUsuarios.removeAttribute("class", "selected");
        <?php endif;?>

        toTop(250);
    });
    $("#botaoCursos").click(()=>{
        $("#print-perfil").load("pags/perfil/cursos.php");
        botaoConta.removeAttribute("class", "selected");
        botaoEndereco.removeAttribute("class", "selected");
        // botaoAssinatura.removeAttribute("class", "selected");
        // botaoEventos.removeAttribute("class", "selected");
        botaoCursos.setAttribute("class", "selected");
        botaoCompras.removeAttribute("class", "selected");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            botaoGerenciarUsuarios.removeAttribute("class", "selected");
        <?php endif;?>

        toTop(250);
    });
    $("#botaoCompras").click(()=>{
        $("#print-perfil").load("pags/perfil/compras.php");
        botaoConta.removeAttribute("class", "selected");
        botaoEndereco.removeAttribute("class", "selected");
        // botaoAssinatura.removeAttribute("class", "selected");
        // botaoEventos.removeAttribute("class", "selected");
        botaoCursos.removeAttribute("class", "selected");
        botaoCompras.setAttribute("class", "selected");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            botaoGerenciarUsuarios.removeAttribute("class", "selected");
        <?php endif;?>

        toTop(250);
    });
    $("#botaoGerenciarUsuarios").click(()=>{
        $("#print").load("pags/perfil/usuarios.php");
        botaoConta.removeAttribute("class", "selected");
        botaoEndereco.removeAttribute("class", "selected");
        // botaoAssinatura.removeAttribute("class", "selected");
        // botaoEventos.removeAttribute("class", "selected");
        botaoCursos.removeAttribute("class", "selected");
        botaoCompras.removeAttribute("class", "selected");
        <?php if($_SESSION['categoria'] == "Admin"):?>
            botaoGerenciarUsuarios.removeAttribute("class", "selected");
        <?php endif;?>

        toTop(250);
    });
</script>