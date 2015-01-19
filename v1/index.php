<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="UTF-8">
		<script src="whattodo.js"></script>
		<script src="listing.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<title>Idea Manager</title>
		<script>
			$(document).ready(function(){
			  $("#verification").hide();
			  if($("#user").text()!==""){
			  	$("#sendButton").removeClass("disabled").addClass("active");
			  }
			});
		</script>
		<style>
			#headerTittle {
				position: fixed;
				margin-top: -100px;
				height: 100px;
			    background-color:black;
			    text-align:left;
			    width: 1500px;
			}
			#problem {
				width: 500px;
				height: 50px;
			}
			#problems {
				background-color: black;
				margin:auto;
				margin-top:60px;
				/*margin-top: 100px;
				margin-left: 380px;
				margin-right: 380px;*/
			    width:600px;
			    padding:10px;	 	 
			}
			#sendButton{
				opacity:1;
			}
			#h01{
				position: fixed;
			    top: -6px;
				width: 200px;
				margin-left: 27px;
				color: lightgray;
				font-family: "Indie Flower";
				font-size: 220%;
				text-align: left;
			}
			#h02{
				position: fixed;
				right: 155px;
			    top: -15px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#h03 {
				position: fixed;
				right: 30px;
			    top: 35px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#h04 {
				position: fixed;
				right: 165px;
			    top: 1px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#h05 {
				position: fixed;
				right: 50px;
			    top: 1px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#logout{
				position: fixed;
				right: -15px;
			    top: 30px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 90%;
				margin-right: 27px;
			}
			#user {
				position: fixed;
				right: 30px;
			    top: -2px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#p02{
				position: fixed;
				right: 20px;
			    top: 80px;
				text-align: left;
				color: black;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#p03 {
				position: fixed;
				right: 20px;
			    top: 120px;
				text-align: left;
				color: black;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#oklogin {
				position: fixed;
				right: 100px;
				top:1px;
				color: white;
				font-family: "Exo";
				font-size: 140%;
			}
			#backlogin {
				position: fixed;
				right: 20px;
				top: 1px;
				color: white;
				font-family: "Exo";
				font-size: 140%;
			}
			table, th, td {
				table-layout: fixed;
				max-height: 50px;
				max-width: 500px;
				text-align: left;
				border-bottom-style: solid;
				border-bottom-width: 1px;
			}
			td:first-child{
				border-left-style: dashed;
				width:15%;
			}
			td:nth-child(2) {
				font-weight: bold;
				text-align: center;
				width:15%;
				padding: 20px;
				border-right-style: double;
				border-right-width:  10px;
			}
			td:nth-child(3){
				border-right-style: dashed;
			}
			#imglogin {
				width: 48px;
				height: 48px;
				border-radius: 24px;
				-webkit-border-radius: 24px;
				-moz-border-radius: 24px;
			}
		</style>			<!-- LINHA 186 DEVE SER ALTERADA PARA RECEBER O LINK DO DB -->
	</head>	
	<body style="background-color: lightgray; color: white; font-family:'Exo'; text-align:center;" onload="recData()">
		<div id="headerTittle">
			<a href="index.php"><h2 id="h01">Idea Manager</h2></a>
			<div id="accountForm">
				<?php
					$usrimg = $_SESSION['ImageLink'];
					if($_SESSION["userLogon"]!=""){
						echo "<h2 id='h02'><img id='imglogin' src='$usrimg' alt='Imagem' >  Bem vindo(a), </h2><h2 id='user'>".$_SESSION["userLogon"]."</h2><h5 id='logout'><a href='javascript:logout()' style='text-decoration:none; color:white;'>logout</a></h5>";
					}
					else{
						echo "<h3 id='h04'><a href='regpage.html' style='text-decoration:none; color:white;'>Criar uma conta </a></h3><h3 id='h05'><a href='javascript:login()' style='text-decoration:none; color:white;'> Log In </a></h3>";
					}
				?>
				<!-- <h3 id="h02"><a href="regpage.html" style="text-decoration:none; color:white;">Criar uma conta </a></h3>
				<h3 id="h03"><a href="javascript:login()" style="text-decoration:none; color:white;"> Log In </a></h3> -->
			</div>
		</div>

		<div id="problems" class="table-responsive">	
			<br><!-- 
			<input placeholder="Usuário" id="username"/> -->
			<input style="color:black" placeholder="Escreva aqui sua ideia genial..." id="problem"/><br><br>
			<button style="color:black; float:right; margin-right:40px; z-index:0" onclick="sendData();" type="button" class="btn btn-default btn-md disabled" id="sendButton"> Enviar </button>
			<br><br>
			<p id="txtHint"></p>
			<table class="table">
				<thead>
					<!-- <td width="30%">Nome do Usuário</td>
					<td>Problema</td> -->
				</thead>
				<tbody id="listProblems">
				</tbody>
			</table>
			<p id="verification"></p>
		</div>
		<div style="background-color:white; float:left" width="200px" heigth="300px">
		</div>
	</body>
</html>