<?php
	include_once('conexao.php');
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$sexo = $_POST['sexo'];
	$Dia = $_POST['Dia'];
	$Mes = $_POST['Mes'];
	$Ano = $_POST['Ano'];
	$CPF = $_POST['CPF'];
	$CEP = $_POST['CEP'];
	$tipoendereco = $_POST['tipoendereco'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$Estado = $_POST['Estado'];
	$cidade = $_POST['cidade'];
	$referencia = $_POST['referencia'];
	$telefone = $_POST['telefone'];
	$sms = $_POST['sms'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$mensagememail = $_POST['mensagememail'];
	
	$result_msg_contato = "INSERT INTO mensagens_contatos(nome, sobrenome, sexo, Dia, Mes, Ano, CPF, CEP, tipoendereco, endereco, numero, complemento, bairro, Estado, cidade, referencia, telefone, sms, email, senha, mensagememail, created) VALUES ('$nome', '$sobrenome', '$sexo', '$Dia', '$Mes', '$Ano', '$CPF', '$CEP', '$tipoendereco', '$endereco', '$numero', '$complemento', '$bairro', '$Estado', '$cidade', '$referencia', '$telefone', '$sms', '$email', '$senha', '$mensagememail', NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
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
<a href="Index.html"> <img src="img/Agradecimentocadastro.jpg" </a>
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