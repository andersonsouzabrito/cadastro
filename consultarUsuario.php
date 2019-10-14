<html>
	<head>
		<title>SEP - ENTERPRISE</title>
			<center><p>EMPRESA SEP</p></center>
			<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
<body>
	<center><h1>Consultando Cliente...</h1></center>

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

	$nome=$_POST['nome'];

	$procuraUsu = mysqli_query($conexao," SELECT * FROM usuario WHERE nome = '$nome'");

	if (mysqli_num_rows($procuraUsu) == 0) 
		{
			echo "<center><h1>Nao existe cliente no sistema.</h1>";
		}
		else
		  	{
		  	echo "<center><h1>Cliente $nome cadastrado no sistema.</h1>";
		  	}

?>
</body>
</html>