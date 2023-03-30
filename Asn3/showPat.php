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
<h1>Here are your patients:</h1>
<ol>
<?php
   $thedoc= $_POST["thedoc"];
   $testy = $_POST["testing"];
   echo $testy . "<p>";
   $query = 'SELECT *  FROM looksafter,patient WHERE looksafter.licensenum = "'. $thedoc .'" AND looksafter.ohipnum = patient.ohipnum';

//   $ohip = $row["ohipnum"];
//   echo $ohip;

//   $query2 = 'SELECT * FROM patient WHERE ohipnum = "'.$ohip.'"';
   $result=mysqli_query($connection,$query);
//   $result2 = mysqli_query($connection, $query2);
    if (!$result) {
         die("database query2 failed.");
     }
//    if (!$result2){
//
  //       die("database query3 failed.");
//    }
    
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["firstname"];
        echo " ";
        echo $row["lastname"];
        echo " ";
     //   echo $row["patient.ohipnum"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
