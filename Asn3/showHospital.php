<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is your Hospital:</h1>
<ol>
<?php
   $whichOwner= $_POST["petowners"];
   $query = 'SELECT * FROM hospital WHERE hoscode="' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row["hosname"];
        echo " ";
        echo $row["city"];
        echo " ";
        echo $row["prov"];
        echo " ";
        echo $row["numofbed"];
        echo " ";
        echo $row["headdoc"];
     }
   $query2 = 'SELECT * FROM doctor WHERE hosworksat = "'.$whichOwner.'"';
   $result2 = mysqli_query($connection, $query2);
   if (!result2) {
     die("databases query3 failed.");

   }
   echo "<br>";
   echo "<br>";
   echo "DOCTORS";
//   echo $query2;
   while($row=mysqli_fetch_assoc($result2)) {
     echo '<li>';
     echo $row["firstname"];
     echo " ";
     echo $row["lastname"];

   }

     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
