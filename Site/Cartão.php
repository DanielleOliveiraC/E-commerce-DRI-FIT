<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Pagamento</title>
<link rel="stylesheet" type="text/css" href="CSS/Credito.css"/>
<script type="text/jscript" src="style.js"></script>
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
<script>
function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}
</script>

</head>
	<body link="#000000" vlink="#000000" alink="#000000">

<div id="header">
<div class="logo"><a href="Index.html"><img src="img/logotipo.jpg"></a></div></div>

<div id="contents">

<form method="POST" action="salva_mensagemcc.php">
<div class="cadastro">
<label for="Numero"> Número do Cartão </label> 
<div>
<input type="Numero" name="numerodocartao" maxlength="19" size="67" required autocomplete="off" OnKeyPress="formatar('#### #### #### ####', this); return onlynumber();"> <br> <br>
</div>
<label for="Nome"> Nome do Titular </label> 
<div>
<input type="Nome" name="nome" maxlength="100" size="67" required autocomplete="off"> <br> <br>
</div>
<label for="Data de Validade"> Data de Validade </LABEL> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp
<label for="CVV"> Código de Segurança </LABEL>  
<div>
<select name="mes">
<option value="Mês"> Mês </option>
<option value="Jan"> Jan </option> 
<option value="Fev"> Fev </option>
<option value="Mar"> Mar </option>
<option value="Abr"> Abr </option> 
<option value="Mai"> Mai </option>
<option value="Jun"> Jun </option>
<option value="Jul"> Jul </option> 
<option value="Ago"> Ago </option>
<option value="Set"> Set </option>
<option value="Out"> Out </option> 
<option value="Nov"> Nov </option>
<option value="Dez"> Dez </option>
</select>
<select name="ano">
<option value="Ano"> Ano </option>
<option value="2019"> 2019 </option> 
<option value="2020"> 2020 </option>
<option value="2021"> 2021 </option>
<option value="2022"> 2022 </option> 
<option value="2023"> 2023 </option>
<option value="2024"> 2024 </option>
<option value="2025"> 2025 </option> 
<option value="2026"> 2026 </option>
<option value="2027"> 2027 </option>
<option value="2028"> 2028 </option> 
<option value="2029"> 2029 </option>
<option value="2030"> 2030 </option>
<option value="2031"> 2031 </option> 
<option value="2032"> 2032 </option>
<option value="2033"> 2033 </option>
<option value="2034"> 2034 </option> 
<option value="2035"> 2035 </option>
<option value="2036"> 2036 </option>
<option value="2037"> 2037 </option> 
<option value="2038"> 2038 </option>
<option value="2039"> 2039 </option>
<option value="2040"> 2040 </option> 
<option value="2041"> 2041 </option>
<option value="2042"> 2042 </option>
<option value="2043"> 2043 </option>
<option value="2044"> 2044 </option>
<option value="2045"> 2045 </option> 
<option value="2046"> 2046 </option>
<option value="2047"> 2047 </option>
<option value="2048"> 2048 </option>
<option value="2049"> 2049 </option>
</select> &nbsp&nbsp&nbsp
<input type="text" name="cvv" MAXLENGTH="3" size="23" required autocomplete="off" OnKeyPress="return onlynumber();"> 
</div>
<div class="enviar">
<div class="submit">
<br><input type="submit" onClick="Enviar();" value="Continuar">
</div>
</div>
</form>

<div class="voltar"><a href="Index.html">&larr; Voltar para página home</a></div>
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