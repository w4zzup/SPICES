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
             <!-- Custom styles for this template -->
            <link href="narrow-jumbotron.css" rel="stylesheet">
            <!-- Bootstrap core CSS -->
            <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
           <script language="JavaScript">
                var DivTxt = new Array()
                DivTxt[0] = "Please Select GHOCS Domain"
                DivTxt[1] = "Ability to form relationship , engage with others ( Program yang melibatkan pergaulan / latihan dalam kumpulan / aktiviti yang melibatkan komunikasi / sharing session)"
                DivTxt[2] = "Having & applying knowledge about physical strength(body) to keep fit & energize ( Program yang melibatkan fizikal seperti sukan / aktiviti menguji fizikal )"
                DivTxt[3] = "Academic excellent by exposing the ability to learn, gain skills , reflect knowledge ( Penglibatan akademi dan pemikiran intelektual )"
                DivTxt[4] = "Ability to map again the goal and needs to sucess ( Program penglibatan seperti kerjaya / peningkatan soft skill untuk peningkatan kerjaya )"
                DivTxt[5] = "Attract to the student in interpresonal skill"
                DivTxt[6] = "Understanding and having ability to be aware of own culture& respect others ( Program keagamaan/pengetahuan am atau moral)"
                function getText(slction){
                txtSelected = slction.selectedIndex;
                document.getElementById('textDiv').innerHTML = DivTxt[txtSelected];
                }
            </script> 

      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Student Information</h3>  
                <br />  
                <?php  
                echo '<h1>Welcome - '.$_SESSION["username"].'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>';  
                ?>  
           </div>
           <div style="width: 45%; margin: 50px auto 20px auto; ">
           <div class="wrapper">
           <form action='studentdetail.php' method="post" class="form-horizontal">
            <h2 class="form-signin-heading">Update Information</h2><br/>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Program Name</label>  
                <div class="col-sm-8">
                <input id="textinput" name="pname" placeholder="Enter your program name" class="form-control input-md" required="" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Date</label>  
                <div class="col-sm-8">
                <input class="form-control input-md" required="" type="text" id="datepicker" name=pdate>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Level</label>  
                <div class="col-sm-8">
               <!-- <select class="form-control" name="plevel">
                <option disabled selected>Select Level</option>
                <option value="national">National</option>
                <option value="campus">Campus</option>
                <option value="university">University</option>
                <option value="international">International</option>
                </select> -->
                <label class="checkbox-inline"><input name="plevel" type="checkbox" value="National">National</label>
                <label class="checkbox-inline"><input name="plevel" type="checkbox" value="Campus">Campus</label>
                <label class="checkbox-inline"><input name="plevel" type="checkbox" value="University">University</label>
                <label class="checkbox-inline"><input name="plevel" type="checkbox" value="International">International</label>
                </div>
            </div>
           <!-- <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Achievement</label>  
                <div class="col-sm-8">
                <input id="textinput" name="pachievement" placeholder="Enter your achievement" class="form-control input-md" required="" type="text">
                </div>
            </div>-->
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Entrepreneurship</label>  
                <div class="col-sm-8">
                <!--<select class="form-control" name="pbiz">
                <option disabled selected>Select related</option>
                <option value="Yes">Entrepreneurship</option>
                <option value="No">Non-Entrepreneurship</option>
                </select>-->
                <label class="checkbox-inline"><input name="pbisnes" type="checkbox" value="Yes">Entrepreneurship</label>
                <label class="checkbox-inline"><input name="pbisnes" type="checkbox" value="No">Non-Entrepreneurship</label>
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
                <!--<select class="form-control" name="ptype">
                <option disabled selected>Select type</option>
                <option value="individual">Individual</option>
                <option value="group">Group</option>
                </select>-->
                <label class="checkbox-inline"><input name="ptype" type="checkbox" value="Individual">Individual</label>
                <label class="checkbox-inline"><input name="ptype" type="checkbox" value="Group">Group</label>
                </div>
            </div>

            <!--<div class="form-group">
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
            </div> -->
            <div class="form-group">
                <label class="control-label col-sm-4">GHOCS Domain</label>  
                <div class="col-sm-8">
                <select class="form-control" name="pghoc" onchange="getText(this)">
                    <option value="Select">Select</option>
                    <option value="S">Social</option>
                    <option value="P">Physical</option>
                    <option value="I">Intellectual</option>
                    <option value="C">Career</option>
                    <option value="E">Emotions</option>
                    <option value="S">Spiritual</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">GHOCS Description</label>  
                <div class="col-sm-8" id="textDiv">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="textinput">Self Description</label>  
                <div class="col-sm-8">
                <textarea class="form-control" rows="5" name="pself"></textarea>
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
</div>  </div>
      </body>  
 </html> 