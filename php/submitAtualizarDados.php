<?php

require_once("config.php");
require_once("requireID.php");
include_once("enviarEmail.php");


$mensagem = 0;

if(isset($_POST["atualizar-dados"])){
    $novoNome = mysqli_real_escape_string($conexao, $_POST['Nome']);
    $novoPais = mysqli_real_escape_string($conexao, $_POST['Paese']);
    $novoTelefone = isset($_POST['telefone']) ? mysqli_real_escape_string($conexao, $_POST['telefone']) : '';
    $senhaAtual = mysqli_real_escape_string($conexao, $_POST['senha-atual']);

    $senha = sha1($senhaAtual);

    if($senha == $_SESSION['senha']){
        if(!empty($novoNome)){
            if(!empty($novoTelefone)){
                $query = "UPDATE usuarios SET nome = ?, pais = ?, telefone = ? WHERE id = ?";
                $stmt = $conexao->prepare($query);
                $stmt->bind_param("ssss", $novoNome, $novoPais, $novoTelefone, $_SESSION['id']);
                $stmt->execute();

                if($stmt->affected_rows > 0){
                    header('location: ?modulo=dadosAtualizados');
                }else{
                    echo "Nenhum dado foi atualizado.";
                }

                // Resetar o statement para reutilização
                $stmt->reset();
                $conexao->close();
            }else{
                $query = "UPDATE usuarios SET nome = ? WHERE id = ?";
                $stmt = $conexao->prepare($query);
                $stmt->bind_param("ss", $novoNome, $_SESSION['id']);
                $stmt->execute();

                if($stmt->affected_rows > 0){
                    header('location: ?modulo=dadosAtualizados');
                }else{
                    echo "Nenhum dado foi atualizado.";
                }

                // Resetar o statement para reutilização
                $stmt->reset();
                $conexao->close();
            }
            }else{
                if(!empty($novoTelefone)){
                    $query = "UPDATE usuarios SET pais = ?, telefone = ? WHERE id = ?";
                    $stmt = $conexao->prepare($query);
                    $stmt->bind_param("sss",$novoPais, $novoTelefone, $_SESSION['id']);
                    $stmt->execute();

                    if($stmt->affected_rows > 0){
                        header('location: ?modulo=dadosAtualizados');
                        
                    }else{
                        echo "Nenhum dado foi atualizado.";
                    }

                    // Resetar o statement para reutilização
                    $stmt->reset();
                    $conexao->close();
                }else{
                    header('location: ?modulo=preenchaOsDados');
                    // Resetar o statement para reutilização
                    $stmt->reset();
                    $conexao->close();
                }
            }
        }else{
        echo "
            <script>
                window.location = '?modulo=senhaIncorreta';
            </script>
        ";
    }
}


if(isset($_POST['alterar-senha'])){
    if(!isset($_SESSION['emailTo'])){
        session_start();
    }

    $novaSenha = mysqli_real_escape_string($conexao, $_POST['nova-senha']);
    $repeteNovaSenha = mysqli_real_escape_string($conexao, $_POST['repete-nova-senha']);

    if( $repeteNovaSenha == $novaSenha){

        $senha = sha1($novaSenha);
        
        if(isset($_SESSION['emailTo'])){
            $query = "UPDATE usuarios SET senha = ? WHERE email = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bind_param("ss", $senha, $_SESSION['emailTo']);
            $stmt->execute();

            if($stmt->affected_rows > 0){
                session_destroy();
                header('location: ?modulo=senhaAtualizada');
                exit();
            }else{
                session_destroy();
                echo "Nenhum dado foi atualizado.";
                header('location: ?modulo=senhaAtualizada');
                exit();
            }
        }else{
            header('location: ?modulo=erroSenha');
            exit();
        }
        
    }else{
        header('location: ?modulo=erroSenha');
    }
}



if(isset($_POST["enviar-codigo"])){
    $email = mysqli_real_escape_string($conexao, $_POST["email"]);
    $sender = "squareshow@squareshow.net";
    $query = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if(!isset($_SESSION['emailTo'])){
        session_start();
        $_SESSION['codigoVerificacao'] = strtoupper(substr(uniqid(),-5));
        $_SESSION['emailTo'] = $email;
        
    }else{
        $_SESSION['codigoVerificacao'] = strtoupper(substr(uniqid(),-5));
        $_SESSION['emailTo'] = $email;
    }

    if($result->num_rows > 0){
        // O email existe, continue com o restante do código
        $to = $email;
        $subject = 'Codice di sicurezza';
        $msg = '<p>Il tuo codice di verifica è :</p>' . '<h1 style="color:green;">' . $_SESSION['codigoVerificacao'] . '</h1>';
        $msg2 = 'seu código de verificação é :' . $_SESSION['codigoVerificacao'];
        $location = '?modulo=alterarSenhaVerificacao';
        // $message = wordwrap($msg ,70,'\r\n');

        enviar_email($to, $subject, $msg, $msg2, $location);

        // Resetar o statement para reutilização
        $stmt->reset();
    }else{
        // O email não existe, redirecione para uma página de erro
        header("location: ?modulo=emailNaoExiste");
        $stmt->reset();
    }
}

if(isset($_POST["verificar-codigo"])){
    if(!isset($_SESSION['verificar-codigo'])){
        session_start();
    }
    $codigo = strtoupper(mysqli_real_escape_string($conexao, $_POST['codigo']));

    if($codigo === $_SESSION['codigoVerificacao']){
        header('location: ?modulo=f228b9f785273c13200d2629ce5dc4b595ee5a06');
    }else{
        header('location: ?modulo=codigoErrado');
    }

    // Resetar o statement para reutilização
    $stmt->reset();

    // // Fechar a conexão
    // $stmt->close();
    // $conexao->close();
}


if(isset($_POST['atualizar-dados-endereco'])){
    $endereco = mysqli_real_escape_string($conexao, $_POST['Indirizzo']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['Citta']);
    $provincia = mysqli_real_escape_string($conexao, $_POST['Provincia']);
    $capzip = mysqli_real_escape_string($conexao, $_POST['CAP/ZIP']);
    $paese = mysqli_real_escape_string($conexao, $_POST['Paese']);

    $query = "UPDATE usuarios SET Endereco = ?, cidade = ?, provincia = ?, capzip = ?, pais = ? WHERE id = ?";

    $stmt = $conexao->prepare($query);
    $stmt->bind_param("ssssss", $endereco, $cidade, $provincia, $capzip, $paese, $_SESSION['id']);
    $stmt->execute();

    if($stmt->affected_rows > 0){
        header('location: ?modulo=dadosAtualizadosEnd');
        exit(); // Termina a execução do script após redirecionar
    }else{
        header('location: ?modulo=dadosNaoAtualizadosEnd');
    }

    // Resetar o statement para reutilização
    $stmt->reset();

    // // Fechar a conexão
    // $stmt->close();
    // $conexao->close();
}


