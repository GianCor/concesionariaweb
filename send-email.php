<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php'
  require 'phpmailer/src/PHPMailer'
  require 'phpmailer/src/SMTP.php'

  if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAut = true;
    $mail->Username = 'crecermailer@gmail.com';
    $mail->Password = 'mabdjqbhdlxxtcmc';
    $mail->Port = 465;

    $mail->setFrom('crecermailer@gmail.com')
    
    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];
    $mail->send();

    echo
    "
    <script>
      alert('Enviado!');
      document.location.href = 'index.html'
    </script>
    "
  }
?>