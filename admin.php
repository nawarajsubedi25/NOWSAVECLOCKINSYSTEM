<?php
include('login.php'); // Includes Login Script
session_start();
 
//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 1;
 
//Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['last_action'])){
    
    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];
    
    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;
    
    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
    }
    
}
 
//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();
if(isset($_SESSION['login_user'])){
header("Location: profile.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<style type="text/css" scoped>
			.line{
			    padding:5px 0px 5px 10px;
			    border:1px solid black;
			    background-color:#6a6a6a;
			    color:#edf0f5;
			    font-size:125%;
			    font-family: Arial, Helvetica, sans-serif;
			}
			.mainLine{
			    margin:0em 2em 0em 1.5em;
			}
			.footer{
			    color:#edf0f5;
			    background-image:url(images/grey_wash_wall.png);
			}
			h5>span{
			    color:black;
			}
			.formBox{
			    -moz-box-shadow: 0px 0px 8px 2px #d1d1d1;
	-webkit-box-shadow: 0px 0px 8px 2px #d1d1d1;
	background: #ffffff;
	border: 1px solid #f0f0f0;
	box-shadow: 0px 0px 8px 2px #d1d1d1;
	color: #777;
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 6px; 
	overflow: hidden;
			    margin:1em 23em 1em 23em; 
			}
			.formTitle{
			  background-color: #D21034;
	background-image: url(images/redImage.png);
	background-position: 50% 50%;
	background-repeat: repeat-x;
	border: 1px solid #b0a6a6;
	color: #ffffff;
	font-size: 13px;
	font-weight: bold;
	line-height: 16px;
	padding: 10px;
	text-shadow: -1px;
	width: 430;
	margin-bottom: 1em;
			}
              .button{
                  background-color:#928383;
                  color:white;
                  width:18%;
                  border: none;
                  outline:none;
                  border-radius:3px;
                  height:25px;
              }
              input[type=submit]:focus {
    background:#d21034 url(images/redImage.png) 50% 50% repeat;
    border:1px solid #dfd8d8;
    
                  border: none;
                  outline:none;
                  border-radius:3px;
                  height:25px;
}
.button:hover{
    background-color:#272cf1;
}

              .inputbox{
                   height:33px;
                   border-radius:6px;
                   border:1px solid black;
                   outline:0;
                   width: 100%;
                   
                   
              }
             

.inputbox:focus{
	background-color: #DCDCDC;
	box-shadow: 0 0 2px #51cbee;
    -moz-box-shadow: 0 0 2px #51cbee;
    -webkit-box-shadow: 0 0 2px #51cbee;
    border: 2px solid #51cbee;

}
.inputbox:valid { background-color:#f4f4f4; }
sup{
    color:red;
}
hr{
     border-style: inset;
    border-width: 1px;
     display: block;
}
a{
    text-decoration:underline;
    font-style: italic;
}
.popover{
    background: #e71a5c url('images/Caution.png');
    padding-left:25px;
    background-repeat: no-repeat;
    background-position:5px 5px;
    background-size: 30px 30px;
    color:white;
}
.glyphicon-ok-circle,.glyphicon-remove-circle,.glyphicon-remove-circle {
    display:none;
    font-size: 0px;
    line-height: 0px;
    padding-top: 0px;
}
.content {
	background-color:#edf0f5;
	padding-bottom:7em;
	margin:0em 2em 0em 1.5em;

}
.programmer a
{
    color:white;
}
.innercontainer{
    margin:0em 11em 0em 11em;
}

			</style>
</head>
<body>
    <div class="container-fluid">
        <div><a class="row" href="admin.php"><img alt="logo" height="30" src="images/nowsave.png" width="139" /></a>
    </div>
    </div>
    <div class="container-fluid mainLine">
        <div class="row line" >
           WELCOME!
        </div>
    </div>
    <div class="container-fluid content">
        <div class="container-fluid">
            <div class="row error-message">
                <?php
                 if ($_SESSION['messagelogin']==null)
                {
                    ?>
                 <style type="text/css">.error-message{
display:none;
}</style>
<?php
                }
               else
                {
                    echo $_SESSION["messagelogin"];
                   ?>
                 <style type="text/css">.error-message{
	background-color: #FFFFF2;
	border: 1px solid #C91034;
	font-weight: bold;
	margin-top:2em;
	margin-bottom: 3px;
	padding: 5px;
	width: 100%;

}</style>
<?php
                }
              ?>            
            </div>
        </div>
        <div class="innercontainer">
        <div class="row" align="right">
            <img alt="logo" width="100px" height="100px" src="images/lock.png"/>
        </div>
         <form action="adminVerify.php" method="post" id="contact_form">
        <div class="row formBox">
            <div class="formTitle">
                Login to your account
            </div>
           
            <div class="form-group">
                <div class=" row input">
                    <div class="inputtext col-sm-2"  style="margin:2em 2em 1em 2em;">
                        Username<sup
                            class="mandatory">*</sup>
                    </div>
                    <div class="inputcontent col-sm-6"  style="margin:1.75em 1em 0em 2em;">
                        
                        <input class="inputbox" id="inputbox" type="search" maxlength="40" autocomplete="off" name="userName" style="float:left;" required/>
                        	<div class="right-outer-addon" style="float:right; margin:0.5em -1em 0em 0em">
                        <img src="images/info.gif" Title="Enter your username." alt="Information" />
                        </div>
               </div>
               
               </div>
               <hr style="margin:1em 2em 1em 2em; ">
               <div class=" row input">
                    <div class="inputtext col-sm-2" style="margin:1em 2em 1em 2em;">
                        Password<sup
                            class="mandatory">*</sup>
                    </div>
                    <div class="inputcontent col-sm-6" style="margin:0.5em 1em 0em 2em;">
                        <input class="inputbox" id="inputbox"  maxlength="40" autocomplete="off" name="password" type="password" style="float:left;" required/>
                        	<div class="right-outer-addon" style="float:right; margin:0.5em -1em 0em 0em">
                        <img src="images/info.gif" Title="Enter your password." alt="Information" />
                        </div>
               </div>
               </div>
               <div class="row input" style="margin-left:2em; margin-top:1em;">
                        <a id="ForgotPassword" tabindex="4" class="InlinePassword" href="" >Forgot Password?</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="" class="InlinePassword" TabIndex="5">
                            First Time Administration Setup</a>
                    </div>

            </div>
        </div>
        <div style="padding-left: 675px;">
            <input type="submit" name="formSubmit" value="Login" class="button" />
        </div>
        </form>
        </div>
    </div>
    <div class="container-fluid mainLine">
        <div class="row footer">
            <div class="col-sm-8">
            <h5>DHALIWAL INC.
            <span>|</span>&nbsp;NOW SAVE STORES
            <span>|</span>&nbsp;5402 CYPRESS ST WEST MONROE, LA 71291</h5>
            </div>
            <div class="programmer col-sm-4">
             <h5 style="text-align:right;"><a href="http://www.nawarajsubedi.com">&copy;Nawaraj Subedi- Software Developer</a></h5>
            </div>       
        </div>

    </div>
</body>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="formValidation/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
</html>