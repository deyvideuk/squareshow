<?php 
require_once("pegarDadosUser.php");
require_once("enviarEmail.php");

if(isset($_GET['vendedor'])){
    if(isset($_GET['produto'])){
        if(isset($_GET['session_id'])){
            if($_GET['session_id'] > 20){
                if(isset($_COOKIE['id'])){
                    $_SESSION['plano'] = "Shopping";
                    $_SESSION['vendedor'] = $_GET['vendedor'];
                    $_SESSION['produto'] = $_GET['produto'];
                    $_SESSION['checkoutID'] = $_GET['session_id'];
        
                    $query = "INSERT INTO compras (id_comprador, nome_comprador, email_comprador, telefone_comprador, endereco_comprador, cidade_comprador, provincia_comprador, capzip_comprador, pais_comprador, vendedor, produto, checkoutID) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        
                    $stmt = $conexao->prepare($query);
                    $stmt->bind_param("isssssssssss", $_SESSION['id'], $_SESSION['nome'], $_SESSION['email'], $_SESSION['telefone'], $_SESSION['endereco'], $_SESSION['cidade'], $_SESSION['provincia'], $_SESSION['capzip'], $_SESSION['pais'], $_GET['vendedor'], $_GET['produto'], $_GET['session_id']);

                    $stmt->execute();
        
                    if($stmt->affected_rows > 0){
                        header('location: ?modulo=compras&checkout=ok');
                    }else{
                        header('location: ?modulo=compras&checkout=erro');
                        echo "<script>msg('Scusa! ma non è stato possibile registrare l'acquisto, contatta l'assistenza. codice errore: AFCTDROWS0000', 'error')</script>";

                        $to = $_SESSION['email'];
                        $subjects = "Squareshownet Errore - Procedura di acquisto non andata a buon fine.";
                        $msg= "
                            <body style='display:flex; flex-direction:column; justify-content:center; align-items:center; gap:20px;'>
                                <div style='width:100%; height:40px; display:flex;'>
                                    <h1>Impossibile registrare i dati di acquisto!</h1>
                                </div>

                                <div>
                                    <p>Ci scusiamo per l'inconveniente, ma purtroppo qualcosa è andato storto se hai pagato il prodotto <b>". $_GET['produto'] . "</b> Contatta l'assistenza Squareshow</p> <br>
                                    <p>Altrimenti ignora questo messaggio!</p>
                                </div>

                                <div>
                                    <a href='https://squareshow.net'>Squareshow.net</a>
                                </div>
                            </body>
                        ";

                        $msg2 = "Ci scusiamo per l'inconveniente, ma purtroppo qualcosa è andato storto se hai pagato il prodotto <b>". $_GET['produto'] . "</b> Contatta l'assistenza Squareshow. Altrimenti ignora questo messaggio!  https://squareshow.net";

                        // enviar_email($to, $subject, $msg, $msg2, $location)
                    }
        
        
                }else{
                    header('location: ?modulo=error');
                }
            }else{
                header('location: ?modulo=error');
            }
        }
    }
}


