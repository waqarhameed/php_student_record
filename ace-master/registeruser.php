<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$CardNo = $_POST["cardno"];
$Name = $_POST["name"];
$FatherName = $_POST["fathername"];
$Class = $_POST["cls_name"];
$Section = $_POST["sec_name"];

$sql = "INSERT INTO students(CardNo, Name, FatherName, Class, Section)
 VALUES ('$CardNo','$Name','$FatherName','$Class','$Section')";

$RegistrationNo = $_POST["regno"];
$Name = $_POST["name"];
$FatherName = $_POST["fathername"];
$Class = $_POST["cls_name"];
$Section = $_POST["sec_name"];

$sql = "INSERT INTO students(RegistrationNo, Name, FatherName, Class, Section)
 VALUES ('$RegistrationNo','$Name','$FatherName','$Class','$Section')";

if ($conn->query($sql) === true) {
    header("Location:register.html");
} else {
    header("Location:register.html");
}

$conn->close();
?>