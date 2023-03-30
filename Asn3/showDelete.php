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
<h1>Delete Doctor</h1>
<h2>Doctor</h2>


<form action = "showDel.php" method = "post">
<?php

$num = $_POST["petowners"];

$query = 'SELECT * FROM doctor WHERE doctor.licensenum = "'.$num.'"';
$result = mysqli_query($connection, $query);
if(!result) {

   die("database query failed.");

}


while($row = mysqli_fetch_assoc($result)){

   echo "<br>" . $row["firstname"] . " " . $row["lastname"] . "<br>";
   echo '<input type="radio" name="button" value="';
   echo $num;
   echo '">' . "yes" . " " .  "<br>";
   echo '<input type = "radio" name = "button" value = "NULL">' ."No". "<br>";
}

mysqli_free_result($result);

?>

<input type = "submit" value = "Are you sure?">
</form>

<?php
mysqli_close($connection);
?> 
</body>
</html> 
