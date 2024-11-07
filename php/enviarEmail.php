<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    // Instância da classe

    function enviar_email($to, $subject, $msg, $msg2, $location){
        $mail = new PHPMailer(true);
            try{
                // Configurações do servidor
                $mail->isSMTP();        //Devine o uso de SMTP no envio
                $mail->SMTPAuth = true; //Habilita a autenticação SMTP
                $mail->Username   = 'squareshownet@gmail.com';
                $mail->Password   = 'j b q m u q a g m h a k h i w n';
                // Criptografia do envio SSL também é aceito
                $mail->SMTPSecure = 'tls';
                // Informações específicadas pelo Google
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                // Define o remetente
                $mail->setFrom('squareshownet@gmail.com', 'Squareshow');
                // Define o destinatário
                $mail->addAddress($to, 'Your Code is Here');
                // Conteúdo da mensagem
                $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
                $mail->Subject = $subject;
                $mail->Body    = $msg;
                $mail->AltBody = $msg2;
                // Enviar
                $mail->send();
                
                if($location){
                    header('location: ' . $location);
                }
            }
            catch (Exception $e)
                {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
    }
        

    