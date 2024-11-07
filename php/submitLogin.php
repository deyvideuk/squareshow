<?php 
    if(isset($_POST["submit-login"])){
        $email = mysqli_real_escape_string($conexao, $_POST["login"]);
        $senha = sha1(mysqli_real_escape_string($conexao, $_POST["password"]));

        $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha);
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
            $_SESSION['checkoutID'] = $usuario['checkoutID'];
            $_SESSION['plano'] = $usuario['plano'];

            setcookie('id', $usuario['nome'], time() + 86400 * 30, "/"); // 86400 = 1 day
        } else{           
            echo "
                <script>
                    document.addEventListener('DOMContentLoaded', function (){
                        openLogin('open');
                        const login = document.getElementById('login');
                        const password = document.getElementById('password');
                        const msg = document.getElementById('msg');
                        login.style.border = '1px solid red';
                        password.style.border = '1px solid red';
                        msg.innerHTML = 'Impossibile accedere! Email o password sbagliate';
                    })
                </script>
            ";
        }

        // Resetar o statement para reutilização
        $stmt->reset();

        // Fechar a conexão
        // $stmt->close();
        // $conexao->close();
    }
