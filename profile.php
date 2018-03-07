<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script language="javascript" type="text/javascript" src="../js/jquery.coolfieldset.js"></script>
 <link rel="stylesheet" type="text/css" href="css/jquery.coolfieldset.css" />
	<script src="js/showhide.js"></script>
	<script src="js/time.js"></script>
</head>
<body>
    <div class="container-fluid">
    <div class="row" id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<div class="row" id ="demo">
</div>
   <script type="text/javascript">
   /*****************************************
 * Display hour and minutes in every minute
  ****************************************/
$(document).ready(function(){
  sendRequest();
  function sendRequest(){
      $.ajax({
        url: "hourMinuteCalculator.php",
        success: 
          function(data){
              if (!(data==""))
              {
                    $('#links').html(data); 
                    $('#clockinn').hide();
                    $('#clockout').show();
              }
              else
              {
                  $('#links').html("Hit Clock in Button"); 
                  $('#clockout').hide();
                   $('#clockinn').show();
              }
           
        },
        complete: function() {
       // Schedule the next request when the current one's complete
       setInterval(sendRequest, 50000); // The interval set to 5 second
       }
    });
  };
});
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('demo').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<!--div class="row">
<marquee scrollamount="15">
   <div id="links">
    </div>
    </marquee>
    </div-->
    <div class="row" id="links">
    </div>

<div class ="row">
    <button  type="button" name="click" class="btn btn-success center-block btn-lg" id="clockinn"> Clock IN</button>
</div>
<div class="row">
    <button type="button" id="clockout" class="btn btn-danger center-block btn-lg"> Clock Out</button>
</div>
<div class="row">
    <hr class="profile">
    </div>
    
    <div class="container">
       <fieldset class="coolfieldset" id="timesheetFieldset">
    <legend class="scheduler-border">Monthly Timesheet</legend>
    <div class="control-group">
    </div>
</fieldset>
 <fieldset id="paystubsFieldset" class="coolfieldset">
    <legend>Pay Stubs </legend>
  </fieldset>
 <script>
  
    $('#timesheetFieldset').coolfieldset({collapsed:true,speed:"fast"});
      $('#paystubsFieldset').coolfieldset({collapsed:true});
  </script>
    </div>
 </div> 

</body>
</html>