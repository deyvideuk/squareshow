
<?php 
    require_once("requireID.php");

     // Certifique-se de iniciar a sessão antes de usar $_SESSION
    if (isset($_POST["submitChangePerfil"])) {
        require_once('config.php'); // Certifique-se de incluir o arquivo de conexão com o banco de dados.
        include_once("pegarDadosUser.php"); // Certifique-se de verificar os dados do usuario.

        //$conexao = conectar(); // Função para conectar ao banco de dados

        if ($_SESSION['pathPerfil'] == "") {
            $file = $_FILES["change-perfil"] ?? null;
            // var_dump($file["name"]);

            if ($file && $file["error"] === UPLOAD_ERR_OK) {
                $pasta = "arquivos/perfil/";
                $novoNomeDoArquivo = uniqid();
                $extensao = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
                $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

                if (!in_array($extensao, ["jpg", "png", "webp", "jpeg", "mp4", "heif", "gif"])) {
                    die("Tipo di file non accettato");
                }

                $deu_certo = move_uploaded_file($file["tmp_name"], $path);

                // Consulta preparada para inserir dados com segurança

                $query = "UPDATE usuarios SET fotoPerfil = ? , pathPerfil = ? WHERE id = ?";
                $stmt = mysqli_prepare($conexao, $query);
                mysqli_stmt_bind_param($stmt, "sss", $file['name'], $path, $_SESSION['id']);
                $result = mysqli_stmt_execute($stmt);
            }

            if ($result) {
                // header("Location: https://squareshow.net?modulo=changePerfilOK");
                header("Location: ?modulo=changePerfilOK");
                // Resetar o statement para reutilização
                $stmt->reset();

                // Fechar a conexão
                // $stmt->close();
                // $conexao->close();
            } else {
                $msgAlert = "Erro durante l'inserimento dei dati: " . mysqli_error($conexao);
                echo "
                <script>
                    document.addEventListener('DOMContentLoaded', ()=>{
                        $('#print').load('pags/iscriviti.php');
                        let interval;
                        let tela;
                        let x;
                        clearInterval(interval);
                        clearInterval(tela);
                        clearInterval(x);
                    })
                </script>";
            }
        } else {
            // Lógica para atualizar o perfil existente
            

            $file = $_FILES["change-perfil"] ?? null;
            $SamePath = $_SESSION['pathPerfil'];
            // var_dump($file["name"]);

            if ($file && $file["error"] === UPLOAD_ERR_OK) {

                
                $deu_certo = move_uploaded_file($file["tmp_name"], $SamePath);

                // Consulta preparada para inserir dados com segurança

                $query = "UPDATE usuarios SET fotoPerfil = ? , pathPerfil = ? WHERE id= ?";
                $stmt = mysqli_prepare($conexao, $query);
                mysqli_stmt_bind_param($stmt, "sss", $file['name'], $SamePath, $_SESSION['id']);
                $result = mysqli_stmt_execute($stmt);
            }

            if ($result) {
                // header("Location: https://squareshow.net?modulo=changePerfilOK");
                header("Location: ?modulo=changePerfilOK");
                // Resetar o statement para reutilização
                $stmt->reset();

                // Fechar a conexão
                // $stmt->close();
                // $conexao->close();
            } else {
                $msgAlert = "Erro durante l'inserimento dei dati: " . mysqli_error($conexao);
                echo "
                <script>
                    document.addEventListener('DOMContentLoaded', ()=>{
                        $('#print').load('pags/iscriviti.php');
                        let interval;
                        let tela;
                        let x;
                        clearInterval(interval);
                        clearInterval(tela);
                        clearInterval(x);
                    })
                </script>";
            }
        }
    }

    else if(isset($_POST["removePerfil"])){
        $SamePath = $_SESSION['pathPerfil'];

        if(file_exists($SamePath)){

            unlink($SamePath);

            $query = "UPDATE usuarios SET fotoPerfil = NULL , pathPerfil = NULL WHERE id= ?";
            $stmt = mysqli_prepare($conexao, $query);
            mysqli_stmt_bind_param($stmt, "s", $_SESSION['id']);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                header("Location: ?modulo=changePerfilOK");
                // Resetar o statement para reutilização
                $stmt->reset();

                // Fechar a conexão
                // $stmt->close();
                // $conexao->close();
            } else {
                $msgAlert = "Erro durante l'inserimento dei dati: " . mysqli_error($conexao);
                echo "
                <script>
                    document.addEventListener('DOMContentLoaded', ()=>{
                        $('#print').load('pags/iscriviti.php');
                        let interval;
                        let tela;
                        let x;
                        clearInterval(interval);
                        clearInterval(tela);
                        clearInterval(x);
                    })
                </script>";
            }
        }
    }
?>