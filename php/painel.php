
<?php if(!isset($_SESSION['id'])): ?>
    <li id="area-login-pai">
        <div class="area-btn-login" onclick="openLogin()">
            <div class="area-icone-usuario">
                <img id="btn-login" src="img/icones/entrar-avatar.png" alt="">
            </div>
            <div class="area-jogar">
                <img id="jogar" src="img/icones/jogar.png" alt="">
            </div>
        </div>

        <div id="area-login" class="login">
            
            <form action="" name="formLogin" method="POST" id="form-login">
                <h3>Acesso</h3>
                <p id="msg"></p> 
                <div class="area-input-login">
                    <img src="img/icones/e-mail-login.png" alt="">
                    <input type="email" name="login" id="login" placeholder="E-Mail" autocomplete="on" required>
                </div>
                <div class="area-input-login">
                    <img src="img/icones/cadeado.png" alt="">
                    <input type="password" name="password" id="password" placeholder="Password" minlength="6" maxlength="20" autocomplete="on" onkeypress="isEnter()" required>
                    <div id="olho-login" onclick="showPassword(1)">
                        <img id="olho" src="img/icones/olho-fechado-preto.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="botaoLogin">
                        <button id="botaoEsqueceuSenha">Ho dimenticato la password</button>
                    </div>
                    <div class="botaoLogin">
                        <button class="botaoIscriviti">Iscriviti</button>
                    </div>
                    <div class="botaoLogin">
                        <button id="botaoRegistro">Registrati</button>
                    </div>
                </div>
                <div class="botao">
                    <input type="submit" name="submit-login" id="submit-login" value="Login">
                </div>
            </form>
        </div>
    </li>

<?php else: ?>

    <?php if ($_SESSION['categoria'] == 'Admin'): ?>
        <?php
            include_once("painelAdmin.php");    
        ?>
    </li>   

    <?php elseif ($_SESSION['categoria'] == 'Alunno/Acquirente'): ?>
        <?php
            include_once("painelAlunno.php");    
        ?>
    </li>

    <?php elseif ($_SESSION['categoria'] == 'Artisti'): ?>
        <?php
            include_once("painelArtisti.php");    
        ?>
    </li>


    <?php elseif ($_SESSION['categoria'] == 'Maestri'): ?>
        <?php
            include_once("painelMaestri.php");    
        ?>
    </li>

    <?php elseif ($_SESSION['categoria'] == 'Collezionista'): ?>
        <?php
            include_once("painelCollezionista.php");    
        ?>
    </li>

    <?php endif; ?>

<?php endif; ?>