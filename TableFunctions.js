var varAlerte = new Array();
let userPoz = {
	lat: '',
	lng: ''
};
function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
		console.log(userPoz);
	} else {
		console.log('geo error');
	}
}

function showPosition(position) {
	userPoz.lat = position.coords.latitude;
	userPoz.lng = position.coords.longitude;
}

function initMap() {
	getLocation();
	console.log(userPoz);
	var iasiLocation = { lat: 47.158455, lng: 27.601442 }; //aici poate fi inlocuit cu adresa actuala a userului
	var map = new google.maps.Map(document.getElementById('map'), { zoom: 12, center: iasiLocation });
	google.charts.load('current', { packages: [ 'table' ] });
	google.charts.setOnLoadCallback(drawVisualization);
	google.charts.setOnLoadCallback(selectEvents);

	var submitButton = document.getElementById('submit');
	submitButton.addEventListener('click', selectEvents, false);
}

function addMarker(alertType, coords) {
	const alert = 'img/markers/' + alertType + '.png';
	var marker = new google.maps.Marker({
		position: coords,
		map: map,
		icon: alert
	});
	marker.setMap(map);
}
function drawVisualization() {
	var data = google.visualization.drawChart({
		containerId: 'list',
		dataSourceUrl: '//www.google.com/fusiontables/gvizdata?tq=',
		query:
			"SELECT 'event' as 'Tipul alertei','description','latitude','longitude' FROM " +
			'15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff',
		refreshInterval: 0,
		chartType: 'Table',
		options: {}
	});
}

function getTableElements() {
	vectorAlerte = new Array();
	const td = document.getElementsByClassName('google-visualization-table-td');
	var i;
	for (i = 0; i < td.length; i++) {
		vectorAlerte.push(td[i].innerHTML);
	}
	return vectorAlerte;
}

function selectEvents() {
	console.log('am apasat');
	var iasiLocation = { lat: 47.158455, lng: 27.601442 };
	map = new google.maps.Map(document.getElementById('map'), { zoom: 12, center: iasiLocation });
	const varAlerte = getTableElements();
	const eventType = document.getElementById('selectoptions').value;
	const fsQuery =
		"SELECT 'event' as 'Tipul alertei','description','latitude','longitude' FROM 15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff WHERE event=" +
		eventType;

	var data = google.visualization.drawChart({
		containerId: 'list',
		dataSourceUrl: '//www.google.com/fusiontables/gvizdata?tq=',
		query: fsQuery,
		refreshInterval: 0,
		chartType: 'Table',
		options: {}
	});
	var i;
	var alertName;
	for (i = 0; i < varAlerte.length; i = i + 4) {
		alertName = varAlerte[i];
		if (alertName == eventType) {
			var coords = { lat: Number(varAlerte[i + 2]), lng: Number(varAlerte[i + 3]) };
			addMarker(alertName, coords);
		}
	}
}
