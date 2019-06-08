<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CriC</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link href="css/Autoritati.css" rel="stylesheet" type="text/css">
    <link href="css/crisisButtons.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="navbar">
        <ul class="navList">
            <li><img id="logo" src="img/logo.png" alt="offf:( logo" /></li>
            <li id="out" style="float:right"><a href="crisismap"><img id="logout" src="img/logout.png" alt="offf:( logout" /></a></li>
            <li id="declare" style="float:right"><a href="formular-disparitii">Declare a missing person</a></li>
            <li id="missing" style="float:right"><a href="">Missing persons</a></li>
        </ul>
    </div>
    <div id='alert' class='alert'>
        <p id='pAlert'>ALERT</p>
    </div>

    <div id='allAlerts' class='allAlerts'>
        <div id='fire' class='alerts'><a href="formularAlerte?tipalerta=FIRE"><img src='img/fire.png' alt="fire icon"></a></div>
        <div id='person' class='alerts'><a href="formularAlerte?tipalerta=TORNADO"><img src='img/person.png' alt="person icon"></a></div>
        <div id='inundation' class='alerts'><a href="formularAlerte?tipalerta=INUNDATION"><img src='img/inundation.png' alt="inundation icon"></a></div>
        <div id='earthquake' class='alerts'><a href="formularAlerte?tipalerta=EARTHQUAKE"><img src='img/earthquake.png' alt="earth icon"></a></div>
    </div>


    <div class=allfour>

        <div class="liste">

            <div id="container1">
                <a href="#detalii" id="anchor-new">
                    <table style="width:100%" id="new-alerts">
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Description</th>
                            </tr>
                        <tbody id="tbody-new">

                        </tbody>

                    </table>
                </a>
            </div>

            <div id="container2">
                <a href="#detalii" id="anchor-ongoing">
                    <table style="width:100%" id="ongoing-alerts">
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Description</th>
                            </tr>
                        <tbody id="tbody-ongoing">

                        </tbody>

                    </table>
                </a>
            </div>

        </div>
        <!--liste -->



        <div id="detalii">

            <div class="descriere eveniment">
                <ul>
                    <li id="identifier"></li>
                    <li id="category"> </li>
                    <li id="sender"> </li>
                    <li id="sent"></li>
                    <li id="status"></li>
                    <li id="scope"></li>
                    <li id="event"></li>
                    <li id="urgency"></li>
                    <li id="severity"></li>
                    <li id="certainty"></li>
                    <li id="description"></li>
                    <li id="areaDesc"></li>
                    <li id="latitude"></li>
                    <li id="longitude"></li>
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

                <div id="visualization"></div>

                <div id="acceptdecline">
                    <button id="accept" onclick="deleteButton()">Accept </button>
                    <button id="decline" onclick="deleteButton()">Decline</button>
                </div>

            </div>

            <iframe id="map" src="http://www.google.org/crisismap/weather_and_events?hl=en&llbox=57.81%2C7.74%2C-25.35%2C-160.35&t=TERRAIN&layers=30%2C1%2C31%2C32%2C1340721332252%3A49%2C20%2C12%2Clayer9%2C2&embedded=true" style="border: 1px solid #ccc"></iframe>

        </div>

    </div>


    <!--    FOOTER -->
    <footer>
        <p>Copyright: <strong>Autoritati</strong></p>
        <p>Contact: 07XX YYY ZZZ</p>
    </footer>


    <script src="js/acceptdecline.js"></script>
    <script src="js/Alerts.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <!--    <script>-->
    <!---->
    <!--        function initMap() {-->
    <!--            google.charts.load("current", {packages: ['table']});-->
    <!--            google.charts.setOnLoadCallback(drawVisualization1);-->
    <!---->
    <!---->
    <!--            function drawVisualization1() {-->
    <!--                var data = google.visualization.drawChart({-->
    <!--                    "containerId": "aa1",-->
    <!--                    "dataSourceUrl": "//www.google.com/fusiontables/gvizdata?tq=",-->
    <!--                    "query": "SELECT 'description' as 'New alerts' FROM " +-->
    <!--                        "15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff WHERE type='new'",-->
    <!--                    "refreshInterval": 0,-->
    <!--                    "chartType": "Table",-->
    <!--                    "options": {}-->
    <!--                });-->
    <!---->
    <!--            }-->
    <!---->
    <!---->
    <!--            google.charts.load("current", {packages: ['table']});-->
    <!--            google.charts.setOnLoadCallback(drawVisualization2);-->
    <!---->
    <!---->
    <!--            function drawVisualization2() {-->
    <!--                var data = google.visualization.drawChart({-->
    <!--                    "containerId": "aa2",-->
    <!--                    "dataSourceUrl": "//www.google.com/fusiontables/gvizdata?tq=",-->
    <!--                    "query": "SELECT 'description' as 'On going alerts' FROM " +-->
    <!--                        "15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff WHERE type='ongoing'",-->
    <!--                    "refreshInterval": 0,-->
    <!--                    "chartType": "Table",-->
    <!--                    "options": {}-->
    <!--                });-->
    <!---->
    <!--            }-->
    <!---->
    <!--            var valoare = document.getElementsByClassName("google-visualization-table-td").innerHTML;-->
    <!--            document.getElementById("category").innerHTML = valoare.length;-->
    <!--        }-->
    <!--    </script>-->

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkW7jzRa0yN5JlAwuHgdxSViRHEQURFy0"> </script>
    <script async defer src="../app/controllers/loadAlerts.js"></script>


</body>

</html>