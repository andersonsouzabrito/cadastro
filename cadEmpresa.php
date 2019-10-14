<html>
	<head>
		<title>SEP - ENTERPRISE</title>
			<center><p>EMPRESA SEP</p></center>
			<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
<body>

	<center><h1>Cadastrando Empresa...</h1></center>

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
    $segmento=$_POST['segmento'];

    if(empty($nomeEmpresa))
	    {
		    echo "<center><h1>Digite o nome da Empresa.</h1";
        }
        else
            {
    		    if(empty($segmento))
    		        {
	                echo "<center><h1>Campo Segmento Vazio.</h1";
    		        }
                       else
    		            {
    		        	    $sql = mysqli_query($conexao, "INSERT INTO empresa(nomeEmpresa, segmento) 
						    VALUES ('$nomeEmpresa', '$segmento')");
						    echo "<center><h1>Cadastro da empresa efetuado com sucesso</h1>";
						    echo "<center><h1>Nome da empresa: $nomeEmpresa</h1>";
    		            }
    	    }

?>

</body>
</html>