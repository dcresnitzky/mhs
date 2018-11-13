<?php
$nome =  utf8_decode($_POST['nome']);
$mensagem =  utf8_decode($_POST['mensagem']);
$email = $_POST['email'];
$assunto =  utf8_decode($_POST['assunto']);

// adicione seu e-mail na linha abaixo
$recipient = "mhsglobal@mhsglobal.com.br";

$subject = "formulário de contato";

$msg = "nome: $nome \n\nE-mail: $email \n\nAssunto: $assunto \n\nMensagem: $mensagem";

// adicione seu e-mail na linha abaixo
$mailheaders = "mhsglobal@mhsglobal.com.br";

$ok = mail("$recipient", "$subject", "$msg", "$mailheaders");
if($ok){
	echo '&ok=1&';
}else {
	echo '&ok=2&';
}
?>

$mensagem = ‘<b>Mensagem: </b>’ . “<br>”;