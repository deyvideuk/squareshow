<?php 

if(isset($_GET['plano'])){
    if(isset($_GET['session_id'])){
        if($_GET['session_id'] > 20){
            if(isset($_COOKIE['id'])){
                $_SESSION['checkoutID'] = $_GET['session_id'];
                $_SESSION['plano'] = $_GET['plano'];
    
                $query = "UPDATE usuarios SET checkoutID = ?, plano = ? WHERE id = ?";
    
                $stmt = $conexao->prepare($query);
                $stmt->bind_param("sss", $_SESSION['checkoutID'], $_SESSION['plano'], $_SESSION['id']);
                $stmt->execute();
    
                if($stmt->affected_rows > 0){
                    header('location: ?modulo=assinaturas');
                }else{
                    header('location: ?modulo=main');
                    echo "<script>msg('Errore di operazione, consultare il supporto del sito web. codice errore: AFCTDROWS00', 'error')</script>";
                }
    
    
            }else{
                header('location: ?modulo=error');
            }
        }else{
            header('location: ?modulo=error');
        }
    }
}


