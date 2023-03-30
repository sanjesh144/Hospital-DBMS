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
<h1>Welcome to the Western Vet Clinic</h1>
<h2>Pets we look after</h2>
<form action="showPat.php" method="post">
<?php
include 'getTreated.php';
?>
<input type="submit" value="Show patients">
</form>
</body>
</html>
