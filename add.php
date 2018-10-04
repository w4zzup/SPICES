<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spices";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
        
    $gender = addslashes($_POST['gender']);
    $fruit = addslashes($_POST['fruit']);


$sql = 'INSERT INTO test (gender, fruit)
VALUES ("'.$gender.'", "'.$fruit.'")';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: dummy.html");
?>