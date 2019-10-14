<html>
	<head>
		<title>SEP - ENTERPRISE</title>
			<center><p>EMPRESA SEP</p></center>
			<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
<body>
	<center><h1>Consultar empresa</h1></center>

	<nav id="menu">
    	<ul>
        	<li><a href="Home.php">PAGINA INICIAL</a></li>
        	<li><a href="cadastroUsuario.php">CLIENTE</a></li>
        	<li><a href="cadastroEmpresa.php">EMPRESA</a></li>
        	<li><a href="cadastrarUsuarioNaEmpresa.php">RELACAO CLIENTE / EMPRESA</a></li>
    	</ul>
	</nav>

	<div class="footer"><center>SEP - 2019  by Anderson Brito.</center></div>

<?php

	$host = "localhost"; 
	$user = "root"; 
	$password = "";
	$banco = "cadastro";
	$conexao = mysqli_connect($host, $user, $password) or die (mysql_error());
	mysqli_select_db($conexao, $banco) or die (mysql_error());

	$nomeEmpresa=$_POST['nomeEmpresa'];

	$procuraEmp = mysqli_query($conexao," SELECT * FROM empresa WHERE nomeEmpresa = '$nomeEmpresa'");

	if (mysqli_num_rows($procuraEmp) == 0) 
		{
		echo "<center><h1>Nao existe empresa no sistema.</h1>";
		}
		else
		    {
		  	echo "<center><h1>Empresa $nomeEmpresa cadastrado no sistema.</h1>";
		  	}
?>

</body>
</html>