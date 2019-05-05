<!DOCTYPE html>
<html>
<head>
     <link href="formularAlerte.css" rel="stylesheet" type="text/css">
</head>
    
<body>
    
    <div id="formular">
        <h1>Alert Data</h1>
        <form>
            
                 <label for="tipalerta">Emergency Type:</label>
            <input type="text" name="alerttype" id="tipalerta" value="<?php echo $_GET["tipalerta"];?>"; />
         
            
            <label for="location" >Location:</label>
            <input type="text" name="location" placeholder="Complete if the emergency is not in your area!"/>
             <label for="areaDesc">Details:</label>
            <textarea id="detalii" name="areaDesc"> </textarea>
            <label for="sender">Your Name:</label>
            <input type="text" name="sender">
            <br>
            
            <input type="submit" name="send" value="SEND"/>
            
        <br>
        
        </form>
    
    
    </div>
   

    
</body>

</html>