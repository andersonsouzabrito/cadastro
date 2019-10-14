<html>
	<head>
		<title>SEP - ENTERPRISE</title>
			<center><p>EMPRESA SEP</p></center>
			<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
<body>

	<center><h1>Area da Empresa</h1></center>

	<nav id="menu">
    
    	<ul>
        	<li><a href="Home.php">PAGINA INICIAL</a></li>
    	</ul>
	</nav>

	<nav id="menu">
		<form name="CadastrarEmpresa" method="POST" action="cadEmpresa.php">
			Nome da Empresa: <input type="text" name="nomeEmpresa"><br />
			Segmento: <input type="text" name="segmento"><br />
			<input type="submit" value="Cadastrar Empresar">
		</form>
	</nav>

	<nav id="menu">
		<form name="ConsultarEmpresa" method="post" action="consultarEmpresa.php">
			Nome : <input type="text" name="nomeEmpresa">
			<input type="submit" value="Consultar Empresa" />
		</form>
	</nav>

<div class="footer"><center>SEP - 2019  by Anderson Brito.</center></div>

</body>
</html>