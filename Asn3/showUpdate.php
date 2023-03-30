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
<h1>Status:</h1>
<ol>
<?php
   $whichOwner= $_POST["petowners"];
   $petName = $_POST["number"];
//   $species =$_POST["species"];
//   $query1= 'select max(petid) as maxid from pet';
//   $result=mysqli_query($connection,$query1);
//   if (!$result) {
//          die("database max query failed.");
//   }
//   $row=mysqli_fetch_assoc($result);
//   $newkey = intval($row["maxid"]) + 1;
//   $petid = (string)$newkey;
   $query = 'UPDATE hospital SET numofbed = "'.$petName.'"WHERE hoscode = "'.$whichOwner.'"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your update was a success!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
