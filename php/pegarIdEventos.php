<?php

    if(isset($_POST['evento'])){
        $id = $_POST['dados_evento'];

        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['id_evento'] = $id;
        echo $_SESSION['id_evento'];

        header('location: ?modulo=eventos&id=' . $_SESSION['id_eventos']);

    }
    
    
