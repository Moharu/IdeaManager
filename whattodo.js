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