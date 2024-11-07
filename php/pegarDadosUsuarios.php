<?php
include_once "config.php";
include_once "requireID.php";

$stmt = $conexao->prepare("SELECT * FROM usuarios ORDER BY id ASC");
$stmt->execute();
$result_usuarios = $stmt->get_result();


    