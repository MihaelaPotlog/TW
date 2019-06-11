<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CriC Missing Persons</title>
    <link href="css/formular-disparitii.css" rel="stylesheet" type="text/css">
</head>

<body>
    <ul class="navList">
        <li><img id="logo" src="img/logo.png" alt="offf:( logo" /></li>
        <li id="out" style="float:right"><a href="crisismap"><img id="logout" src="img/logout.png" alt="offf:( logout" /></a></li>
        <li id="home" style="float:right"><a href="Autoritati">Home</a></li>
        <li id="missing" style="float:right"><a href="">Missing persons</a></li>
    </ul>

    <div class="form-box">

        <form class="form-inline" id="formularPF" action="">
            <p>Missing person registration</p>
            <label for="pic"> Upload picture of missing person</label>
            <input type="file" id="pic" name="pic" accept="image/*">
            <br>
            <label for="fname"> First name of missing person </label>
            <input type="text" id="fname" name="firstname" placeholder="Enter first name">
            <br>
            <label for="lname"> Last name of missing person </label>
            <input type="text" id="lname" name="lastname" placeholder="Enter last name">
            <br>
            <label for="gender"> Gender of missing person </label>
            <select name="gender" id="gender">
                <option value="Male"> Male </option>
                <option value="Female"> Female </option>
            </select>
            <br>
            <label for="birth"> Date of birth of missing person </label>
            <input type="date" id="birth" name="birth">
            <br>
            <label for="place"> Place of missing </label>
            <input type="text" id="place" name="place" placeholder="Enter location">
            <br>
            <label for="time-missing"> Date and time of missing</label>
            <input type="date" id="time-missing" name="time">
            <br><label for="social-media"> Social Media Information</label>
            <input type="text" id="social-media" name="social">
            <hr>

            <label for="time-registration"> Date and time of registration</label>
            <input type="datetime-local" id="time-registration" name="time2">
            <br>
            <label for="your-name"> Name of complainant </label>
            <input type="text" id="your-name" name="yourname" placeholder="Enter your name">
            <br>
            <label for="contact">address missing person</label>
            <textarea id="contact" name="adress"></textarea>
            <br>


            <label for="extra"> Extra information </label>
            <textarea id="extra" name="extra"></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="../app/controllers/createPfif.js"></script>
</body>

</html>