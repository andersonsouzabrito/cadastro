<html>
	<head>
		<title>SEP - ENTERPRISE</title>
			<center><p>EMPRESA SEP</p></center>
			<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
<body>

	<center><h1>Lista de clientes da empresa.</h1></center>

	<nav id="menu">
    	<ul>
        	<li><a href="Home.php">PAGINA INICIAL</a></li>
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

	$id_emp=$_POST['id_emp'];
	$procuraUsuario = mysqli_query($conexao," SELECT * FROM usuario_empresa WHERE empCadastrada = '$id_emp'");

	if (mysqli_num_rows($procuraUsuario) == 0) 
		{
		echo "<center><h1>Empresa nao encontrada no sistema ou campo vazio.</h1>";
		}
		else
		  	{	
        	$sql = mysqli_query($conexao," SELECT usuCadastrado FROM usuario_empresa 
        	WHERE empCadastrada = '$id_emp'");

    			if (mysqli_num_rows($sql) == 0) 
					{
				    echo "<center><h1>Sem clientes cadastrados.</h1>";
					}
					else
						{	
							echo "<center><h2>Clientes cadastrados da empresa $id_emp:<h2>";
							while($linha = mysqli_fetch_array($sql))
							{
								$usuCadastrado = $linha['usuCadastrado'];
								echo "<center><h5>$usuCadastrado</h5>";
							}	
						}
        	}

?>	
</body>
</html>	