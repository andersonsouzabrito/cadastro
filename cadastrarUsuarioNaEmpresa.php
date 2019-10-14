<html>
	<head>
		<title>SEP - ENTERPRISE</title>
			<center><p>EMPRESA SEP</p></center>
			<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
<body>

	<center><h1>Relacao Usuario / Empresa</h1></center>

	<nav id="menu">
    	<ul>
        	<li><a href="Home.php">PAGINA INICIAL</a></li>
    	</ul>
	</nav>

	<div id="menu">
		<form name="CadastrarUsuarioNaEmpresa" method="POST" action="cadUsuEmp.php">
			Digite o nome do cliente:<input type="text" name="id_usu"><br/>
			Digite o nome da empresa:<input type="text" name="id_emp"><br/>
			<input type="submit" value="Cadastrar cliente na empresa."/	>
		</form>
	</div>

	<div id="menu">
		<form name="Usuarios cadastrados na empresa" method="POST" action="usuariosCadastrados.php">
			Digite o nome do cliente:<input type="text" name="id_usu"><br/>
			<input type="submit" value="Verificar empresas desse cliente."/	>
		</form>
	</div>

	<div id="menu">
		<form name="Empresas do usuario " method="POST" action="empresasCadastradas.php">
			Digite o nome da empresa:<input type="text" name="id_emp"><br/>
			<input type="submit" value="Verificar clientes dessa empresa."/	>
		</form>
	</div>

	<div class="footer"><center>SEP - 2019  by Anderson Brito.</center></div>
	
</body>
</html>