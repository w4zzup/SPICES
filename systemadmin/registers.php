<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Student Information</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
 
           <div class="container" style="width:500px;">  
                <h3 align="center">Student Information</h3>  
                <br />  
                <?php  
                echo '<h1>Welcome - '.$_SESSION["username"].'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>';  
                ?>  
           </div>
           <div style="width: 45%; margin: 50px auto 20px auto; ">
           <div style="float: left; padding-right: 50px; border-right: 1px solid #ddd;">
        <div class="wrapper">
            <form action='inserts.php' method="post" class="form-horizontal">
            <h2 class="form-signin-heading">Register Student</h2><br/>
            <div class="form-group"> 
                <div class="col-sm-12">
                <input id="textinput" name="username" placeholder="student ID card number" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-12">
                <input id="textinput" name="password" placeholder="student IC number" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group">  
                <div class="col-sm-12">
                <button class="btn btn-small btn-primary btn-block" type="submit">Register</button>  
                <input type="hidden" name="object" value="register"/>
                </div>
            </div>    
            </form>
        </div>   
    </div>
    <div style="float: right;">
        <div class="wrapper">
        <form action='insertc.php' method="post" class="form-horizontal">
            <h2 class="form-signin-heading">Register Club</h2><br/>
            <div class="form-group"> 
                <div class="col-sm-12">
                <input id="textinput" name="cid" placeholder="Club ID" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-12">
                <input id="textinput" name="cname" placeholder="Club Name" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                <button class="btn btn-small btn-primary btn-block" type="submit">Register</button>  
                <input type="hidden" name="object" value="registerc"/>
                </div>
            </div>    
            </form>
        </div>
    </div>
</div>
      </body>  
 </html> 