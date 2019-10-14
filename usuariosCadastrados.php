<html>
	<head>
		<title>SEP - ENTERPRISE</title>
			<center><p>EMPRESA SEP</p></center>
			<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
<body>

	<center><h1>Lista de empresas do cliente.</h1></center>

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

	$id_usu=$_POST['id_usu'];
	$procuraUsuario = mysqli_query($conexao," SELECT * FROM usuario_empresa WHERE usuCadastrado = '$id_usu'");

	if (mysqli_num_rows($procuraUsuario) == 0) 
		{
		echo "<center><h1>Cliente nao encontrado no sistema ou campo vazio.</h1>";
		}
		else
		  	{	
        	$sql = mysqli_query($conexao," SELECT empCadastrada FROM usuario_empresa 
        	WHERE usuCadastrado = '$id_usu'");

    			if (mysqli_num_rows($sql) == 0) 
					{
				    echo "<center><h1>Sem empresas cadastradas.</h1>";
					}
					else
						{	
							echo "<center><h2>Empresas cadastradas do cliente $id_usu:<h2>";
							while($linha = mysqli_fetch_array($sql))
							{
								$empCadastrada = $linha['empCadastrada'];
								echo "<center><h5>$empCadastrada</h5>";
							}					
						}
        	}	  	            		  						  	    
?>	
</body>
</html>	