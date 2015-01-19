function sendData(){
	xmlhttp = new XMLHttpRequest();
	//document.getElementById("username").value
	//document.getElementById("problem").value
	var problem = document.getElementById("problem").value;
	document.getElementById("problem").value = "";
	var name = document.getElementById("user").innerHTML;
    xmlhttp.onreadystatechange = function() {
	    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
	        recData();
	    }
	}
	xmlhttp.open("GET","sendinfo.php?n="+name+"&pr="+problem,true);
    xmlhttp.send();
}

function recData(){
	xmlhttp2 = new XMLHttpRequest();
    xmlhttp2.onreadystatechange = function() {
	    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
	        document.getElementById("listProblems").innerHTML = xmlhttp2.responseText;
	    }
	}
    xmlhttp2.open("GET","listproblems.php",true);
    xmlhttp2.send();
}

function login(){
	document.getElementById("accountForm").innerHTML = "<input id='p02' placeholder='Login'/><input type='password' id='p03' placeholder='Senha' /><h3 id='oklogin'><a href='javascript:requestLogin()' style='text-decoration:none; color:white;'>Ok</a></h3><h3 id='backlogin'><a href='javascript:displayMain()' style='text-decoration:none; color:white;'> Voltar </a></h3>";     
}

function requestLogin(){
	var login = document.getElementById("p02").value;
	var pw = document.getElementById("p03").value;
	xmlhttp3 = new XMLHttpRequest();
	xmlhttp3.onreadystatechange = function (){
		if(xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
			//RESOLUCAO
			document.getElementById("verification").innerHTML = xmlhttp3.responseText;
			if(document.getElementById("verification").innerHTML == 1){
				document.getElementById("p02").value = "";
				document.getElementById("p03").value = "";				
				document.getElementById("accountForm").innerHTML = "<h2 id='h02'><img id='imglogin' src='' alt='Imagem'> Bem vindo(a), </h2><h2 id='user'>"+login+"</h2><h5 id='logout' onclick='logout()'>logout</h5>";
    			document.getElementById('sendButton').setAttribute('class','btn btn-default btn-md active');
    			getimg();
			}
			else{
				document.getElementById("p03").value = "";
				document.getElementById("txtHint").innerHTML = "Usuário ou senha inválidos!";
			}	
		}
	}
	xmlhttp3.open("GET","loginvalidation.php?l="+login+"&p="+pw, true);
	xmlhttp3.send();
}

function displayMain(){
	document.getElementById("accountForm").innerHTML = "<h3 id='h04'><a href='regpage.html' style='text-decoration:none; color:white;''> Criar uma conta </a></h3><h3 id='h05'><a href='javascript:login()' style='text-decoration:none; color:white;'> Log In </a></h3>";
}

function sendReg(){
	var login = document.getElementById("login").value;
	var password = document.getElementById("password").value;
	var password2 = document.getElementById("password2").value;
	var imagelink = document.getElementById("imagelink").value;
	var ok = 0;
	if(login !== ""){
		if(password !==""){
			if(password === password2){
				if(imagelink !== ""){
					xmlhttp4 = new XMLHttpRequest();
					xmlhttp4.onreadystatechange = function (){
						if(xmlhttp4.readyState == 4 && xmlhttp4.status == 200) {
							document.getElementById("verification").innerHTML = xmlhttp4.responseText;
							if(document.getElementById("verification").innerHTML == 1){
								document.getElementById("txtHint").innerHTML = "Usuário já existe!";
							}
							else{
								document.getElementById("txtHint").innerHTML = "Aqui";
								xmlhttp5 = new XMLHttpRequest();
								xmlhttp5.onreadystatechange = function (){
									if(xmlhttp5.readyState == 4 && xmlhttp5.status == 200){
										//RESOLUCAO
										document.getElementById("txtHint").innerHTML = xmlhttp5.responseText;
									}
								}
								xmlhttp5.open("GET","createUser.php?l="+login+"&i="+imagelink+"&p="+password, true);
								xmlhttp5.send();
							}
						}
					}
					xmlhttp4.open("GET","verifyuser.php?l="+login, true);
					xmlhttp4.send();
				}
				else{
					document.getElementById("txtHint").innerHTML = "É necessário o link da imagem!";
				}				
			}
			else{
				document.getElementById("txtHint").innerHTML = "As senhas não são idênticas!";	
			}
		}	
		else{
			document.getElementById("txtHint").innerHTML = "Senha inválida!";	
		}
	}
	else{
		document.getElementById("txtHint").innerHTML = "Usuário Inválido!";	
	}
}

function logout(){
	document.getElementById("accountForm").innerHTML = "<h3 id='h04'><a href='regpage.html' style='text-decoration:none; color:white;''> Criar uma conta </a></h3><h3 id='h05'><a href='javascript:login()' style='text-decoration:none; color:white;'> Log In </a></h3>";
	document.getElementById('sendButton').setAttribute('class','btn btn-default btn-md disabled');
	xmlhttp6 = new XMLHttpRequest();
    xmlhttp6.open("GET","logout.php",true);
    xmlhttp6.send();
}

function getimg(){
	xmlhttp7 = new XMLHttpRequest();
	xmlhttp7.onreadystatechange = function (){
		if(xmlhttp7.readyState == 4 && xmlhttp7.status == 200){
			document.getElementById('imglogin').src = xmlhttp7.responseText;
			//document.getElementById('imglogin').alt = 'batata';
		}
	}
	xmlhttp7.open("GET","usrimg.php", true);
	xmlhttp7.send();
}