<!DOCTYPE html>	
<html>
<body>
<?php 			// CREATE USER ----MUDAR----
	$servername = "localhost";
	$username = "root";
	$password = "002426ma";
	$dbname = "ideamanager";
	$l = $_REQUEST["l"];	//Login recebido do GET
	$p = $_REQUEST["p"];	//Senha recebido do GET
	$i = $_REQUEST["i"];	//Link da imagem recebido do GET

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO Users (Login, Imagelink, Password)
	    VALUES ('$l', '$i', '$p')";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    echo "Novo usuário registrado!";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	$conn = null;
?> 

</body>
</html>