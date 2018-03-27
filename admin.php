<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
			    border:1px solid black;
			    background-color:#c1c1c1;
			    color:#edf0f5;
			}
			h5>span{
			    color:black;
			}
			.formBox{
			    border:1px solid black;
			    margin:1em 25em 10em 25em;
			}
			.formTitle{
			    background-image:url(images/redImage.png);;
			    color:white;
			    padding:7px 3px 7px 7px;
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
        <div class="row formBox" align="center">
            <div class="formTitle">
                Login to your account
            </div>
            <div class="form-group">
                <div class=" row input">
                    <div class="inputtext col-sm-4" align="left" style="padding:2em 0em 2em 3em;">
                        Username<sup
                            class="mandatory">*</sup>
                    </div>
                    <div class="inputcontent col-sm-8"align="right" style="padding:2em 6em 2em 0em;">
                        <input name="" type="text" maxlength="40" autocomplete="off" />
                        <img src="images/info.gif" Title="Enter your user name." alt="Information" />
               </div>
               
               </div>
               <hr>
               <div class=" row input">
                    <div class="inputtext col-sm-4" align="left" style="padding:2em 0em 2em 3em;">
                        Username<sup
                            class="mandatory">*</sup>
                    </div>
                    <div class="inputcontent col-sm-8"align="right" style="padding:2em 6em 2em 0em;">
                        <input name="" type="text" maxlength="40" autocomplete="off" />
                        <img src="images/info.gif" Title="Enter your user name." alt="Information" />
               </div>
               
               </div>
            </div>
            <br/>
        </div>
    </div>
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
</html>