<?php 
error_reporting('E_All');
define('SALT', 'd#f453dd');
$req = $_POST; 
$name = $req['name'];
$username = $req['username'];
$conn = mysqli_connect("localhost", "root", "", "spices");
if(mysqli_connect_error()){
    die("Error in DB connection: ".mysqli_connect_errno()." - ".mysqli_connect_error());
} 
    $encypt_pwd = md5(SALT.$req['password']); 
    $insert = 'INSERT INTO `students` ( `name`, `username`, `password`) VALUES ( "'.$name.'", "'.$username.'", "'.$encypt_pwd.'")';
    header("Location: registers.php");
?>