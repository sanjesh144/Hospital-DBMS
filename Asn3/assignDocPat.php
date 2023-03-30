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
<h1>Status:</h1>
<ol>
<?php
   $whichOwner= $_POST["petowners"];
   $whichOwner2 = $_POST["patients"];
   $query = 'SELECT * FROM looksafter, patient, doctor WHERE looksafter.ohipnum=patient.ohipnum AND looksafter.licensenum=doctor.licensenum AND looksafter.ohipnum= "' . $whichOwner2 . '" AND looksafter.licensenum="' . $whichOwner . '"';
   
   $result=mysqli_query($connection,$query);
   $numRows= mysqli_num_rows($result);
   
    if (!$result) {
         die("database query2 failed.");
     }

    if ($numRows == 0) {
       $query2 =  'INSERT INTO looksafter VALUES ("'.$whichOwner. '","'.$whichOwner2 .'")';
       if (!mysqli_query($connection, $query2)){
           echo "<br>";
           die("Error: insert failed". mysqli_error($connection));
       }
    echo "success";
    }

    else {
       echo "This already exists";

    }

//    while ($row=mysqli_fetch_assoc($result)) {
//        echo '<li>';
//        echo "here";
//     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
