<?php
	// Cria uma conecção
	$con = mysqli_connect("localhost", "root", "", "microinformatica");

	// verifica a conecção
	if (!$con) {
		die("Conexão com falha: " . mysqli_connect_error());
	}
	
	
	$query = "SELECT * FROM produtos";
	
	$result = mysqli_query($con, $query);
	
	while($row = mysqli_fetch_array($result)){  
		echo
					$row["id_produto"].	"|" .                                    
					$row["descricao"]. 	"|" .
					$row["marca"].	   	"|" .
					$row["preco"].     	"|" .
					$row["estoque"].   	"|" . "<br>";
	}
	
	mysqli_close($con);
?> 