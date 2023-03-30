<?php
   $query = "SELECT * FROM hospital";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Please Select a Hospital</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="petowners" value="';
        echo $row["hoscode"];
        echo '">' . $row["hosname"] . "<br>";
   }
   mysqli_free_result($result);
?>
