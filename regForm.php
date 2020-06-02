<?php

// Create connection with mysql.default_host', 'mysql_user', 'mysql_password'
$con = mysql_connect(':mysql','test2','123');  



// check connection
if (!$con) {
    die("Connection failed: " .mysql_error());
}
echo "Database connected successfully. <br>This will be removed on final product.<br><br> ";


// select database
mysql_select_db("CIT647StudentsConcertsProfiles", $con);

//Create Random Unique ID for RowNum field in Database Table
$pattern = "1234567890";
$RowID = $pattern{rand(0,10)};
for($i = 1; $i < 10; $i++)
{
    $RowID .= $pattern{rand(0,10)};
    
}



// sql to INSERT data into table
$sql = "INSERT INTO CIT647StudentsConcertProfilesTable (RowNum, LastName, FirstName, PhoneNum, Email) VALUES ('$RowID', '$_POST[LastName]', '$_POST[FirstName]', '$_POST[PhoneNum]', '$_POST[Email]')";



// Store form names in variables
$First = $_POST['FirstName'];
$Last = $_POST['LastName'];
$Phone = $_POST['PhoneNum'];
$Email = $_POST['Email'];


if (mysql_query($sql, $con)){
    echo "<h1>You're Registered!</h1>

<p>
Thank you for registering for the concert!<br>
Make sure to print a copy of the following information for your records,
including the following confirmation ID which will be used to print
  a ticket for you when you arrive at the ticket booth.</p>
           <center>
           <h2>
             Your ticket confirmation number is as follows:</h2>";
    echo "<p>";
    echo "Confirmation Number: " . $RowID . "<br>";
    echo "First Name: " . $First . "<br>";
    echo "Last Name: " . $Last . "<br>";
    echo "Phone Number: " . $Phone . "<br>";
    echo "Email: " . $Email . "<br>";
    echo "</p></center>";

}
    else {
        echo "ERROR: Not able to proceed<br>" . mysql_error($con);
}   


// Close the connection
mysql_close($con);

?>
   
    
       
      
        
  
     
               


          



 
    
   

           
           
       
         

       

    <!-- End of Main div -->