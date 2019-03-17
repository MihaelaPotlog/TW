function displayDescription(){
    document.getElementById("type").innerHTML="Emergency Type:---";
    document.getElementById("location").innerHTML="Location:---";
    document.getElementById("sender").innerHTML="Sender:---";
    document.getElementById("des").innerHTML="Tornado in Shiawassee County had EF-2 damage with winds up to 125 mph";


}


function giveAcceptDecline(){
    displayDescription();
    document.getElementById("accept").style.backgroundColor="#4391DF";
    document.getElementById("accept").innerHTML="Accept";
    document.getElementById("decline").innerHTML="Decline";
    document.getElementById("decline").style.backgroundColor="#BE0D21";



}

function deleteButton(){
    document.getElementById("acceptdecline").style.display="none";
    document.getElementById("accept").style.display="none";
    document.getElementById("decline").style.display="none";

}