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
<h1>Inserting New Doctor</h1>


<h1> Inserting New Doctor </h1>

<?php

$licensenum = $_POST["licensenum"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$licensedate = $_POST["licensedate"];
$birthdate = $_POST["birthdate"];
$hosworksat = $_POST["hosworksat"];
$speciality = $_POST["speciality"];

$query = 'INSERT INTO doctor VALUES("'.$licensenum.'" , "'.$firstname.'" , "'.$lastname.'" , "'.$licensedate.'" , "'.$birthdate.'" , "'.$hosworksat.'" , "'.$speciality.'")';

if(!mysqli_query($connection, $query)) {
    die("Error: insert failed" . mysqli_error($connection));
}

echo "New doctor was successfully added";

?>

<?php
mysqli_close($connection);
?>
</body>
</html>
