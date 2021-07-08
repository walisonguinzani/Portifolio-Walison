<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mensagem Enviada!</title>
</head>
<body>
<?php
	if(!empty($_POST)){

		$cabe= "Form: ".$_POST['nome']."<".$_POST['email'].">\n";
	
		$atraves = "Contato através do Site www.guinzani.com.br\n";
		$atraves.= "Nome: ".$_POST['nome']."\n";
		$atraves.= "E-mail: ".$_POST['email']."\n";
		$atraves.= "Telefone: ".$_POST['tel']."\n";
		$atraves.= "Assunto: ".$_POST['ass']."\n";
		$atraves.= "Mensagem: ".$_POST['msg']."\n";
	
		if(mail("guinzaniwebdesign@gmail.com", "Contato através do Site www.guinzani.com.br", $atraves, $cabe)){
			echo "<script type=\"text/javascript\">alert(\"Sua mensagem foi enviada com sucesso!\"); history.go(-1);</script>\n";		
		}
		else{
			echo "<script type=\"text/javascript\">alert(\"Ocorreu um erro ao tentar enviar está mensagem!\"); history.go(-1); <\script>\n";
		}
	}
	else{
		header("Lacation:index.html");
	}
	
?>

</body>
</html>