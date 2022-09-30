<?php

if(isset($_POST['email']) && !empty()){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$assunto = addcslashes($_POST['subject']);
$mensagem = addcslashes($_POST['message']);

$to = "contato@thiagonet.com";
$subject = "Site-Contato = ThiagoNET";
$body = "Nome: ".$nome. " \r\n "
        "Email: ".$email. " \r\n "
        "Assunto: ".$assunto. " \r\n "
        "Mensagem: ".$mensagem. " \r\n ";
$header = "From: contato@thiagonet.com"."\r\n"
        ."Reply-To:".$email."\r\n"
        ."x=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("Erro! ao enviar email")";"
}

}
?>
