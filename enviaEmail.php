<?
  /*
  Classe PHP com função de envio de informações para e-mail apartir do formulário
  Autor: Erivando Sena <erivandosena@gmail.com>  
  Data: 23/08/2010
  Direitos autorais: Use livremente mantendo estes comentários
  */
?>

<?php
$contato_nome = $_POST['nome'];
$contato_email = $_POST['email'];
$contato_telefone = $_POST['telefone'];
$contato_estado = $_POST['estado'];
$contato_mensagem = $_POST['mensagem'];

if( $contato_nome != "" ) {
	$sender = $contato_email;
	$receiver = "erivandosena@gmail.com";
 	$header = "MIME-Version: 1.0\r\n";
    $header = "Content-Type: text/html; charset=iso-8859-1\r\n";
	$email_body = "===============[ Formulário de Contato - Website ]=============== \n
Nome:		$contato_nome 
E-mail:		$contato_email
Telefone:	$contato_telefone 
Estado:		$contato_estado
	
Mensagem: \n$contato_mensagem \n
================================================================== \n";	

	if( mail( $receiver, "Fale Conosco de $contato_nome", $email_body) ) {
		//Aqui eu envio uma copia do e-mail enviado para o remetende do formulario 
		mail( $contato_email, "Seu Fale Conosco - Cópia do formulário enviado", $email_body);
		include ("formularioSucesso.php"); 
	}
	else
		{
			include ("formularioErro.php"); 
		}
}
else
	{
		include ("formularioErro.php"); 
	}
?>