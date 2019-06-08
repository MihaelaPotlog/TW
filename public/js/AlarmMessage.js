

document.getElementById("emblem").addEventListener("click",displayPopup,false);
document.getElementById("mapRef").addEventListener("click",changePopup,false);
function displayPopup(){
    document.getElementById("alarmPopup").style.display="grid";
}

function changePopup(){
    document.getElementById("alarmPopup").style.width="500px";
    document.getElementById("alarmPopup").style.marginLeft="25px";
    document.getElementById("alarmPopup").style.marginTop="110px";
    document.getElementById("mapRef").style.display="none";
    document.getElementById("close").style.display="flex";
    document.getElementById("close").addEventListener("click",closePopup,false);




}

function closePopup(){
    document.getElementById("alarmPopup").style.display="none";
    document.getElementById("alarmPopup").style.width="900px";
    document.getElementById("alarmPopup").style.marginLeft="300px";
    document.getElementById("alarmPopup").style.marginTop="30px";
    document.getElementById("close").style.display="none";
    document.getElementById("mapRef").style.display="flex";

}