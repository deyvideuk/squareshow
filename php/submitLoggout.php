<?php
    if(isset($_POST['submit-loggout'])){
        session_unset();
        session_destroy();
        $expire = 365*24*3600; //1 ano
        setcookie("id", "", time()-$expire, "/", ""); 
        header('Location: ?modulo=main'); 
        echo "
            <script>
                openLogin('close');
            </script>";
    };
