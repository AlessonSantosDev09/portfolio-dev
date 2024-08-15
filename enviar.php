<?php

    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $telefone = addslashes($_POST["telefone"]);
    $mensagem = addslashes($_POST["mensagem"]);

    $para = "alessondev.0@gmail.com";
    $assunto = "Contato de clientes - Dev Portfólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n". "Telefone: ".$telefone."\n". "Mensagem: ".$mensagem;

    $cabeca = "From alessondev.0@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>