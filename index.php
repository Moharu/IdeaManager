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
				margin-top: -60px;
				height: 60px;
			    background-color:black;
			    text-align:left;
			    width: 1500px;
			    opacity: 0.5;
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
				opacity: 1;
				position: fixed;
			    top: -6px;
				width: 200px;
				margin-left: 27px;
				color: white;
				font-family: "Indie Flower";
				font-size: 220%;
				text-align: left;
			}
			#h02{
				position: fixed;
				right: 130px;
			    top: 0px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#h03 {
				position: fixed;
				right: 30px;
			    top: 0px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#logout{
				position: fixed;
				right: 10px;
			    top: 68px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 90%;
				margin-right: 27px;
			}
			#user {
				position: fixed;
				right: 30px;
			    top: 27px;
				text-align: right;
				color: white;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#p02{
				position: fixed;
				right: 58px;
			    top: 12px;
				text-align: left;
				color: black;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#p03 {
				position: fixed;
				right: 58px;
			    top: 55px;
				text-align: left;
				color: black;
				font-family: "Exo";
				font-size: 140%;
				margin-right: 27px;
			}
			#oklogin {
				position: fixed;
				right: 10px;
				color: white;
				font-family: "Exo";
				font-size: 140%;
			}
			#backlogin {
				position: fixed;
				right: 10px;
				top: 40px;
				color: white;
				font-family: "Exo";
				font-size: 140%;
			}
			table, th, td {
				table-layout: fixed;
				max-height: 50px;
				max-width: 500px;
				text-align: left;
				border-right-style: dashed;
				border-bottom-style: solid;
				border-bottom-width: 1px;
			}
			td:first-child{
				text-align: center;
				width:30%;
				padding: 20px;
				border-right-style: double;
				border-right-width:  10px;
				border-left-style: dashed;
			}
		</style>
	</head>
	<body style="background-color: lightgray; color: white; font-family:'Exo'; text-align:center;" onload="recData()">
		<div id="headerTittle">
			<a href="index_local.html"><h2 id="h01">Idea Manager</h2></a>
			<div id="accountForm">
				<?php
					if($_SESSION["userLogon"]!=""){
						echo "<h2 id='h02'>Bem vindo(a), </h2><h2 id='user'>".$_SESSION["userLogon"]."</h2><h5 id='logout' onclick='logout()'>logout</h5>";
					}
					else{
						echo "<h3 id='h02'><a href='regpage.html' style='text-decoration:none; color:white;'>Criar uma conta </a></h3><h3 id='h03'><a href='javascript:login()' style='text-decoration:none; color:white;'> Log In </a></h3>";
					}
				?>
				<!-- <h3 id="h02"><a href="regpage.html" style="text-decoration:none; color:white;">Criar uma conta </a></h3>
				<h3 id="h03"><a href="javascript:login()" style="text-decoration:none; color:white;"> Log In </a></h3> -->
			</div>
		</div>
		<div id="problems" class="table-responsive">	
			<br><!-- 
			<input placeholder="Usuário" id="username"/> -->
			<input style="color:black" placeholder="Problema" id="problem"/><br><br>
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