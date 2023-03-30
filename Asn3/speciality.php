<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
<title>Doctor speciality</title>
<?php
include 'connectdb.php';
?>

<h1>Doctor Speicality</h1>

<form action = "showSpecial.php" method = "post">
<?php
include 'getSpecial.php';
?>
<input type = "submit" value = "Show doctors">
</form>

</head>
<body>
	
</body>
</html>
