<?php 
    
    include("config.php");
    include_once("requireID.php");
    include_once("pegarDadosEventos.php");
    
    if(isset($_POST['submitChangeEventos'])){
    
        // Tratamento de upload de arquivos
        $file = $_FILES["change-capa-eventos"] ?? null;
        if ($file && $file["error"] === UPLOAD_ERR_OK) {
            $pasta = "arquivos/eventos/capa/";
            $novoNomeDoArquivo = uniqid();
            $extensao = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
            $_GLOBALS['nomeCapa'] = $file["name"];
            $_GLOBALS['pathCapa'] = $pasta . $novoNomeDoArquivo . "." . $extensao;
    
            if (!in_array($extensao, ["jpg", "png", "webp", "jpeg"])) {
                die("Tipo di file non accettato");
            }
    
            $deu_certo = move_uploaded_file($file["tmp_name"], $_GLOBALS['pathCapa']);
    
        }
        
        $file = $_FILES["change-banner-eventos"] ?? null;
        if ($file && $file["error"] === UPLOAD_ERR_OK) {
                $pasta = "arquivos/eventos/banner/";
                $novoNomeDoArquivo = uniqid();
                $extensao = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
                $_GLOBALS['nomeBanner'] = $file["name"];
                $_GLOBALS['pathBanner'] = $pasta . $novoNomeDoArquivo . "." . $extensao;
    
                if (!in_array($extensao, ["jpg", "png", "webp", "jpeg"])) {
                    die("Tipo di file non accettato");
                }
    
                $deu_certo = move_uploaded_file($file["tmp_name"], $_GLOBALS['pathBanner']);
            }
    
        // Código para mover os arquivos e inserir os dados no banco de dados
        // ...
    
        // Seu código para inserir os dados no banco de dados
        $id_usuario = $_SESSION["id"] ?? null;
        $titulo_eventos = mysqli_real_escape_string($conexao, $_POST['titulo_eventos']);
        $dia_eventos = mysqli_real_escape_string($conexao, $_POST['dia_eventos']);
        $mes_eventos = mysqli_real_escape_string($conexao, $_POST['mes_eventos']);
        $ano_eventos = mysqli_real_escape_string($conexao, $_POST['ano_eventos']);
        $local_eventos = mysqli_real_escape_string($conexao, $_POST['local_eventos']);
        $descricao_eventos = mysqli_real_escape_string($conexao, $_POST['descricao_eventos']);
        $endereco_eventos = mysqli_real_escape_string($conexao, $_POST['indirizzo']);
        $cidade_eventos = mysqli_real_escape_string($conexao, $_POST['Citta']);
        $provincia_eventos = mysqli_real_escape_string($conexao, $_POST['Provincia']);
        $capzip_eventos = mysqli_real_escape_string($conexao, $_POST['Capzip']);
        $pais_eventos = $_POST['Paese'];
        $preco_eventos = $_POST['preco_eventos'];
        $horario = $_POST['horario'];
        $link_endereco_eventos = mysqli_real_escape_string($conexao, $_POST['link_endereco_eventos']);
    
        $query = "INSERT INTO eventos (id_usuario, capa_nome_eventos, capa_path_eventos , banner_nome_eventos, banner_path_eventos, titulo_eventos, dia_eventos, mes_eventos, ano_eventos, local_eventos, descricao_eventos, endereco_eventos, cidade_eventos, provincia_eventos, capzip_eventos, pais_eventos, preco_eventos, hora_evento, link_endereco_eventos) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
            $stmt = $conexao->prepare($query);
            $stmt->bind_param("sssssssssssssssssss", $id_usuario, $_GLOBALS['nomeCapa'], $_GLOBALS['pathCapa'] , $_GLOBALS['nomeBanner'], $_GLOBALS['pathBanner'], $titulo_eventos, $dia_eventos, $mes_eventos , $ano_eventos , $local_eventos, $descricao_eventos , $endereco_eventos, $cidade_eventos, $provincia_eventos, $capzip_eventos , $pais_eventos, $preco_eventos, $horario, $link_endereco_eventos);
    
            $stmt->execute();
    
        // Redirecionamento após a inserção
        header("Location: ?modulo=eventosCriado");
        exit(); // Certifique-se de sair após o redirecionamento
}

    
    



