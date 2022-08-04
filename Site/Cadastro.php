<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
<link rel="stylesheet" href="css/form.css">
<link href="CSS/form.css" rel="stylesheet" type="text/css">
<script type="text/jscript" src="js/form.js"></script>
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
	</head>
	<body link="#000000" vlink="#000000" alink="#000000">

<div id="header">
<div class="logo"><a href="Index.html"><img src="img/logotipo.jpg"></a></div></div>

<div id="contents">
<div class="titulo"><center><p9>Cadastre-se e fique por dentro de todas as novidades DRI-FIT</p9><br><br><p10>Caso já possua cadastro, faça seu <a href="Login.html">login</a>!</p10></center></div>

		<form method="POST" action="salva_mensagem.php">
			<div class="cadastro">
<label for="Nome"> Nome </label> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="Sobrenome"> Sobrenome </label> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="Sexo"> Sexo </label>
<div>
<input type="Nome" name="nome" maxlength="100" size="38" required autocomplete="off"> &nbsp&nbsp&nbsp
<input type="Sobrenome" name="sobrenome" maxlength="100" size="38" required autocomplete="off"> &nbsp
<input type="radio" name="sexo" value="feminino"> Feminino
<input type="radio" name="sexo" value="masculino"> Masculino <br> <br> </div>
<label for="Data de Nascimento"> Data de Nascimento </LABEL> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="CPF"> CPF </LABEL>  
<DIV>
<SELECT NAME="Dia">
<option value="Dia"> Dia </option>
<option value="1"> 01 </option> 
<option value="2"> 02 </option>
<option value="3"> 03 </option>
<option value="4"> 04 </option> 
<option value="5"> 05 </option>
<option value="6"> 06 </option>
<option value="7"> 07 </option> 
<option value="8"> 08 </option>
<option value="9"> 09 </option>
<option value="10"> 10 </option> 
<option value="11"> 11 </option>
<option value="12"> 12 </option>
<option value="13"> 13 </option> 
<option value="14"> 14 </option>
<option value="15"> 15 </option>
<option value="16"> 16 </option> 
<option value="17"> 17 </option>
<option value="18"> 18 </option>
<option value="19"> 19 </option> 
<option value="20"> 20 </option>
<option value="21"> 21 </option>
<option value="22"> 22 </option> 
<option value="23"> 23 </option>
<option value="24"> 24 </option>
<option value="25"> 25 </option>
<option value="26"> 26 </option>
<option value="27"> 27 </option> 
<option value="28"> 28 </option>
<option value="29"> 29 </option>
<option value="30"> 30 </option>
<option value="31"> 31 </option>
</SELECT>
<SELECT NAME="Mes">
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
</SELECT>
<SELECT NAME="Ano">
<option value="Ano"> Ano </option>
<option value="2015"> 2015 </option> 
<option value="2014"> 2014 </option>
<option value="2013"> 2013 </option>
<option value="2012"> 2012 </option> 
<option value="2011"> 2011 </option>
<option value="2010"> 2010 </option>
<option value="2009"> 2009 </option> 
<option value="2008"> 2008 </option>
<option value="2007"> 2007 </option>
<option value="2006"> 2006 </option> 
<option value="2005"> 2005 </option>
<option value="2004"> 2004 </option>
<option value="2003"> 2003 </option> 
<option value="2002"> 2002 </option>
<option value="2001"> 2001 </option>
<option value="2000"> 2000 </option> 
<option value="1999"> 1999 </option>
<option value="1998"> 1998 </option>
<option value="1997"> 1997 </option> 
<option value="1996"> 1996 </option>
<option value="1995"> 1995 </option>
<option value="1994"> 1994 </option> 
<option value="1993"> 1993 </option>
<option value="1992"> 1992 </option>
<option value="1991"> 1991 </option>
<option value="1990"> 1990 </option>
<option value="1989"> 1989 </option> 
<option value="1988"> 1988 </option>
<option value="1987"> 1987 </option>
<option value="1986"> 1986 </option>
<option value="1985"> 1985 </option>
<option value="1984"> 1984 </option> 
<option value="1983"> 1983 </option>
<option value="1982"> 1982 </option>
<option value="1981"> 1981 </option>
<option value="1980"> 1980 </option>
<option value="1979"> 1979 </option> 
<option value="1978"> 1978 </option>
<option value="1977"> 1977 </option>
<option value="1976"> 1976 </option>
<option value="1975"> 1975 </option>
<option value="1974"> 1974 </option> 
<option value="1973"> 1973 </option>
<option value="1972"> 1972 </option>
<option value="1971"> 1971 </option>
<option value="1970"> 1970 </option>
<option value="1969"> 1969 </option> 
<option value="1968"> 1968 </option>
<option value="1967"> 1967 </option>
<option value="1966"> 1966 </option> 
<option value="1965"> 1965 </option>
<option value="1964"> 1964 </option>
<option value="1963"> 1963 </option> 
<option value="1962"> 1962 </option>
<option value="1961"> 1961 </option>
<option value="1960"> 1960 </option> 
<option value="1959"> 1959 </option>
<option value="1958"> 1958 </option>
<option value="1957"> 1957 </option> 
<option value="1956"> 1956 </option>
<option value="1955"> 1955 </option>
<option value="1954"> 1954 </option> 
<option value="1953"> 1953 </option>
<option value="1952"> 1952 </option>
<option value="1951"> 1951 </option> 
<option value="1950"> 1950 </option>
<option value="1949"> 1949 </option>
<option value="1948"> 1948 </option> 
<option value="1947"> 1947 </option>
<option value="1946"> 1946 </option>
<option value="1945"> 1945 </option>
<option value="1944"> 1944 </option>
<option value="1943"> 1943 </option> 
<option value="1942"> 1942 </option>
<option value="1941"> 1941 </option>
<option value="1940"> 1940 </option>
<option value="1939"> 1939 </option>
<option value="1938"> 1938 </option> 
<option value="1937"> 1937 </option>
<option value="1936"> 1936 </option>
<option value="1935"> 1935 </option>
<option value="1934"> 1934 </option>
<option value="1933"> 1933 </option> 
<option value="1932"> 1932 </option>
<option value="1931"> 1931 </option>
<option value="1930"> 1930 </option>
<option value="1929"> 1929 </option>
<option value="1928"> 1928 </option> 
<option value="1927"> 1927 </option>
<option value="1926"> 1926 </option>
<option value="1925"> 1925 </option>
<option value="1924"> 1924 </option>
<option value="1923"> 1923 </option> 
<option value="1922"> 1922 </option>
<option value="1921"> 1921 </option>
<option value="1920"> 1920 </option>
</SELECT> &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="CPF" MAXLENGTH="14" size="55" required autocomplete="off" OnKeyPress="formatar('###.###.###-##', this); return onlynumber();"> <br> <br> </div>
<label for="CEP"> CEP </label> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="Tipo de endereço"> Tipo de endereço </label> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="Endereço"> Endereço </label>
<div>
<input type="text" name="CEP" MAXLENGTH="9" size="38" required autocomplete="off" OnKeyPress="formatar('#####-###', this); return onlynumber();"> &nbsp&nbsp&nbsp
<SELECT style="width:170px;" NAME="tipoendereco">
<option value="Selecione"> Selecione </option>
<option value="Avenida"> Avenida </option> 
<option value="Rua"> Rua </option>
<option value="Praça"> Praça </option>
<option value="Quadra"> Quadra </option> 
<option value="Estrada"> Estrada </option>
<option value="Alameda"> Alameda </option>
<option value="Ladeira"> Ladeira </option> 
<option value="Travessa"> Travessa </option>
<option value="Rodovia"> Rodovia </option>
<option value="Outros"> Outros </option> </select> &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="Endereço" name="endereco" maxlength="100" size="41" required autocomplete="off"> <br> <br> </div>
<label for="Número"> Número </label> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="Complemento"> Complemento </label> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="Bairro"> Bairro </label>
<div>
<input type="Número" name="numero" maxlength="4" size="15" required autocomplete="off" OnKeyPress="formatar('####', this); return onlynumber();"> &nbsp&nbsp&nbsp
<input type="Complemento" name="complemento" maxlength="100" size="38" autocomplete="off"> &nbsp&nbsp&nbsp
<input type="Bairro" name="bairro" maxlength="100" size="50" required autocomplete="off"> <br> <br> </div>
<label for="Estado"> Estado </label> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp<label for="Cidade"> Cidade </label> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="Ponto de referência"> Ponto de referência </label>
<div>
<SELECT style="width:170px;" NAME="Estado">
<option value="Acre"> Acre </option>
<option value="Alagoas"> Alagoas </option> 
<option value="Amapá"> Amapá </option>
<option value="Amazonas"> Amazonas </option>
<option value="Bahia"> Bahia </option> 
<option value="Ceará"> Ceará </option>
<option value="Distrito Federal"> Distrito Federal </option>
<option value="Espírito Santo"> Espírito Santo </option> 
<option value="Goiás"> Goiás </option>
<option value="Maranhão"> Maranhão </option>
<option value="Mato Grosso"> Mato Grosso </option> 
<option value="Mato Grosso do Sul"> Mato Grosso do Sul </option>
<option value="Minas Gerais"> Minas Gerais </option>
<option value="Pará"> Pará </option> 
<option value="Paraíba"> Paraíba </option>
<option value="Paraná"> Parána </option>
<option value="Pernambuco"> Pernambuco </option> 
<option value="Piauí"> Piauí </option>
<option value="Rio de Janeiro"> Rio de Janeiro </option>
<option value="Rio Grande do Norte"> Rio Grande do Norte </option> 
<option value="Rio Grande do Sul"> Rio Grande do Sul </option>
<option value="Rondônia"> Rondônia </option>
<option value="Roraima"> Roraima </option> 
<option value="Santa Catarina"> Santa Catarina </option>
<option value="São Paulo"> São Paulo </option>
<option value="Sergipe"> Sergipe </option>
<option value="Tocantins"> Tocantins </option>
</SELECT> &nbsp&nbsp&nbsp&nbsp
<input type="Cidade" name="cidade" maxlength="100" size="40" required autocomplete="off"> &nbsp&nbsp&nbsp
<input type="Ponto de referência" name="referencia" maxlength="100" size="40" autocomplete="off"> <br> <br> </div>
</div>
<div class="conta">
<label for="Telefone"> Telefone </label> 
<div>
<input type="telefone" name="telefone" maxlength="13" size="58" required autocomplete="off" OnKeyPress="formatar('## #####-####', this); return onlynumber();"> <br> <br> </div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="sms" required value="Opção1"> <d> Quero acompanhar o andamento &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp de meus pedidos via sms </d> <br> <br>
<label for="email"> E-mail </label> 
<div>
<input type="email" name="email" maxlength="100" size="58" required autocomplete="off"> <br> <br> </div>
<label for="senha"> Senha </label> 
<div>
<input type="password" name="senha" maxlength="8" size="58" required autocomplete="off"> <br> <br> </div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="mensagememail" required value="Opção2"> <d> Quero receber por e-mail novidades &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp e ofertas da DRI-FIT. </d> 
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
		