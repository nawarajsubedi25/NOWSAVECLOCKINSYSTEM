<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="css/bootstrap.min.css">
		    	<!-- Form Validation Plugin -->
		<script type="text/javascript" src="formvalidation/jquery-1.10.2.min.js"></script>
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
			    margin-top:7em;
			    color:#edf0f5;
			    background-image:url(images/grey_wash_wall.png);;
			}
			h5>span{
			    color:black;
			}
			.formBox{
			    border:1px solid black;
			    margin:1em 22em 1em 22em;
			}
			.formTitle{
			    background-image:url(images/redImage.png);;
			    color:white;
			    padding:7px 3px 7px 7px;
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
              .button:hover{
                  background-color:#d21539;
              }
              .inputbox{
                   height:33px;
                   border-radius:6px;
                   border:1px solid black;
                   outline:0;
                   width:90%;
                   
              }
              /*
.inputbox:valid { background-color:#f4f4f4; }
*/
.inputbox:focus{
     background-color:#f4f4f4;
     border-color:blue;
}
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
  margin-top: 2em;
    
}
.glyphicon-ok-circle,.glyphicon-remove-circle,.glyphicon-remove-circle {
    display:none;
    font-size: 0px;
    line-height: 0px;
    padding-top: 10px;
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
    <div class="container">
        
        <div class="row" align="right">
            <img alt="logo" width="100px" height="100px" src="images/lock.png"/>
        </div>
         <form id="contact_form">
        <div class="row formBox">
            <div class="formTitle">
                Login to your account
            </div>
           
            <div class="form-group">
                <div class=" row input">
                    <div class="inputtext col-sm-2" align="left" style="margin:2em 2em 1em 3em;">
                        Username<sup
                            class="mandatory">*</sup>
                    </div>
                    <div class="inputcontent col-sm-8"align="right" style="margin:1.75em 0em 0em 0em;">
                        <input class="inputbox" id="inputbox" type="search" maxlength="40" autocomplete="off" name="userName" />
                        <img src="images/info.gif" Title="Enter your username." alt="Information" />
               </div>
               
               </div>
               <hr style="margin:1em 2em 1em 2em; ">
               <div class=" row input">
                    <div class="inputtext col-sm-2" align="left" style="margin:1em 2em 1em 3em;">
                        Password<sup
                            class="mandatory">*</sup>
                    </div>
                    <div class="inputcontent col-sm-8"align="right" style="margin:0.5em 0em 0em 0em;">
                        <input class="inputbox" id="inputbox" type="search" maxlength="40" autocomplete="off" name="password"/>
                        <img src="images/info.gif" Title="Enter your password." alt="Information" />
               </div>
               </div>
               <div>
                        <a id="ForgotPassword" tabindex="4" class="InlinePassword " href="" style="margin-left:2em;">Forgot Password?</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="" class="InlinePassword" TabIndex="5">
                            First Time Administration Setup</a>
                    </div>

            </div>
        </div>
        <div style="padding-left: 675px;">
            <input type="submit"  value="Login" class="button" />
        </div>
        </form>
    </div>
    <div class="container-fluid mainLine">
        <div class="row footer">
            <div class="col-sm-8">
            <h5>DHALIWAL INC.
            <span>|</span>&nbsp;NOW SAVE STORES
            <span>|</span>&nbsp;5402 CYPRESS ST WEST MONROE, LA 71291</h5>
            </div>
            <div class="col-sm-4">
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