var varAlerte = new Array();
let userPoz = {
	//adresa user
	lat: '',
	lng: ''
};
function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
		//console.log(userPoz);
	} else {
		//console.log('geo error');
	}
}

function showPosition(position) {
	//userPoz.lat = position.coords.latitude;
	//userPoz.lng = position.coords.longitude;
	//alert(position.coords.latitude);
	//alert(position.coords.longitude);
	userPoz.lat = position.coords.latitude;
	userPoz.lng = position.coords.longitude;
}
getLocation();
const formular = document.getElementById('formAutoritati');
formular.addEventListener('submit', createXml);

function createXml(e) {
	e.preventDefault();
	const CAP = document.implementation.createDocument('', '', null);
	const alert = CAP.createElement('alert');
	alert.setAttribute('xmlns', 'urn:oasis:names:tc:emergency:cap:1.2');

	const identifier = CAP.createElement('identifier');
	identifier.innerHTML = Math.random().toString(36).substr(2, 9);
	alert.appendChild(identifier);

	const sender = CAP.createElement('sender');
	sender.innerHTML = document.getElementById('sender').value;
	alert.appendChild(sender);

	const sent = CAP.createElement('sent');
	sent.innerHTML = document.getElementById('sent').value;
	alert.appendChild(sent);

	const status = CAP.createElement('status');
	status.innerHTML = document.getElementById('status').value;
	alert.appendChild(status);

	const scope = CAP.createElement('scope');
	scope.innerHTML = 'Public';
	alert.appendChild(scope);

	//create info sub-section
	const info = CAP.createElement('info');

	const category = CAP.createElement('category');
	category.innerHTML = document.getElementById('category').value;
	info.appendChild(category);

	const event = CAP.createElement('event');
	event.innerHTML = document.getElementById('event').value;
	info.appendChild(event);

	const urgency = CAP.createElement('urgency');
	urgency.innerHTML = document.getElementById('urgency').value;
	info.appendChild(urgency);

	const severity = CAP.createElement('severity');
	severity.innerHTML = document.getElementById('severity').value;
	info.appendChild(severity);

	const certainty = CAP.createElement('certainty');
	certainty.innerHTML = document.getElementById('certainty').value;
	info.appendChild(certainty);

	const description = CAP.createElement('description');
	description.innerHTML = document.getElementById('description').value;
	info.appendChild(description);

	//create area-subsection
	const area = CAP.createElement('area');

	const areaDesc = CAP.createElement('areaDesc');
	areaDesc.innerHTML = document.getElementById('areaDesc').value;
	area.appendChild(areaDesc);

	const circle = CAP.createElement('circle');
	circle.innerHTML = `${userPoz.lat},${userPoz.lng}`;
	console.log(circle);
	area.appendChild(circle);

	info.appendChild(area);

	alert.appendChild(info);

	CAP.appendChild(alert);

	sendToServer(CAP);
}

function sendToServer(CAP) {
	const serializer = new XMLSerializer();
	const xmlString = serializer.serializeToString(CAP);
	const xhr = new XMLHttpRequest();
	xhr.open('POST', '../app/models/FusionTabelModel.php?request=insert', true);
	xhr.setRequestHeader('Content-Type', 'text/xml');
	xhr.send(xmlString);
	console.log('sent');
	formular.reset();
}
