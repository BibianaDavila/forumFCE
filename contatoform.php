<?php
	header ('Content-type: text/html; charset=UTF-8');

	if (isset($_POST["msg"])) 
	{
		$msg = nl2br(htmlspecialchars($_POST["msg"]));
		$to      = 'Destinatario <gilpoa2013@gmail.com>';
		$subject = 'Formulario de Contato Fórum FCE';
		$message = 'Nome: ' . $_POST["nome"] . "<br>" .
				   'Email: ' . $_POST["email"] . "<br>" .
				   'Mensagem: ' . "<br>" . $msg .'';

		$headers = 'Content-type: text/html; charset=utf-8' . "<br>" .
				   'From: No Reply <no_reply@ufrgs.br> ' . "<br>" .
		           'Reply-To: '. $_POST["email"] . "<br>" .
		           //'Bcc: ti@cegov.ufrgs.br' . "<br>" .
		           'X-Mailer: PHP/' . phpversion();

		$real_sender = '-f cegov-ti@ufrgs.br';

		//$email = ''.$to.$subject.$message.$headers.$real_sender.'';
		//var_dump($email);
		//echo $message;

		$result = mail($to, $subject, $message, $headers, $real_sender);

		if ($result)
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				   window.alert('Enviado com sucesso!')
				   window.location.href='http://www.ufrgs.br/obec/testefce/#contato';
				   </SCRIPT>");
		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				   window.alert('Erro ao Enviar!')
				   window.location.href='http://www.ufrgs.br/obec/testefce/#contato';
				   </SCRIPT>");
		}

	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				   window.alert('Erro de preenchimento!')
				   window.location.href='http://www.ufrgs.br/obec/testefce/#contato';
				   </SCRIPT>");
	}
	
?>