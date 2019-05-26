
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CriC</title>
    <link rel="shortcut icon" type="image/png" href="logo.png">
    <link href="Autoritati.css" rel="stylesheet" type="text/css">
    <link href="crisisButtons.css" rel="stylesheet" type="text/css">
  
</head>
<body>
    
    
        <ul class="navList">
            <li><img id="logo" src ="img/logo.png" alt="offf:( logo" /></li>
            <li id="out" style="float:right"><a href="crisisMap.html"><img id="logout" src= "img/logout.png" alt="offf:( logout" /></a></li>    
            <li id="declare" style="float:right"><a href="formular-disparitii.html">Declare a missing person</a></li>
            <li id="missing" style="float:right"><a href="">Missing persons</a></li>            
        </ul>
   
    <div id='alert' class='alert'><p id='pAlert'>ALERT</p></div>
    
    <div id='allAlerts' class='allAlerts'>
        <div id='fire' class='alerts'><a href="formularAlerte.php?tipalerta=FIRE" ><img src='img/fire.png' alt="fire icon"></a></div>
        <div id='person' class='alerts'><a href="formularAlerte.php?tipalerta=TORNADO"><img src='img/person.png' alt="person icon"></a></div>
        <div id='inundation' class='alerts'><a href="formularAlerte.php?tipalerta=INUNDATION"><img src='img/inundation.png' alt="inundation icon"></a></div>
        <div id='earthquake' class='alerts'><a href="formularAlerte.php?tipalerta=EARTHQUAKE"><img src='img/earthquake.png' alt="earth icon"></a></div>
    </div>

   
<div class=allfour> 

   <div class="liste">

        <div id="container1">
       
         <p class="news">New alerts</p>
        
        </div>
    <div id="container2">
        <p class="ongoing">Ongoing alerts</p>
        
    </div>

     </div> <!--liste -->
 


    <div id="detalii">

         <div class="descriere eveniment">

            <ul>
                 <li><strong>Emergency Type:</strong>---</li>
                 <li><strong>Location:</strong>---</li>
                 <li><strong>Sender:</strong>---</li>
            </ul>

             <p>Tornadoes ripped across four states amid a severe weather outbreak on Thursday,
        leaving a trail of damage in their wake. Eighteen tornadoes were reported in total across Kentucky, Indiana,
        Michigan and Alabama, as well as 156 wind reports and 67 hail reports, according to the National Weather Service (NWS).
        Damages, including destroyed houses, toppled trees and downed power lines, have been reported as a result of the storm.
        Over 130,000 electric customers lost power from Michigan through Alabama on Thursday afternoon, and those numbers likely
        rose into the night as severe weather continued across the region.
        A state of emergency was declared in McCracken County in western Kentucky after a tornado touched down, according to local news station WPSD.
        Only one person was hurt with only minor injuries, according to Kentucky State Police. The injury occurred when a large tree was pushed into a home. Four cows were killed.
        Major structural damage occurred to at least a dozen homes, according to the National Weather Service (NWS) office in Paducah in a public statement.
            </p>
           
            

            <div id="acceptdecline">
                <button id="accept"  onclick="deleteButton()">Accept </button>
                <button id="decline"  onclick="deleteButton()">Decline</button>
            </div>
           
        </div>

        <iframe id="map" src="http://www.google.org/crisismap/weather_and_events?hl=en&llbox=57.81%2C7.74%2C-25.35%2C-160.35&t=TERRAIN&layers=30%2C1%2C31%2C32%2C1340721332252%3A49%2C20%2C12%2Clayer9%2C2&embedded=true" style="border: 1px solid #ccc"></iframe>
        
    </div>
    
</div>
    
    
<!--    FOOTER -->
    <footer>
        <p>Copyright:  <strong>Autoritati</strong></p>
        <p>Contact: 07XX YYY ZZZ</p>
    </footer>




  <script src="acceptdecline.js"></script>
  <script src="Alerts.js"></script>

     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkW7jzRa0yN5JlAwuHgdxSViRHEQURFy0&callback=initMap"
        ></script>
    <script src="loadLists.js"></script>
</body>

</html>
