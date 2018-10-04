<?php 
error_reporting('E_All');
define('SALT', 'd#f453dd');
$req = $_POST; 
$name = $req['name'];
$username = $req['username'];
$conn = mysqli_connect('localhost', 'root', '', 'spices');
if(mysqli_connect_error()){
    die("Error in DB connection: ".mysqli_connect_errno()." - ".mysqli_connect_error());
}
if($req['object'] == 'register'){ 
    $encypt_pwd = md5(SALT.$req['password']); 
    $insert = 'INSERT INTO `students` ( `name`, `username`, `password`) VALUES ( "'.$name.'", "'.$username.'", "'.$encypt_pwd.'")';
    if(mysqli_query($conn, $insert)){
        $_SESSION['msg'] = 'You have registered successfully, Please login.';
    }
    else{
        $_SESSION['msg'] = 'Error: '.mysqli_error($conn);
    }
    header("Location: index.php");
}
if($req['object'] == 'login'){ 
    $select = "SELECT username, password FROM `students` WHERE  username = '$username' ";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_row($result); 
    if (md5(SALT . $_POST['password']) == $row[1]) {
        
        $_SESSION['msg'] = 'You have logged in successfully';
        $_SESSION['name'] = $row[0];
        header("Location: index.php?view=profile");
    } else {
        $_SESSION['msg'] = 'Login Failed';
        header("Location: index.php");
    }
    
}
if($req['object'] == 'logout') {
    session_destroy();
    header("Location: index.php");
}
?>