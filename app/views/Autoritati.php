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
    <div id="overlay"></div>
    <div class="navbar">
        <ul class="navList">
            <li><img id="logo" src="img/logo.png" alt="offf:( logo" /></li>
            <li id="out" style="float:right"><a href="autoritati-logout"><img id="logout" src="img/logout.png" alt="offf:( logout" /></a></li>
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
            <div class="div-new">
                <!--            <div class="titlu-div">-->
                <!--               <p class="titlu-alerte">Alerte noi</p>-->
                <!--            </div>-->

                <div id="container1">
                    <a href="#detalii" id="anchor-new">
                        <table style="width:100%" id="new-alerts" class="alert-table">
                            <thead>
                                <tr>
                                    <th>Tip Alerta</th>
                                    <th>Detalii</th>
                                </tr>
                            <tbody id="tbody-new">

                            </tbody>

                        </table>
                    </a>
                </div>
            </div>

            <div class="div-ongoing">
                <!--        <div class="titlu-div">-->
                <!--            <p class="titlu-alerte">Alerte in desfasurare</p>-->
                <!--        </div>-->
                <div id="container2">


                    <a href="#detalii" id="anchor-ongoing">
                        <table style="width:100%" id="ongoing-alerts" class="alert-table">
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


        </div>
        <!--liste -->



        <div id="detalii">

            <div class="descriere eveniment">
                <h2>Detalii-<strong>Alertă</strong></h2>
                <ul id="detail-list">
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
                    <li id="areaDesc"></li>
                    <li id="latitude"></li>
                    <li id="longitude"></li>
                </ul>
                <p id="description">
                </p>

                <div id="visualization"></div>

                <div id="acceptdecline">
                    <button id="accept">Accept </button>
                    <button id="decline">Decline</button>
                    <button id="resolved">Resolved</button>
                    <!--                <div id="close-icon-div" ><img src="img/close-details.png" id="close-icon" alt="close icon"/></div>-->
                </div>

            </div>

            <div id="map">

            </div>

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
    <script async defer src="../app/controllers/loadAlerts.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkW7jzRa0yN5JlAwuHgdxSViRHEQURFy0&callback=initMap"> </script>


</body>

</html>