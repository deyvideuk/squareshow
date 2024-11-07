<script src="../js/menu.js"></script>
<script src="../js/getPerfil.js"></script>

<?php 

    echo"
            <script type='text/javascript'>
                document.addEventListener('DOMContentLoaded', function (){
                    openLogin('close');
                })
            </script>
        "; 
?>

<li id="area-login-pai">
    <div class="area-btn-login logado" onclick="openLogin()">
        <div class="area-icone-usuario">
            <img id="btn-login" src="img/icones/entrar-avatar.png" alt="">
        </div>
        <div class="area-btn-usuario">
            <h5>Ciao, <?php echo $_SESSION['nome']?></h5>
            <div>
                <strong>Minha Conta</strong>
                <img id="jogar" src="img/icones/jogar.png" alt="">
            </div>
        </div>
        
    </div>

    <div id="area-login" class="login-logado">
        <div class="logado">
            <div class="usuario">
                <div class="retrato-usuario">
                    <div class="foto-perfil">
                        <img src="<?php echo $_SESSION['pathPerfil'] == "" ? 'img/icones/no-retrato.png' : $_SESSION['pathPerfil'] ?>" id="imgProfile" alt="Image Profile">

                        <div class="change-perfil" id="preview"></div>

                        <div class="opt-change">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div>
                                    <button type="submit" name="removePerfil">Rimuovi immagine</button>
                                </div>
                                <div>
                                    <label for="change-perfil" id="label-change-perfil">Cambia immagine</label>
                                    <input type="file" name="change-perfil" id="change-perfil" onchange="changePerfil(this)" accept="png,jpg,jpeg,webp">
                                </div>
                                <button type="submit" name="submitChangePerfil" id="change-confirma">Confermare</button>
                            </form>
                        </div>

                    </div>
                    <div class="categoria-usuario Admin">
                        <p>
                            <?php echo $_SESSION['categoria'] ?>
                        </p>
                    </div>
                </div>
                <div class="texto">
                    <p>
                        Benvenuti su Squareshow.net
                        <br>
                        <span>
                            <?php echo $_SESSION['nome']?>
                        </span>
                    </p>
                </div>
            </div>
 
            <div class="sair">

                <div class="area-painel">
                    <!-- <a href="#">Pannello di controllo</a> -->
                </div>

                <form action="" method="POST" id="submit-loggout">
                    <label for="loggout"></label>
                    <input type="submit" name="submit-loggout" id="loggout" value="Uscire">
                </form>
            </div>

            <div class="opcoes">
                <div class="area-opcoes d-none">
                    <div class="icone">
                        <img src="img/icones/cesta-de-compras.png" alt="">
                    </div>
                    <div class=" box-opt pedidos">
                        <a href="#">I miei corsi</a>
                    </div>
                </div>
                <div class="area-opcoes">
                    <div class="box-opt icone">
                        <img src="img/icones/gerenciamento-de-equipe.png" alt="">
                    </div>
                    <div class="box-opt ajuda">
                        <a href="?modulo=usuarios">Gestisci gli utenti</a>
                    </div>
                </div>
            </div>

            <div class="opcoes" style="border: none !important;">
                <div class="area-opcoes" >
                    <div class="icone">
                        <img src="img/icones/entrar-avatar.png" alt="">
                    </div>
                    <div class="box-opt conta">
                        <button id="perfil-usuario">Il mio conto</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</li>


<script>
    // ajax
    if(typeof countPerfil == "undefined" || typeof optChange == "undefined"){
            var countPerfil = 0;
            var optChange = document.querySelector('.opt-change');
            var botaoRemove = document.querySelector('#remove');
            var botaoChange = document.querySelector('#change');
            
        };

        

        $(".change-perfil").click(()=>{
            if(countPerfil < 1){
                countPerfil = 1;
                optChange.style.display = "flex";
            }else{
                countPerfil = 0;
                optChange.style.display = "none";
            }
        });

        $("#perfil-usuario").click(()=>{
            $("#print").load("../pags/perfil.php");
            toTop(0);
            openLogin('close');
            closeMenu();
            botaoHome.removeAttribute("class", "active");
            botaoArtisti.removeAttribute("class", "active");
            botaoFormazione.removeAttribute("class", "active");
            botaoEventi.removeAttribute("class", "active");
            botaoTariffe.removeAttribute("class", "active");
            botaoContatti.removeAttribute("class", "active");
        });

    // ajax
</script>
