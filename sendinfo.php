<!DOCTYPE html>
<html>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "002426ma";
	$dbname = "ideamanager";
	$n = $_REQUEST["n"];	//Nome recebido do GET
	$pr = $_REQUEST["pr"];	//Problema recebido do GET

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO Ideas (UserName, Problem, Date)
	    VALUES ('$n', '$pr', NOW())";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    echo "Novo problema registrado!";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	$conn = null;
?> 

</body>
</html>