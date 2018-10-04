<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$conn = mysqli_connect($dbhost, $dbusername, $dbpassword) or die ('Error connecting to mysql');
$dbname = 'spices';
mysqli_select_db($conn, 'spices');
?> 
