	function sendData(){
		
		var request = new XMLHttpRequest();
		request.onerror = function(event){
			console.log('Erreur :', event);
		}
		var recup = document.getElementsByTagName('input');
		log = recup[0].value;
		pass = recup[1].value;
		pack = "log="+recup[0].value+"&pass="+recup[1].value;
		request.open('POST', "sql.php", true);
		request.setRequestHeader('Content-type',"application/x-www-form-urlencoded");
		request.onreadystatechange = function(){
			if(request.readyState == 4 && request.status == 200) {
				var return_data = this.responseText;
				document.getElementById('data').innerHTML = return_data;	
			}
		}

		request.send(pack);
	}


function sendDataRegistration(){
	var request = new XMLHttpRequest();
	request.onerror = function(event){
		console.log('erreur', event);
	}
	var elements = document.getElementsByTagName('input');
	var log = elements[0].value;
	var pass = elements[1].value;
	var pass2 = elements[2].value;
	var pack = "log="+log+"&pass="+pass+"&pass2="+pass2;
	console.log('log', elements[0].value, 'pass', elements[1].value);
	request.open('POST', 'inscriptionSQL.php', true);
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	request.onload = function(){
		var return_data = this.responseText;
		document.getElementById('data').innerText = return_data;
	}
	request.send(pack);
}