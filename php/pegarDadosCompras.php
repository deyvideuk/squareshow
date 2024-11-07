<?php 
    require_once("config.php");
    require_once("protection.php");
    require_once("requireID.php");
    require_once("pegarDadosUser.php");

    $stmt = $conexao->prepare("SELECT * FROM compras WHERE id_comprador = ?");
    $stmt->bind_param("s", $_SESSION['id']);
    $stmt->execute();
    $result_compras = $stmt->get_result();

   