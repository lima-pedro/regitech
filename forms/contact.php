<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  // emails para quem será enviado o formulário
  $emailenviar = "limma.pedro@gmail.com"; // "regitech.energiasolar@gmail.com"
  $destino = $emailenviar;
  $assunto = $subject;

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= "From: $name <$email>";

  $enviaremail = mail($destino, $assunto, $message, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='5;URL=index.html'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo " <meta http-equiv='refresh' content='5;URL=index.html'>";
  }
?>
