
<?php
	@$descricao 	= $_GET["descricao"];
	@$marca 		= $_GET["marca"];
	@$preco 		= $_GET["preco"];
	@$estoque 		= $_GET["estoque"];

	@$con = mysqli_connect("127.0.0.1","root","","microinformatica");

	if(@$con)
		echo 'Conexão bem sucedida';
	else
	{
		echo 'Conexão falhou';
		echo 'Erro '. mysqli_connect_errno(). ': '.
			mysqli_connect_error();
	}

	//insere os dados na tabela clientes
	$query = "INSERT INTO produtos (descricao, marca, preco, estoque) 
			  VALUE('$descricao', '$marca', '$preco', '$estoque')";
	
	echo $query;	
	mysqli_query($con, $query);
		
	//fecha a conexão com o banco de dados
	mysqli_close($con);
?>
