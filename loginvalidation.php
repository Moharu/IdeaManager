<!DOCTYPE html>
<html>
<body>
	<?php 
	$validate = 0;
	$servername = "localhost";
	$username = "root";
	$password = "002426ma";
	$dbname = "ideamanager";
	$rclogin = $_REQUEST["l"];
	$pw = $_REQUEST["p"];

	$con = mysqli_connect("localhost","$username","$password","$dbname");
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}
	mysqli_select_db($con,"ideamanager");
	$sql="SELECT Login, Password FROM Users WHERE Login = '$rclogin'";
	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)) {
		if($row['Login']===$rclogin  and $row['Password']===$pw){ 
			setrawcookie("userlogon","$rclogin", time() + 86400, "/");
			$validate = 1; break; 
		}
	}
	echo $validate;
	mysqli_close($con);
	 ?>
</body>
</html>