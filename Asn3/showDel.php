<!DOCTYPE html>
<html>

<head>

<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>

<body>

<?php
   include 'connectdb.php';
?>


<?php
   $num = $_POST["button"];
   

   $query = 'DELETE FROM doctor WHERE doctor.licensenum = "'.$num.'"';
   if(!mysqli_query($connection, $query)) {
       die("Error deletion failed: " . mysqli_error($connection));

   }

   if($num == "NULL"){
       echo  "Deletion not completed";

   } else {
       echo "Doctor was removed";
   }
?>

</body>
<html>
