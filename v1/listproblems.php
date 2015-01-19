<!DOCTYPE html>
<html>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "002426ma";
	$dbname = "ideamanager";

	$con = mysqli_connect("localhost","$username","$password","$dbname");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
	mysqli_select_db($con,"ideamanager");
	$sql="SELECT UserName, Imagelink, Problem FROM Ideas ORDER BY id DESC";
	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td><img src='" . $row['Imagelink'] . "' alt= 'Imagem' style='height:60px; width: 60px;'></td>";
		echo "<td>" . $row['UserName'] . "</td>";
		echo "<td>" . $row['Problem'] . "</td>";
		echo "</tr>";
	}
	mysqli_close($con);
?> 
</body>
</html>