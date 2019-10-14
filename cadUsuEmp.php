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

	<div class="footer"><center>SEP - 2019  by Anderson Brito.</center></div>

<?php 

	$host = "localhost"; 
	$user = "root"; 
	$password = "";
	$banco = "cadastro";
	$conexao = mysqli_connect($host, $user, $password) or die (mysql_error());
	mysqli_select_db($conexao, $banco) or die (mysql_error());
	
	$id_usu=$_POST['id_usu'];
	$id_emp=$_POST['id_emp'];
	
	$procuraUsu = mysqli_query($conexao," SELECT * FROM usuario WHERE nome = '$id_usu'");
    $procuraEmp = mysqli_query($conexao, "SELECT * FROM empresa WHERE nomeEmpresa ='$id_emp'");

	if (mysqli_num_rows($procuraUsu) == 0) 
		  {
			 echo "<center><h1>Nao cliente cadastrado no sistema.</h1>";
		  }
		  else
		  	    {
		  	    	$procuraEmp = mysqli_query($conexao, "SELECT * FROM empresa WHERE nomeEmpresa ='$id_emp'");
		  	    	if (mysqli_num_rows($procuraEmp) == 0) 
		  	    		{		  	    			
		  	    			echo "<center><h1>Nao existe empresa cadastrada no sistema.</h1>";
		  	            }
		  	            else
		  	            {		  	            			  	            	
		  	            	$sql = mysqli_query($conexao, "INSERT INTO usuario_empresa(usuCadastrado, empCadastrada) 
		 	 			    VALUES ('$id_usu','$id_emp')");
		  	            	echo "<center><h1>Dados inseridos no sistema.</h1>";
		  	            }
		  	    }

?>
</body>
</html>