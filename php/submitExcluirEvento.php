<?php 
    
    include("config.php");
    include_once("requireID.php");
    include_once("pegarDadosEventos.php");
    
    if(isset($_POST['excluirEventos'])){
        include_once("config.php");
    
        $id = $_POST["id_evento"];

        $query = "DELETE FROM eventos WHERE id_eventos = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bind_param("s", $id);
        $stmt->execute();

        $result_excluir = $stmt->affected_rows;


        if($result_excluir){
            header("location: ?modulo=eventoExcluido");
        }else{
            header("location: ?modulo=error");
        }

        $stmt->reset();

        if($result_eventos->num_rows > 0){

        }
        exit();
    }

    
    



