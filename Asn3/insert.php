<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic</title>
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Insert a Doctor</h1>
<h2>Please enter informationr</h2>
<form action = "showInsert.php" method = "post">
   <b> Enter the Doctor Information:</b><br>
   License Number:            <input type = "text" name = "licensenum"><br>
   First Name:                <input type = "text" name = "firstname"><br>
   Last Name:                 <input type = "text" name = "lastname"><br>
   License Date:(yyyy-mm-dd): <input type = "text" name = "licensedate"><br>
   Birthdate: (yyyy-mm-dd):   <input type = "text" name = "birthdate"><br>
   Hospital Working at:       <input type = "text" name = "hosworksat"><br>
   Speciality:                <input type = "text" name = "speciality"><br>
  
   <br> <input type = "submit" value = "Insert">
</form> 


<?php
mysqli_close($connection);
?>
</body>
</html>
