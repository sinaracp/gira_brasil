<?php
  if(isset($_POST['submit'])) {
    $to = "info@girabrasil.de";
    $service_field = $_POST['service'];
    $name_field = $_POST['name'];
    $email_field = $_POST['email'];
    $phone_field = $_POST['phone'];
    $message = $_POST['message'];
    $headers = "Content-Type: text/plain; charset=UTF-8";

    $headers = "Content-Type: text/plain; charset=UTF-8" . "\r\n" .
               "From: info@girabrasil.de" . "\r\n" .
               "BCC: sinaracp@gmail.com";

    $subject = "$name_field / $service_field";
    $body = "Nome: $name_field\nE-Mail: $email_field\nTelefone: $phone_field \n\nMensagem:\n $message";


    mail($to, $subject, $body, $headers);
    header("Location: http://www.girabrasil.de/pt-br/index-carousel.html");
  } else {
    header("Location: http://www.girabrasil.de/pt-br/contato.html");
  }

?>
