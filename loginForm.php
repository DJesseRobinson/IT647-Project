<?php

// Create connection with mysql.default_host', 'mysql_user', 'mysql_password'
$con = mysql_connect(':mysql','test2','123');  



// check connection
if (!$con) {
    die("Connection failed: " .mysql_error());
}





// select database
mysql_select_db("CIT647StudentsConcertsProfiles", $con);

// sql to find records

$sql = "SELECT * FROM CIT647StudentsConcertProfilesTable WHERE Email= '$_POST[Email]'";


// Store result in variable
$result = mysql_query($sql);
if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No results found for the email address " . $_POST['Email'];
    echo '<form><input type="button" value="Return to previous page" onClick="javascript:history.go(-1)"></form>';
    exit;
}









if (mysql_query($sql, $con)){
    echo "";
}
    else {
        echo "ERROR: Not able to execute $sql. " . mysql_error($con);
}   


// Close the connection
mysql_close($con);

?>
    <!-- Main Text -->
    
       
      
        
         <div class="darkbox2">
     

<center>



<?php
  
 while ($row = mysql_fetch_assoc($result)) {            
             
    echo "<p>";
    echo "Confirmation Number: " . $row["RowNum"] . "<br>";
    echo "First Name: " . $row["FirstName"] . "<br>";
    echo "Last Name: " . $row["LastName"]. "<br>";
    echo "Phone Number: " . $row["PhoneNum"] . "<br>";
    echo "Email: " . $row["Email"] . "<br>";
    echo "</p>";

 }
?>
 
    
    <br>
    <input type="button"
           id="printbutton"
           onClick="window.print()"
           value="Print This Page"/>
    <br><br> <a href="./index.html" id="returntohome">Return to the homepage</a>


           </center>

           
           
       
           
           

        </div>



   

    <!-- End of Main div -->






