function sadrzi(slova,rec){
	for (var i = 0; i < rec.length; i++) {
		for (var j = 0; j < slova.length; j++) {
			if (rec[i] == slova[j]) {
				slova[j] = '.';
				break;
			} else if (j == slova.length - 1)
				return false;
		}
	}
	return true;
}

function trazi() {
	var slova = document.getElementById("slova").value;
	var rec = document.getElementById("rec").value;
	var flag = sadrzi(slova.split(''),rec.split(''));
	var txt ="";
	var izlaz = document.getElementById("izlaz");
	if(flag)
		txt = "rec "+ rec+ " sadrzi slova "+slova+"<br/>";
	else
		txt="rec "+ rec+ " ne sadrzi slova "+slova+"<br/>";
	izlaz.innerHTML=txt;
			
}