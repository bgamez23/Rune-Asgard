<?php

//iremos declarar as variaveis que recebemos pelo método post

//em alguns servidores nem precisamos declarar, depende do register_global=on ou =off

$nome=$_POST[nome];

$email=$_POST[email];

$assunto=$_POST[assunto];

$mensagem=$_POST[mensagem];



//agora vamos enviar todos esses dados usando a função mail

mail("yousseefs@gmail.com","$assunto","

Nome: $nome

Email: $email

Assunto: $assunto

Mensagem: $mensagem","FROM:$nome<$email>");



echo "sua mensagem foi enviada com sucesso!"; //aí mostramos no navegador da pessoa que enviou o email uma mensagem 



?>
