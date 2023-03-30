<?php
   $query = "SELECT * FROM doctor";
   $query2 = "SELECT * FROM patient";
   $result = mysqli_query($connection,$query);
   $result2 = mysqli_query($connection,$query2);
   if (!$result) {
        die("databases query failed.");
    }
   if(!$result2){
        die("database query2 failed.");

   }
   echo "Please Select a Doctor </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="petowners" value="';
        echo $row["licensenum"];
        echo '">' . $row["firstname"] . "<br>";
   }

   echo "<br>";
   echo "<br>";

   echo "Please Select a Patient </br>";
   while ($row = mysqli_fetch_assoc($result2)){
        echo '<input type = "radio" name = "patients" value = "';
        echo $row["ohipnum"];
        echo '">' . $row["firstname"] . "<br>";
   }
   mysqli_free_result($result);
?>
