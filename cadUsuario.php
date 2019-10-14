<html>
	<head>
		<title>SEP - ENTERPRISE</title>
			<center><p>EMPRESA SEP</p></center>
			<link rel="stylesheet" type="text/css"  href="estilo.css" />
	</head>
<body>

	<center><h1>Cadastrando Cliente...</h1></center>

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
    $cpf=$_POST['cpf'];

    if(empty($nome))
	    {
		    echo "<center><h1>Digite um nome.</h1>";
        }
        else
            {
    		    if(empty($cpf))
    		        {
    		        echo "<center><h1>Digite um CPF valido.</h1";
    		        }
                    else
    		            {
    		        	    $sql = mysqli_query($conexao, "INSERT INTO usuario(nome, cpf) 
						     VALUES ('$nome', '$cpf')");
						    echo "<center><h1>Cadastro do cliente efetuado com sucesso</h1>";
						    echo "<center><h1>Nome do cliente: $nome</h1>";
    		            }
    	    }

?>
</body>
</html>