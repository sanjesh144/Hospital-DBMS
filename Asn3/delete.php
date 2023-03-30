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
<h2>Doctors</h2>
<form action="showDelete.php" method="post">
<?php
   include 'getDoctor.php';
?>
<input type="submit" value="Delete Doctor">
</form>
<?php
mysqli_close($connection);
?> 
</body>
</html> 
