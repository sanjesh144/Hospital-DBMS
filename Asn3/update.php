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
<h1>Update a hospital</h1>
<h2>Our Hospitals</h2>
<form action = "showUpdate.php"  method = "post">
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

<input type="text" name="number"><br>
<input type = "submit" value="submit">
</form>
<?php
mysqli_close($connection);
?>
 
</body>
</html> 
