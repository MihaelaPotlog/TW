<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Crisis Map</title>
    <link rel="stylesheet" href="css/crisisMap.css">
    <link rel="stylesheet" href="css/AlarmMessage.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link href="css/crisisButtons.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="alarmPopup">
        <div id="alarmIcon"><img src="img/alarm.png" alt="alarma"></div>
        <p id="description"> <strong> Alert:danger in your zone .Please...</strong></p>
        <a href="#map" onclick="changePopup()"><img id="mapRef" src="img/mapicon.png" alt="mapicon"></a>
        <img id="close" src="img/close.png" alt="close">
    </div>
    <div id="id01" class="modal">

        <form class="modal-content animate" action="login-submit" method="POST">


            <div class="loginbox">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <button class="mybutton" type="submit">Login</button>
                <button class="mybutton" type="button" id="closebtn">Close</button>
            </div>


        </form>
    </div>


    <div id="top">
        <div id='emblem' class='emblem'><img id="logo" onclick="displayPopup()" src="img/logo.png" alt="logo"></div>
        <div>

            <?php

            if (isset($_SESSION['err'])) {
                echo $_SESSION['err'];
                unset($_SESSION['err']);
            }
            ?>
        </div>


        <div id='login' class='login'><button class="mybutton" id="logbutton" style="width:auto;">Login</button>
        </div>
    </div>
    <div id='alert' class='alert'>
        <p id='pAlert'>ALERT</p>
    </div>

    <div id='allAlerts' class='allAlerts'>
        <div id='fire' class='alerts'><a href="formularAlerte.php?tipalerta=FIRE"><img src='img/fire.png' alt="fire icon"></a></div>
        <div id='person' class='alerts'><a href="formularAlerte.php?tipalerta=TORNADO"><img src='img/person.png' alt="person icon"></a></div>
        <div id='inundation' class='alerts'><a href="formularAlerte.php?tipalerta=INUNDATION"><img src='img/inundation.png' alt="inundation icon"></a></div>
        <div id='earthquake' class='alerts'><a href="formularAlerte.php?tipalerta=EARTHQUAKE"><img src='img/earthquake.png' alt="earth icon"></a></div>
    </div>
    <div id='status' class='status'>
        <p class='status' id='safeDanger'>You are safe ! </p>
    </div>
    <div id='customsearchdiv' class='customsearchdiv'>
        <p id='customsearch' class='customsearch'>Select what you want to see</p>
    </div>
    <div id="custom" class="custom">
        <div class='form' id='form'>
            <select id="selectzone">
                <option value='all'>All</option>
                <option value='yourarea'>Your area</option>
            </select>
            <select id='selectoptions'>

                <option value='all'>All</option>
                <option value='FIRE'>Fire</option>
                <option value='TORNADO'>Tornado</option>
                <option value='INUNDATION'>Inundations</option>
                <option value='EARTHQUAKE'>Earthquakes</option>
            </select>
            <button id='submit'>Search</button>
        </div>
    </div>
    <div class="flex-container">
        <div id="map" style="border: 1px solid #ccc"></div>
        <div id="list">
            <nav>
                <ul>

                </ul>
            </nav>
        </div>
    </div>


    <script src="js/Alerts.js"></script>
    <script src="js/AlarmMessage.js"></script>
    <script src="js/login.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkW7jzRa0yN5JlAwuHgdxSViRHEQURFy0&callback=initMap"></script>
    <script src="../app/controllers/TableFunctions.js"></script>

</body>

</html>