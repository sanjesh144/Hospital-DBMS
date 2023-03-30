<?php
   $query = "SELECT * FROM doctor";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";

   while ($row = mysqli_fetch_assoc($result)) {
        echo  $row["firstname"] . " " . $row["lastname"] . " " . $row["licensenum"] . " " . $row["licensedate"] .  "<br>";
   }
   mysqli_free_result($result);
?>
