<?php
	$host = "sql1.hostinger.com.br/phpmyadmin";
	$database = "u808352183_work";
	$user = "u808352183_jobs";
	$pass = "w4regt5o612319";

	$conexao = mysql_connect($host, $user, $pass) or print(trigger_error(mysql_error()));

	mysql_select_db($database, $conexao);
	
	mysql_set_charset('utf8');

?>

<?php
		if(!empty($_POST)){
			
		$uploaddir = 'uploads';

		$nome= $_POST['nome'];
		$tel= $_POST['tel'];
		$cv= $uploaddir . $_FILES['cv'];
		
		$sql = mysql_query("INSERT INTO curriculum(nome, tel) VALUES('$nome, $tel')");
	
		if(move_uploaded_file($_FILES['cv']['tmp_name'], $cv)){			
			echo "<script type=\"text/javascript\">alert(\"Seu curriculum foi enviado com sucesso!\"); history.go(-1);</script>\n";		
		}
		else{
			echo "<script type=\"text/javascript\">alert(\"Ocorreu um erro ao tentar enviar este curriculum!\"); history.go(-1); <\script>\n";
		}
	}
	else{
		header("Lacation:index.html");
	}

?>