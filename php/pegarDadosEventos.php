<?php
include_once "config.php";
include_once "requireID.php";


$stmt = $conexao->prepare("SELECT * FROM eventos ORDER BY id_eventos DESC");
$stmt->execute();
$result_eventos = $stmt->get_result();


