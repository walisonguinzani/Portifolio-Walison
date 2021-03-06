<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="description" content="Walison Guinzani, desenvolvedor web. Criação de sites, criação de logomarca e baners.">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/template.css"/>
<link rel="stylesheet" href="css/menustyle.css">
<title>Guinzani Web Design</title>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70764950-1', 'auto');
  ga('send', 'pageview');
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>
<body><div class="container_all">
<div class="container_top">
<div class="logo"><img src="imagens/logo1.png" /></div>
<div class="social"><img name="icones" src="imagens/icones.png" width="315" height="172" id="icones" usemap="#m_icones" alt="" /><map name="m_icones" id="m_icones">
<area shape="poly" coords="260,12,215,57,260,103,305,58" href="#" alt="" />
<area shape="poly" coords="155,12,110,57,155,103,200,58" href="#" alt="" />
<area shape="poly" coords="207,67,162,112,207,158,252,113" href="#" alt="" />
<area shape="poly" coords="102,67,57,112,102,158,147,113" href="#" alt="" />
<area shape="poly" coords="50,12,5,57,50,103,95,58" href="#" alt="" />
</map>
</div>
<div class="menu">
		<div id='cssmenu'>
			<ul>
   			<li><a href='index.html'><span>Home</span></a></li>
   			<li><a href='companhia.html'><span>Companhia</span></a></li>
   			<li><a href='portifolio.html'><span>Portifolio</span></a></li>
   			<li><a href='produtos.html'><span>Produtos</span></a></li>
   			<li><a href='work.html'><span>Trabalhe Conosco</span></a></li>
   			<li class='active'><a href='contato.php'><span>Contato</span></a></li>
			</ul>
		</div><!-- End div botoes-->
</div><!-- End div menu-->
</div><!-- End div top-->
<div class="container_corpo">
<div class="titleform">Contato</div>
    <div class="subitle">Os campos marcados com (<font color="#FF0000">*</font>) são obrigatórios.</div>
	<form action="sendmail.php" method="post" onsubmit="MM_validateForm('nome','','R','tel','','NisNum','email','','RisEmail','msg','','R');return document.MM_returnValue">
    	<div id="col1">
			<div id="tituloform">
    			Nome <font color="#FF0000">*</font>
    		</div>
			<div id="tituloform">
    			Telefone
    		</div>
			<div id="tituloform">
    			E-mail <font color="#FF0000">*</font>
    		</div>
			<div id="tituloform">
    			Assunto
    		</div>
			<div id="tituloform">
    			Mensagem <font color="#FF0000">*</font>
    		</div>
        	</div>
        <div id="col2">
        	<div id="caixa">
    			<input name="nome" type="text" id="nome" placeholder="Fulano Ciclano" title="Nome" hspace="1px" cols="40"/>
    		</div>
            <div id="caixa">
    			<input name="tel" type="text" id="tel" placeholder="(NN) NNNN-NNNN" title="Telefone" hspace="1px"  cols="40"/>
    		</div>
        	<div id="caixa">
    			<input name="email" type="text" id="email" placeholder="fulano@mail.com" title="E-mail" hspace="1px" cols="40"/>
    		</div>
        	<div id="caixa">
    			<input type="text" cols="40" title="Assunto" name="ass" hspace="1px"/>
    		</div>
            <div id="caixa">
    			<textarea name="msg" cols="40" rows="10" maxlength="500" id="msg" placeholder="Escreva seu comentário...." title="Mensagem"></textarea>
    		</div>
            <div id="caixa">
    			<input title="confirm" type="submit" formaction="sendmail.php" value="Enviar"/>
    			<input type="reset" id="reset" title="confirm" formaction="#" value="Limpar" type="reset"/>
            </div>
        </div>
	
    </form>
</div><!-- End div banner-->
<div class="container_rodape">
<hr/>
	<div id="col1">
		<div id="titulor">
    		social
    	</div>
    	<div id="textor"><a href="#">Facebook</a></div>
        <div id="textor"><a href="#">Twitter</a></div>
        <div id="textor"><a href="">Instagram</a></div>
        <div id="textor"><a href="">Google+</a></div>
	</div>	
	<div id="col2">
    	<div id="titulor">
   		 	ajuda
    	</div>
       	<div id="textor"><a href="ask.html">Dúvidas Frequentes</a></div>
        <div id="textor"><a href="contrate.html">Contrate</a></div>
        <div id="textor"><a href="map.html">Mapa do Site</a></div>
    </div>
   	<div id="col2">
  		<div id="titulor">
    		guinzani
    	</div>
       	<div id="textor"><a href="client.html">Clientes</a></div>
        <div id="textor"><a href="work.html">Trabalhe Conosco</a></div>
        <div id="textor"><a href="about.html">Sobre o Fundador</a></div>
        <div id="textor"><a href="trade.html">Parcerias e Trade</a></div>
  	</div>

</div><!-- End div container_rodape-->
<div class="rodape">
	© Walison Guinzani 2015 - 2016 . Todos os direitos reservados. 
</div>
</div><!-- End div container_all-->
</body>
</html>