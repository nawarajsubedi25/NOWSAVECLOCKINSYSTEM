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
			<script type="text/javascript">
			    function tog(v){
	return v?'addClass':'removeClass';
} 

$(document).on('input', '.clearable', function() {
    $(this)[tog(this.value)]('x');
}).on('mousemove', '.x', function(e) {
    $(this)[tog(this.offsetWidth-18 < e.clientX-this.getBoundingClientRect().left)]('onX');   
}).on('click', '.onX', function(){
    $(this).removeClass('x onX').val('').change();
});
			</script>
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
			    margin:1em 25em 1em 25em;
			}
			.formTitle{
			    background-image:url(images/redImage.png);;
			    color:white;
			    padding:7px 3px 7px 7px;
			}
			.clearable{
  background: #fff url(images/icoX.gif) no-repeat right -10px center;
  border: 1px solid #999;
  padding: 3px 18px 3px 4px;     /* Use the same right padding (18) in jQ! */
  border-radius:3px;
  transition: background 0.4s;
    outline-color: #0c5add;
}
.clearable.x  { background-position: right 5px center;} /* (jQ) Show icon */
.clearable.onX{ cursor: pointer; }
              .button{
                  background-image:url(images/grey_wash_wall.png);
                  color:white;
                  width:15%;
                  outline: none;
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
    <form>
    <div class="container">
        
        <div class="row" align="right">
            <img alt="logo" width="100px" height="100px" src="images/lock.png"/>
        </div>
        <div class="row formBox">
            <div class="formTitle">
                Login to your account
            </div>
            <div class="form-group">
                <div class=" row input">
                    <div class="inputtext col-sm-4" align="left" style="padding:2em 0em 1em 3em;">
                        Username<sup
                            class="mandatory">*</sup>
                    </div>
                    <div class="inputcontent col-sm-8"align="right" style="padding:1.75em 6em 1em 0em;">
                        <input class="clearable" type="text" maxlength="40" autocomplete="off" />
                        <img src="images/info.gif" Title="Enter your user name." alt="Information" />
               </div>
               
               </div>
               <hr style="margin:1em 0em 1em 0em">
               <div class=" row input">
                    <div class="inputtext col-sm-4" align="left" style="padding:1em 0em 2em 3em;">
                        Password<sup
                            class="mandatory">*</sup>
                    </div>
                    <div class="inputcontent col-sm-8"align="right" style="padding:0.75em 6em 2em 0em;">
                        <input class="clearable" type="text" maxlength="40" autocomplete="off" />
                        <img src="images/info.gif" Title="Enter your user name." alt="Information" />
               </div>
               </div>
               <div>
                        <a id="ForgotPassword" tabindex="4" class="InlinePassword " href="" style="margin-left:2em;">Forgot Password?</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=" " class="InlinePassword" TabIndex="5">
                            First Time Administration Setup</a>
                    </div>

            </div>
        </div>
        <div style="padding-left: 675px;">
            <input type="submit"  value="Login" class="button" />
        </div>
    </div>
    </form>
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