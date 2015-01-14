function sendData(){
	xmlhttp = new XMLHttpRequest();
	//document.getElementById("username").value
	//document.getElementById("problem").value
	name = document.getElementById("username").value;
	problem = document.getElementById("problem").value;
    xmlhttp.onreadystatechange = function() {
	    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
	    }
	}
	xmlhttp.open("GET","sendinfo.php?n="+name+"&pr="+problem,true);
    xmlhttp.send();

    document.getElementById("username").value = "";
	document.getElementById("problem").value = "";
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
	document.getElementById("accountForm").innerHTML = "<input id='p02' placeholder='Login'/><input id='p03' placeholder='Senha' /><button id='oklogin' onclick='requestLogin()'>Ok</button>";     
}

function requestLogin(){
	login = document.getElementById("p02").value;
	pw = document.getElementById("p03").value;
	xmlhttp3 = new XMLHttpRequest();
	xmlhttp3.onreadystatechange = function (){
		if(xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
			//RESOLUCAO
			document.getElementById("verification").innerHTML = xmlhttp3.responseText;
			if(document.getElementById("verification").innerHTML == 1){
				document.getElementById("txtHint").innerHTML = "Deu";
			}
			else{
				document.getElementById("txtHint").innerHTML = "Não deu";
			}
		}
	}
	xmlhttp3.open("GET","loginvalidation.php?l="+login+"&p="+pw, true);
	xmlhttp3.send();
}