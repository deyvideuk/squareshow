<?php
include_once "config.php";
include_once "requireID.php";

$stmt = $conexao->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->bind_param("s", $_SESSION['id']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Do something with the results
    if(!isset($_SESSION)) {
        // $time = 2 * 60 * 60; // 2 Horas
        // $time = 60 * 60 * 24 * 365 * 100; // 100 Anos;
        session_set_cookie_params(PHP_INT_MAX);
        session_start();
    }

    $usuario = $result->fetch_assoc();

    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['email'] = $usuario['email'];
    $_SESSION['senha'] = $usuario['senha'];
    $_SESSION['pais'] = $usuario['pais'];
    $_SESSION['telefone'] = $usuario['telefone'];
    $_SESSION['endereco'] = $usuario['Endereco'];
    $_SESSION['cidade'] = $usuario['cidade'];
    $_SESSION['provincia'] = $usuario['provincia'];
    $_SESSION['capzip'] = $usuario['capzip'];
    $_SESSION['categoria'] = $usuario['categoria'];
    $_SESSION['fotoPerfil'] = $usuario['fotoPerfil'];
    $_SESSION['pathPerfil'] = $usuario['pathPerfil'];
    $_SESSION['userIp'] = $usuario['ip'];
    $_SESSION['dataCriacao'] = $usuario['dataCriacao'];
    $_SESSION['autorizacao'] = $usuario['autorizacao'];
    $_SESSION['plano'] = $usuario['plano'];
    $_SESSION['checkoutID'] = $usuario['checkoutID'];

    setcookie('id', $usuario['id'], time() + 86400 * 30, "/"); // 86400 = 1 day
    
    
}
    // Resetar o statement para reutilização
    $stmt->reset();

    // Fechar a conexão / comentado pois estava dando erro: Erro não detectado: o objeto mysqli já está fechado em C:\xampp\htdocs\SquareShow\php\submitChangePerfil.php:30 
    // $stmt->close();
    // $conexao->close();