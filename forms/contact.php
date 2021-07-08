<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address


if(isset($_POST[name]) && !isset($_POST[email])){

$nome = addcslashes($_POST[name]);
$email = addcslashes($_POST[email]);
$subject = addcslashes($_POST[subject]);

$to = "javierernesto2000@gmail.com";
$subject = "Contato - Javier Ernesto"
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:00118111343@pq.uenf.br"."\r\n".
          "Reply-To:".$email."\e\n".
          "X=Mailer:PHP/".phpversion();


 if(mail($to,$subject,$body,$header)){
   echo("Email enviado");
 }else{
   echo("Email não enviado");
 }         








}










?>
