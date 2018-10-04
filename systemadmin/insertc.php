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
        
    $cid = addslashes($_POST['cid']);
    $cname = addslashes($_POST['cname']);


$sql = 'INSERT INTO club (cid, cname)
VALUES ("'.$cid.'", "'.$cname.'")';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: registers.php");
?>