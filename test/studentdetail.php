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
        
    $pname = addslashes($_POST['pname']);
    $pdate = addslashes($_POST['pdate']);
    $plevel = addslashes($_POST['plevel']);
    $pbisnes = addslashes($_POST['pbisnes']);
    $psem = addslashes($_POST['psem']);
    $ptype = addslashes($_POST['ptype']);
    $pghoc = addslashes($_POST['pghoc']);
    $pself = addslashes($_POST['pself']);


$sql = 'INSERT INTO tbl_student (pname, pdate, plevel, pbisnes, psem, ptype, pghoc, pself)
VALUES ("'.$pname.'", "'.$pdate.'", "'.$plevel.'", "'.$pbisnes.'", "'.$psem.'", "'.$ptype.'", "'.$pghoc.'", "'.$pself.'")';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: entry.php");
?>