<?php
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['message']);

    $to = "lifemar.nautica@gmail.com";
    $subject = "Contato - Lifemar Náutica";
    $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email. "\r\n".
            "Assunto: ".$assunto. "\r\n".
            "Mensagem: ".$mensagem;
    $header = "From: lifemar.nautica@gmail.com"."\r\n".
                "Reply-To:".$email."\e\n".
                "X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){

        echo("Email enviado com sucesso");

    }else{

        echo("Email não pode ser enviado");
    }

?>