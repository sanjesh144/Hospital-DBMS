<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Ordered by Birthdate in Descending Order:</h1>
<ol>
<?php
   $whichOwner= $_POST["petowners"];
   $query = 'SELECT * FROM doctor ORDER BY birthdate DESC';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["firstname"];
        echo " ";
        echo $row["lastname"];
        echo " ";
        echo $row["licensenum"];
        echo " ";
        echo $row["licensedate"];
        echo " ";
        echo $row["birthdate"];
        echo " ";
        echo $row["hosworksat"];
        echo " ";
        echo $row["speciality"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
