<!DOCTYPE html>
<html>
<head>

<title> Hospital DBMS </title>
<script src = "functions.js"></script>
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>
<body>
<h1>Health-Care Databse </h1>
<p>Please select an option</P>

<form action = "doctorInfo.php">
<input type = "submit" value = "Doctor Information">
</form>

<form action = "speciality.php">
<input type = "submit" value = "Doctor speciality">
</form>

<form action ="insert.php">
<input type = "submit" value = "Insert a Doctor">
</form>

<form action = "delete.php">
<input type = "submit" value = "Delete a Doctor">
</form>

<form action = "docToPat.php">
<input type = "submit" value = "Assign Doctor to Patient">
</form>

<form action = "treated.php">
<input type = "submit" value = "Show Patients Treated by a Doctor">
</form>

<form action = "hospital.php">
<input type = "submit" value = "Show Hospital Information">
</form>


<form action = "update.php">
<input type = "submit" value = "Update hospital">
</form>

</body>
</html>
