function displayAlerts() {
	//alert('hello');
	document.getElementById('alert').style.display = 'none';
	document.getElementById('allAlerts').style.display = 'block';
	document.getElementById('fire').style.display = 'inline-block';
	document.getElementById('person').style.display = 'inline-block';
	document.getElementById('inundation').style.display = 'inline-block';
	document.getElementById('earthquake').style.display = 'inline-block';
	document.getElementById('status').style.display='none';
}

fireButton = document.getElementById('fire');
personButton = document.getElementById('person');
inundationButton = document.getElementById('inundation');
earthquakeButton = document.getElementById('earthquake');
personButton.addEventListener('click', deleteAlerts, false);
fireButton.addEventListener('click', deleteAlerts, false);
inundationButton.addEventListener('click', deleteAlerts, false);
earthquakeButton.addEventListener('click', deleteAlerts, false);
alertButton = document.getElementById('alert');
alertButton.addEventListener('click', displayAlerts, false);
documentus=document.addEventListener('click',vfInchidere,false);

function deleteAlerts() {
	//alert('hello');
	document.getElementById('alert').style.display = 'flex';
	document.getElementById('allAlerts').style.display = 'none';
	document.getElementById('fire').style.display = 'none';
	document.getElementById('person').style.display = 'none';
	document.getElementById('inundation').style.display = 'none';
	document.getElementById('earthquake').style.display = 'none';
	document.getElementById('status').style.display='block';
}
function vfInchidere(){
if(	document.getElementById('alert').style.display == 'none'){
	//alert("NONE");
		document.addEventListener('click', function(e) {
			deleteAlerts();
	}, false);
	document.getElementById('alert').style.display == 'flex';
}
alertButton = document.getElementById('pAlert');
alertButton.addEventListener('click', displayAlerts, false);}