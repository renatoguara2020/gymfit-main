<?php

  require("./src/PHPMailer.php");
  require("src/SMTP.php");
  require('src/Exception.php');

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  

	
  $nome=$_POST['user_name'];
  $email=$_POST['user_email'];
  $date=date("d/m/Y");
  $mensagem = $_POST['user_message'];
//   $mensagem .= 'Esta mensagem foi enviada através do formulário<br><br>';
//   $mensagem .='<b>Nome: </b>'.$nome.'<br>';
//   $mensagem .='<b>E-Mail:</b> '.$email.'<br>';
  
    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    // $email->SMTPAuth = true;
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "renatoguara2020@gmail.com";
    $mail->Password = "agciqpqrqferdazp";
    $mail->SetFrom("renatoguara2020@gmail.com");
    $mail->Subject = $mensagem;
    $mail->Body = ($mensagem);
    $mail->AddAddress("renatoguara2019@yahoo.com");
  

    if(!$mail->Send()) {
        echo "Mailer Error:  $mail->ErrorInfo ";
     } else {
        echo "<h1>Message has been sent $email</h1>";
     }

  
  
     
    
?>