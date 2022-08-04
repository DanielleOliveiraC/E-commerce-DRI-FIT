<?php
	include_once('conexao.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$pergunta = $_POST['pergunta'];
	
	$result_msg_contatofc = "INSERT INTO mensagens_contatosfc(nome, email, pergunta, created) VALUES ('$nome', '$email', '$pergunta', NOW())";
	$resultado_msg_contatofc= mysqli_query($conn, $result_msg_contatofc)
?>

<html> 
<head>
<title>Agradecimento</title>
<link rel="stylesheet" type="text/css" href="CSS/Agradecimento.css"/>
</head>
<body link="#000000" vlink="#000000" alink="#000000">

<div id="header">
<div class="logo"><a href="Index.html"><img src="img/logotipo.jpg"></a></div></div>

<div id="contents">
<a href="Index.html"> <img src="img/Agradecimento.jpg" </a>
</div>

<div id="footer">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="img/logo.jpg">
<div class="redes"><br>
<a href="https://www.facebook.com/Dri-Fit-113038433408926/"><div class="facebook"></div></a>
<a href="https://www.instagram.com/p/B2DX5_Nl9z_/?igshid=hvwvur3yi8kk"><div class="instagram"></div></a>
<a href="https://twitter.com/drifitoficial"><div class="twitter"></div></a></center></div><br>
<center><p8>Os preços, promoções, condições de pagamento, frete e produtos são válidos exclusivamente para compras realizadas via internet. Criado e desenvolvido por Wollner.<br>Fotos meramente ilustrativas. Copyright  © - drifit.com.br. Todos os direitos reservados.</p8></center>
</div>

</body>
</html>