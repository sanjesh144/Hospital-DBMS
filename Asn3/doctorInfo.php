<!DOCTYPE html>
<html>
<head>
<title>Doctor Info</title>
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>
<body>
<?php
include 'connectdb.php';
?>

<h1>Please select an option:</h1>

<form action="orderLastName.php" method="post">

<input type="submit" value="Order By Last Name in  Ascending Order">
</form>

<form action = "orderLastNameD.php" method = "post">
<input type = "submit" value = "Order By Last Name in Decending Order">
</form>


<form action = "orderBDay.php" method = "post">
<input type = "submit" value = "Order By Birthdate in Ascending Order">
</form>


<form action = "orderBDayD.php" method = "post">
<input type = "submit" value = "Order By Birthdate in Descending Order">
</form>

<?php
mysqli_close($connection);
?> 


	
</body>
</html>
