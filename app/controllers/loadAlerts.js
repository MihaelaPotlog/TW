
function initMap() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(makeDefaultMap);

    } else {
        console.log('geo error');
    }
}

function makeDefaultMap(position) {
    let coords=new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
    new google.maps.Map(document.getElementById('map'), {zoom: 11, center:coords});
}


function addAlert(alertData,containerId){
    var tr = document.createElement("tr");

        for (let index=0;index<alertData.length;index++) {
            var tdElem=document.createElement("td");
              tdElem.innerHTML = alertData[index];
                if(index!==6&&index!==10)
                 {tdElem.style.display="none";}
                 tr.appendChild(tdElem);

        }


    var tbody=document.getElementById(containerId);
    tbody.appendChild(tr);

}

function clearTbody(tbodyId){
    const tbody=document.getElementById(tbodyId);
    while(tbody.firstChild)
     tbody.removeChild(tbody.firstChild);
}

function tableListener(tableType) {
    document.getElementById(tableType).addEventListener("click", function (e) {

        let target = e.target;

        let dataInfo = target.parentNode.childNodes;
        document.getElementById("identifier").textContent = dataInfo[0].innerHTML;
        document.getElementById("category").textContent = dataInfo[1].innerHTML;
        document.getElementById("sender").textContent = dataInfo[2].innerHTML;
        document.getElementById("sent").textContent = dataInfo[3].innerHTML;
        document.getElementById("status").textContent = dataInfo[4].innerHTML;
        document.getElementById("scope").textContent = dataInfo[5].innerHTML;
        document.getElementById("event").textContent = dataInfo[6].innerHTML;
        document.getElementById("urgency").textContent = dataInfo[7].innerHTML;
        document.getElementById("severity").textContent = dataInfo[8].innerHTML;
        document.getElementById("certainty").textContent = dataInfo[9].innerHTML;
        document.getElementById("description").textContent = dataInfo[10].innerHTML;
        document.getElementById("areaDesc").textContent = dataInfo[11].innerHTML;
        document.getElementById("latitude").textContent = dataInfo[12].innerHTML;
        document.getElementById("longitude").textContent = dataInfo[13].innerHTML;
        let alertLocation = new google.maps.LatLng(dataInfo[12].innerHTML, dataInfo[13].innerHTML);

    // if(isNaN(dataInfo[12].innerHTML)===0 && isNaN(dataInfo[13].innerHTML===0)) {
        new google.maps.Map(document.getElementById('map'), {zoom: 12, center: alertLocation});
        addMarker(document.getElementById("event").textContent, alertLocation, map);
        console.log("hello");
    // }

    });
}
tableListener("tbody-new");
tableListener("tbody-ongoing");
function addMarker(alertType, coords) {
    const alert = 'img/markers/' + alertType + '.png';
    var marker = new google.maps.Marker({
        position: coords,
        map: map,
        icon: alert
    });
    marker.setMap(map);

}


    document.getElementById("accept").addEventListener("click",
        function modifyAlertType(e) {
            let identifier = document.getElementById("identifier").innerHTML;
            eraseAlertDescription("accept");
            callingServer2("../app/models/FusionTabelModel.php?request=modify", "POST", identifier);
            // deleteButton();

    });
    document.getElementById("decline").addEventListener("click",
        function modifyAlertType(e) {
            let identifier = document.getElementById("identifier").innerHTML;
            eraseAlertDescription("decline");
            callingServer2("../app/models/FusionTabelModel.php?request=delete", "POST", identifier);
            // deleteButton();

    });
document.getElementById("resolved").addEventListener("click",
    function modifyAlertType(e) {
        let identifier = document.getElementById("identifier").textContent;
        eraseAlertDescription("resolved");
        console.log("RESOLVED:"+identifier);
        callingServer2("../app/models/FusionTabelModel.php?request=delete", "POST", identifier);
        // deleteButton();

    });

    function updateTables(alerts) {
        clearTbody("tbody-new");
        clearTbody("tbody-ongoing");
        document.getElementById("category").innerHtml = "here";
        for (var index = alerts.length - 1; index >= 0; index--) {
            if (alerts[index][14] === "new")
                addAlert(alerts[index], "tbody-new");
            else if (alerts[index][14] === "ongoing")
                addAlert(alerts[index], "tbody-ongoing");

        }
    }

    function callingServer(url) {
        var xmlhttp = new XMLHttpRequest();

        document.getElementById("category").innerHtml = "here";
        var response;

        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                response = JSON.parse(this.responseText);


                updateTables(response.data);


            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();


    }

    console.log("s-a apelat loadAlerts");
    callingServer("../app/models/FusionTabelModel.php?request=alerts");
    setInterval(callingServer, 5000, "../app/models/FusionTabelModel.php?request=alerts");

    function callingServer2(url, httpMethod, identifier) {
        var xmlhttp = new XMLHttpRequest();


        var response;

        xmlhttp.onreadystatechange = function (data) {
            if (this.readyState === 4 && this.status === 200) {



            }
        };
        xmlhttp.open(httpMethod, url, true);
        xmlhttp.setRequestHeader('Content-Type', 'text');
        xmlhttp.send(identifier);




    };

