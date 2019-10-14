<html>
	<head>
		<title>SEP - ENTERPRISE</title>
			<center><p>EMPRESA SEP</p></center>
			<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
<body>

	<center><h1>Area Do Cliente</h1></center>

		<nav id="menu">
    		<ul>
        		<li><a href="Home.php">PAGINA INICIAL</a></li>
    		</ul>
		</nav>

	<nav id="menu">
		<form name="CadastrarUsuario" method="post" action="cadUsuario.php">
			Nome : <input type="text" name="nome"><br />
			CPF : <input type="text" name="cpf"><br />
			<input type="submit" value="Cadastrar Cliente " />
		</form>
	</nav>

	<nav id="menu">
		<form name="ConsultarUsuario" method="post" action="consultarUsuario.php">
			Nome : <input type="text" name="nome">
			<input type="submit" value="Consultar Cliente " />
		</form>
	</nav>

	<div class="footer"><center>SEP - 2019  by Anderson Brito.</center></div>

</body>
</html>