alert("yo");

function enableButton(){
	
	if(document.getElementById("check").checked){
		document.getElementById("SbmBtn").disabled=false;
	}
	
	else{
		document.getElementById("SbmBtn").disabled=true;
	}
}

function confirmSubmit() {
	alert ('Appointment made successfully.');
}