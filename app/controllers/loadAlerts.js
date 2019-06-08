
function addAlert(alertData,containerId){
    var tr = document.createElement("tr");

    var tdEvent=document.createElement("td");
    var tdDescription=document.createElement("td");
    tdEvent.setAttribute("class",alertData["identifier"]);
    tdDescription.setAttribute("class",alertData["identifier"]);
    tdEvent.innerHTML=alertData["event"];
    tdDescription.innerHTML=alertData["description"];
    tdEvent.addEventListener("click",displayDescription);

    tr.appendChild(tdEvent);
    tr.appendChild(tdDescription);
    var tbody=document.getElementById(containerId);
    tbody.appendChild(tr);

}

function clearTbody(tbodyId){
    const tbody=document.getElementById(tbodyId);
    while(tbody.firstChild)
     tbody.removeChild(tbody.firstChild);
}

document.getElementById("tbody-new").addEventListener("click",function(e){

let identifier=e.target;
    document.getElementById("sender").appendChild(document.createTextNode(identifier.innerHTML));
});
// function displayDescription(){
// document.getElementById("category")=
// }
function updateTables(alerts){
    clearTbody("tbody-new");
    clearTbody("tbody-ongoing");
    document.getElementById("category").innerHtml="here";
    for (var index = alerts.length - 1; index >= 0; index--) {
        if (alerts[index][14] === "new")
            addAlert({
                "identifier": alerts[index][0],
                "event": alerts[index][6],
                "description": alerts[index][10]
            }, "tbody-new");
        else if(alerts[index][14]==="ongoing")
            addAlert({
            "identifier": alerts[index][0],
            "event": alerts[index][6],
            "description": alerts[index][10]
        }, "tbody-ongoing");

    }
}
function callingServer() {
    var xmlhttp = new XMLHttpRequest();
    document.getElementById("category").innerHtml="here";

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            var response = JSON.parse(this.responseText);

             var alerts = response.data;

            updateTables(alerts);


        }
    };
    xmlhttp.open("GET", "../app/models/FusionTabelModel.php?request=alerts", true);
    xmlhttp.send();
}
console.log("s-a apelat loadAlerts");
callingServer();
setInterval(callingServer,5000);
