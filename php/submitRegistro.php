<?php 

if (isset($_POST["submit-registro"])) {
    $email = mysqli_real_escape_string($conexao, $_POST["Email"]);
    $nome = mysqli_real_escape_string($conexao, $_POST["Nome"]);
    $senha = mysqli_real_escape_string($conexao, $_POST["password1"]);
    $pais = mysqli_real_escape_string($conexao, $_POST["Paese"]);
    $telefone = mysqli_real_escape_string($conexao, $_POST["Telefono"]);
    $endereco = mysqli_real_escape_string($conexao, $_POST["Indirizzo"]);
    $cidade = mysqli_real_escape_string($conexao, $_POST["Citta"]);
    $provincia = mysqli_real_escape_string($conexao, $_POST["Provincia"]);
    $capzip = mysqli_real_escape_string($conexao, $_POST["CAP/ZIP"]);
    $categoria = mysqli_real_escape_string($conexao, $_POST["Categoria"]);
    // $sexo = mysqli_real_escape_string($conexao, $_POST["Sesso"]);
    $userIp = $_POST["IP_address"];
    $autorizacao = mysqli_real_escape_string($conexao, $_POST["Autorizzazione"]);

    $tipoRegistro;
    $msgAlert;

    // Validate passwords
    $verificar_query = "SELECT * FROM usuarios WHERE email = '$email'";
    $verificar_result = mysqli_query($conexao, $verificar_query);

    if (mysqli_num_rows($verificar_result) > 0) {
        // Usuário já existe, exibir uma mensagem de erro
        $msgAlert = "L'utente esiste già";
        
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
        </script> ";
    } else {

        if ($_POST["password1"] !== $_POST["password2"]) {
            $msgAlert = "Le password non corrispondono!";
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
                </script>

                <script>
                    
                    document.addEventListener('DOMContentLoaded', ()=>{
                        let interval;
                        let tela;
                        let x;
                        clearInterval(interval);
                        clearInterval(tela);
                        clearInterval(x);
                    document.getElementById('password1').style.border = '1px solid red';
                    document.getElementById('password2').style.border = '1px solid red';

                    var interval2 = setInterval(()=>{
                        document.getElementById('password1').style.borderBottom = 'none';
                        document.getElementById('password2').style.borderBottom = 'none';
                        document.getElementById('password1').style.borderBottom = '1px solid white';
                        document.getElementById('password2').style.borderBottom = '1px solid white';
                        clearInterval(interval2);
                    }, 3000);

                    
                });
            </script> ";
            
        } else {
            // Hash the password
            $senha = sha1($senha);

            // Handle file upload
            $file = $_FILES["Opere"] ?? null;
            if ($file && $file["error"] === UPLOAD_ERR_OK) {

                $pasta = "arquivos/perfil/";
                $novoNomeDoArquivo = uniqid();
                $extensao = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

                if (!in_array($extensao, ["jpg", "png", "webp","jpeg", "mp4"])) {
                    die("Tipo di file non accettato");                       
                }

                $deu_certo = move_uploaded_file($file["tmp_name"], $path);

                // Insert data into database
                $query = "INSERT INTO usuarios (nome, email, senha, pais, telefone, Endereco, cidade, provincia, capzip, categoria, fotoPerfil, pathPerfil, ip, dataCriacao, autorizacao) 
                VALUES ('$nome', '$email', '$senha', '$pais', '$telefone', '$endereco', '$cidade', '$provincia','$capzip', '$categoria', '$file[name]', '$path', '$userIp', now(), '$autorizacao')";
                $result = mysqli_query($conexao, $query);
            } else {
                // Insert data into database
                $query = "INSERT INTO usuarios (nome, email, senha, pais, telefone, Endereco, cidade, provincia, capzip, categoria, ip, dataCriacao, autorizacao) 
                VALUES ('$nome', '$email', '$senha', '$pais', '$telefone', '$endereco', '$cidade', '$provincia','$capzip', '$categoria', '$userIp', NOW(),'$autorizacao')";
                $result = mysqli_query($conexao, $query);
            }

            if ($result) {
                echo " 
                <script>
                    document.addEventListener('DOMContentLoaded', ()=>{
                        $('#print').load('pags/init.php');
                        openLogin('open');
                        let interval;
                        let tela;
                        let x;
                        clearInterval(interval);
                        clearInterval(tela);
                        clearInterval(x);
                    })
                </script>";
                header("Location: ?registro=formSubmitedOK");
            } else {
                $msgAlert = "Errore durante l'inserimento dei dati: " . mysqli_error($conexao);
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
}