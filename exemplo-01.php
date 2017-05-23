<?php 
//Aqui você deve colocar o tipo de banco, nome do banco, usuario e senha.
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

	$stmt->execute();

	// fetchall ele vai fatia todas as linhas
	// PDO::FETCH_ASSOC ele vai trazer só o associativo
	$results = $stmt->fetchall(PDO::FETCH_ASSOC);

	// Para percorre 
	foreach ($results as $row) {
		foreach ($row as $key => $value) {
			
			echo "<strong> ".$key." </strong> ".$value."<br/>";
		}

		echo "===============================================<br/>";
	}

	//echo json_encode($results);
 ?>