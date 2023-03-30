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
<h1>Assign a Doctor to a Patient</h1>


<form action = "assignDocPat.php" method = "post">
<?php
include 'getDocPat.php';
?>
<input type = "submit" value = "assign">
</form>
</body>
</html>
