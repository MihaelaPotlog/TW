<!DOCTYPE html>
<html>
<head>
     <link href="formularAlerte.css" rel="stylesheet" type="text/css">
</head>
    
<body>
    
    <div id="formular">
        <h1>Alert Data</h1>
        <form id="formAutoritati">
            
                 <label for="tipalerta">Emergency Type:</label>
            <input type="text" name="tipalerta" id="event" value="<?php echo $_GET["tipalerta"];?>"; />

            <label for="identifier">Identifier</label>
            <input type="text" name="identifier" id="identifier">
            
            <label for="location" >Location:</label>
            <input type="text" name="location" id="areaDesc" placeholder="Complete if the emergency is not in your area!"/>
           
            <label for="sender">Your Name:</label>
            <input type="text"  id="sender" name="sender">

            <label for="status">Status:</label>
            <select name="statusopt" id="status">
                <option value="Actual">Actual</option>
                <option value="Exercise">Exercise</option>
                <option value="System">System</option>
                <option value="Test">Test</option>
                <option value="Draft">Draft</option>
            </select>

            <label for="msgType">Nature of the alert message:</label>
            <select name="msgTypeOpt" id="msgType">
                <option value="Alert">Alert</option>
                <option value="Update">Update</option>
                <option value="Cancel">Cancel</option>
            </select>

            <label for="category">Category:</label>
            <select name="categoryOpt" id="category">
                <option value="Geo">Geophysical (inc. landslide)</option>
                <option value="Met"> Meteorological (inc. flood)</option>
                <option value="Rescue"> Rescue and recovery</option>
                <option value="Fire">Fire suppression and rescue</option>
                <option value="Other">Other events</option>
            </select>

            <label for="urgency">Urgency:</label>
            <select name="urgency" id="urgency">
                <option value="Immediate">Responsive action SHOULD be taken immediately</option>
                <option value="Expected"> Responsive action SHOULD be taken soon (within next hour)</option>
                <option value="Future"> Responsive action SHOULD be taken in the near future</option>
                <option value="Unknown">Urgency not known</option>
            </select>

            <label for="severity">Severity:</label>
            <select name="severity" id="severity">
                <option value="Extreme">Extraordinary threat to life or property</option>
                <option value="Severe">Significant threat to life or property</option>
                <option value="Moderate"> Possible threat to life or property</option>
                <option value="Minor"> Minimal to no known threat to life or property</option>
                <option value="Unknown">Severity unknown</option>
            </select>
            
            <label for="certainty">Certainty:</label>
            <select name="certainty" id="certainty">
                <option value="Observed">Observed</option>
                <option value="Likely">Likely</option>
                <option value="Possible">Possible</option>
                <option value="Unlikely">Unlikely</option>
                <option value="Unknown">Unknown</option>
            </select>

            <label for="description">Details:</label>
            <textarea id="description" name="description"> </textarea>

            <label for="coordinates">Coordinates:</label>
            <input type="text"  id="circle" placeholder="lat,long">

            <label for="sent">Sent at:</label>
            <input type="text" id="sent" placeholder="YYYY-mm-DD T hour:minute:second">
            <br>
            
            <input type="submit" name="send" value="SEND"/>
            
        <br>
        
        </form>
    
    
    </div>
   

    <script src="createXml.js"></script>
</body>

</html>