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
<h1>Hospital Information</h1>
<h2>Our Hospitals</h2>
<form action="showHospital.php" method="post">
<?php
   include 'getHospital.php';
?>
<input type="submit" value="Get Hospital Info">
</form>
<?php
mysqli_close($connection);
?> 
</body>
</html> 
