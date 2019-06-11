<!DOCTYPE html>
<html>

<head>
    <link href="css/formularAlerteAutoritati.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="formular">
        <h1>Alert Data</h1>
        <form id="formAutoritati">

            <label for="tipalerta">Emergency Type:</label>
            <input type="text" name="tipalerta" id="event" class="textField" value="<?php $tipalerta = $_GET['tipalerta'];
                                                                                    echo $tipalerta; ?>" ; disabled />



            <label for="location">Location:</label>
            <input type="text" name="location" id="areaDesc" class="textField" placeholder="Complete if the emergency is not in your area!" />

            <label for="sender">Your Name:</label>
            <input type="text" id="sender" class="textField" name="sender">



            <label for="sent">Sent at:</label>
            <input type="text" id="sent" class="textField" placeholder="YYYY-mm-DD T hour:minute:second">

            <div class="selectContainer" style="display:none">
                <div> <label for="status">Status:</label>

                    <select name="statusopt" id="status">
                        <option selected value="Actual">Actual</option>
                        <option value="Exercise">Exercise</option>
                        <option value="System">System</option>
                        <option value="Test">Test</option>
                        <option value="Draft">Draft</option>
                    </select>

                </div>
                <div>
                    <label for="msgType">Nature of the alert message:</label>
                    <select name="msgTypeOpt" id="msgType">
                        <option selected value="Alert">Alert</option>
                        <option value="Update">Update</option>
                        <option value="Cancel">Cancel</option>
                    </select>
                </div>
                <div>
                    <label for="category">Category:</label>
                    <select name="categoryOpt" id="category">
                        <option value="Geo">Geophysical (inc. landslide)</option>
                        <option value="Met"> Meteorological (inc. flood)</option>
                        <option value="Rescue"> Rescue and recovery</option>
                        <option value="Fire">Fire suppression and rescue</option>
                        <option selected value="Other">Other events</option>
                    </select>
                </div>
                <div>
                    <label for="urgency">Urgency:</label>
                    <select name="urgency" id="urgency">
                        <option value="Immediate">Responsive action SHOULD be taken immediately</option>
                        <option value="Expected"> Responsive action SHOULD be taken soon (within next hour)</option>
                        <option value="Future"> Responsive action SHOULD be taken in the near future</option>
                        <option selected value="Unknown">Urgency not known</option>
                    </select>
                </div>
                <div>
                    <label for="severity">Severity:</label>
                    <select name="severity" id="severity">
                        <option value="Extreme">Extraordinary threat to life or property</option>
                        <option value="Severe">Significant threat to life or property</option>
                        <option value="Moderate"> Possible threat to life or property</option>
                        <option value="Minor"> Minimal to no known threat to life or property</option>
                        <option selected value="Unknown">Severity unknown</option>
                    </select>
                </div>
                <div>
                    <label for="certainty">Certainty:</label>
                    <select name="certainty" id="certainty">
                        <option value="Observed">Observed</option>
                        <option value="Likely">Likely</option>
                        <option value="Possible">Possible</option>
                        <option value="Unlikely">Unlikely</option>
                        <option selected value="Unknown">Unknown</option>
                    </select>
                </div>

            </div>
            <label for="description">Details:</label>
            <div>
                <textarea id="description" name="description"></textarea>
            </div>




            <br>
            <div id="submitBtn"> <a href="crisismap"> Back</a></div>
            <input id="submitBtn" type="submit" name="send" value="SEND" />

            <br>

        </form>


    </div>


    <script src="../app/controllers/createXml.js"></script>
</body>

</html>