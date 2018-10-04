<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
<div style="width: 45%; margin: 50px auto 20px auto; ">
<?php 
session_start();
echo $_SESSION['msg'].'<br/><br/>';

if($_GET['view'] == 'profile') {
    echo '<b>Welcome '.$_SESSION['name'].'</b><br/><br/>';
    ?>
            <div class="wrapper">
            <form action='.php' method="post" class="form-horizontal">
            <h2 class="form-signin-heading">Update Information</h2><br/>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Program Name</label>  
                <div class="col-sm-8">
                <input id="textinput" name="pname" placeholder="Enter your name" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Level</label>  
                <div class="col-sm-8">
                <select class="form-control" name="plevel">
                <option disabled selected>Select Level</option>
                <option value="national">National</option>
                <option value="campus">Campus</option>
                <option value="university">University</option>
                <option value="international">International</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">GHOCS Domain</label>  
                <div class="col-sm-8">
                <select class="form-control" name="pghoc">
                <option disabled selected>Select ghocs domain</option>
                <option value="S">Social</option>
                <option value="P">Physical</option>
                <option value="I">Intellectual</option>
                <option value="C">Career</option>
                <option value="E">Emotional</option>
                <option value="S">Spiritual</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Achievement</label>  
                <div class="col-sm-8">
                <input id="textinput" name="pachievement" placeholder="Enter your achievement" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Entrepreneurship</label>  
                <div class="col-sm-8">
                <select class="form-control" name="pbiz">
                <option disabled selected>Select related</option>
                <option value="Yes">Entrepreneurship</option>
                <option value="No">Non-Entrepreneurship</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Semester</label>  
                <div class="col-sm-8">
                <input id="textinput" name="psem" placeholder="Enter your semester" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Type</label>  
                <div class="col-sm-8">
                <select class="form-control" name="ptype">
                <option disabled selected>Select type</option>
                <option value="individual">Individual</option>
                <option value="group">Group</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Date</label>  
                <div class="col-sm-8">
                <input class="form-control input-md" required="" type="text" id="datepicker" name=pdate>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Rank</label>  
                <div class="col-sm-8">
                <select class="form-control" name="prank">
                <option disabled selected>Select rank</option>
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Award Description</label>  
                <div class="col-sm-8">
                <textarea class="form-control" rows="5" name="paward"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput"></label>  
                <div class="col-sm-8">
                <button class="btn btn-small btn-primary btn-block" type="submit">Register</button>  
                <input type="hidden" name="object" value="register"/>
                </div>
            </div>    
            </form>
        </div>
    <div class="col-sm-4">
    <form action='handler.php' method="post" class="form-horizontal">
        <div class="form-group">
        <input type="hidden" name="object" value="logout"/>
        <button class="btn btn-small btn-primary btn-block" type="submit">Logout</button>  
        </div>
    </form>
    </div>    
    <?php
} else {
?>
    <div style="float: left; padding-right: 50px; border-right: 1px solid #ddd;">
        <div class="wrapper">
            <form action='handler.php' method="post" class="form-horizontal">
            <h2 class="form-signin-heading">Please register</h2><br/>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Name</label>  
                <div class="col-sm-8">
                <input id="textinput" name="name" placeholder="Enter your name" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Username</label>  
                <div class="col-sm-8">
                <input id="textinput" name="username" placeholder="Enter your username" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Password</label>  
                <div class="col-sm-8">
                <input id="textinput" name="password" placeholder="Enter your password" class="form-control input-md" required="" type="password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput"></label>  
                <div class="col-sm-8">
                <button class="btn btn-small btn-primary btn-block" type="submit">Register</button>  
                <input type="hidden" name="object" value="register"/>
                </div>
            </div>    
            </form>
        </div>   
    </div>
    <div style="float: right;">
        <div class="wrapper">
            <form class="form-signin" action='handler.php' method="post">       
              <h2 class="form-signin-heading">Please login</h2><br/>
              <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /><br/>
              <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br/>
              <button class="btn btn-small btn-primary btn-block" type="submit">Login</button>   
              <input type="hidden" name="object" value="login"/>
            </form>
        </div>
    </div>
</div>
<?php } ?>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script> 
</body>
</html>