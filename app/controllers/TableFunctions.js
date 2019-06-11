var varAlerte = new Array();
var safeDanger=0;
let userPoz = { //adresa user
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
	userPoz.lat=position.coords.latitude;
	userPoz.lng=position.coords.longitude;
}
getLocation();
var map;
function initMap() {
	//getLocation();
	console.log(userPoz);
	var userLocation = { lat: userPoz.lat, lng: userPoz.lng }; // = userPoz
	map = new google.maps.Map(document.getElementById('map'), { zoom: 12, center: userLocation });
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
	var userLocation = { lat: userPoz.lat, lng: userPoz.lng }; //	var userLocation = { lat: 47.158455, lng: 27.601442 };
	map = new google.maps.Map(document.getElementById('map'), { zoom: 12, center: userLocation });
	var eventType = document.getElementById('selectoptions').value;
	var eventZone= document.getElementById('selectzone').value;
	if(eventZone == "all"){
		if(eventType=="all"){
			var fsQuery =
			"SELECT 'event' as 'Tipul alertei','description','latitude','longitude' FROM 15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff";
		}
		else{
	var fsQuery =
		"SELECT 'event' as 'Tipul alertei','description','latitude','longitude' FROM 15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff WHERE event=" +
		"'" + eventType + "'";}}
    if(eventZone == "yourarea"){
		//alert("hellyaaaaa");
		//alert(userLocation.lat + 0.5);alert(userLocation.lng + 0.5);
		if(eventType=="all"){
			var fsQuery =
			"SELECT 'event' as 'Tipul alertei','description','latitude','longitude' FROM 15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff WHERE "
			+ "latitude>=" + (userLocation.lat-0.5) + " and latitude<=" + (userLocation.lat+0.5)
		+ " and longitude>=" + (userLocation.lng-0.5) + " and longitude<=" + (userLocation.lng+0.5);
		}else{
		var fsQuery = "SELECT 'event' as 'Tipul alertei','description','latitude','longitude' FROM 15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff WHERE event=" +
		"'" + eventType +"'" + " and latitude>=" + (userLocation.lat-0.5) + " and latitude<=" + (userLocation.lat+0.5)
		+ " and longitude>=" + (userLocation.lng-0.5) + " and longitude<=" + (userLocation.lng+0.5);
	}}

	    google.visualization.drawChart({
		containerId: 'list',
		dataSourceUrl: '//www.google.com/fusiontables/gvizdata?tq=',
		query: fsQuery,
		refreshInterval: 0,
		chartType: 'Table',
		options: {}
	});
	setTimeout(function(){
	var varAlerte = getTableElements();
	var i;
	var alertName;
	for (i = 0; i < varAlerte.length; i = i + 4) {
		alertName = varAlerte[i];
		//if (alertName == eventType) {
			var coords = { lat: Number(varAlerte[i + 2]), lng: Number(varAlerte[i + 3]) };
			addMarker(alertName, coords);

			if(userLocation.lat-0.5<=coords.lat && userLocation.lat+0.5>=coords.lat && userLocation.lng-0.5<=coords.lng && userLocation.lng+0.5>=coords.lng ){
				document.getElementById('status').style.backgroundColor="red";
				document.getElementById('safeDanger').innerHTML="You are in danger !";
		}
	//	}
	}
	}, 2000);
}  
elementFromTableClick=document.getElementsByClassName("google-visualization-table-td");
elementFromTableClick=document.addEventListener('click', function(e) {
    e = e || window.event;
    var target = e.target || e.srcElement,
		text = target.textContent || target.innerText;
		if(text=="FIRE" || text=="EARTHQUAKE" || text=="INUNDATION" || text=="TORNADO"){
			var alertLocation={lat:target.nextSibling.nextSibling.innerText,lng:target.nextSibling.nextSibling.nextSibling.innerText};
			//alert(alertLocation.lat);
			//alert(alertLocation.lng);
			//google.maps.Map(document.getElementById('map').setCenter(alertLocation));
			gMap = map;
			gMap.setZoom(15);      // This will trigger a zoom_changed on the map
			gMap.setCenter(new google.maps.LatLng(alertLocation.lat,alertLocation.lng));}
}, false);