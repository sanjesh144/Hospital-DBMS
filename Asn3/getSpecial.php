<?php
$query = "SELECT DISTINCT speciality FROM doctor";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}


 while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="petowners" value="';
        echo $row["speciality"];
        echo '">' . $row["speciality"] . "<br>";
   }


mysqli_free_result($result);

?>
