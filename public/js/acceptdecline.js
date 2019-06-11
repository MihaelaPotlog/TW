
document.getElementById("overlay").addEventListener("click",function(){
    this.style.display="none";
    deleteAlerts();
});
function deleteButton(){

    document.getElementById("accept").style.display="none";
    document.getElementById("decline").style.display="none";
    document.getElementById("resolved").style.display="none";
    console.log("stergs");

}
document.getElementById("tbody-new").addEventListener("click", function (e) {
    let target=e.target;

    document.getElementById("accept").style.display="flex";
    document.getElementById("decline").style.display="flex";
    document.getElementById("resolved").style.display = "none";}
);
document.getElementById("tbody-ongoing").addEventListener("click", function (e) {
         let target=e.target;

        document.getElementById("resolved").style.display = "flex";
    document.getElementById("accept").style.display="none";
    document.getElementById("decline").style.display="none";
});
function eraseAlertDescription(id) {

    deleteButton();
    document.getElementById("accept").style.display = "none";
    document.getElementById("decline").style.display = "none";
    document.getElementById("resolved").style.display = "none";

        document.getElementById("description").textContent="";
         let details=document.getElementById("detail-list").childNodes;
        for(let index=0;index<details.length;index++)
            details[index].textContent="";



        if(id==="resolved")
        {   document.getElementById("description").textContent="Situatia de urgenta a fost rezolvata!";
             document.getElementById("description").style.color="green";}



}



eraseAlertDescription("accept");
eraseAlertDescription("decline");
eraseAlertDescription("resolved");
