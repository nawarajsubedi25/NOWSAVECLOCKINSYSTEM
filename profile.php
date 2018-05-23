<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>NOW&SAVE</title>
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
<b id="logout"><a href="logout.php" class="logout">Log Out</a></b>
</div>
</div>
<div class="container-fluid" id="outfit">
<div class="container">
<div class="row" id ="demo">
</div>
</div>

   <script type="text/javascript">
 /*****************************************
   Display hour and minutes in every minute
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

<div class="innercontainer">
    <div class="row">
        <div id="links">
    </div>
</div>
</div>
<div class="innercontainer">
<div class ="row">
    <button  type="button" name="click" class="btn btn-success center-block btn-lg" id="clockinn"> Clock IN</button>
</div>
<div class="row">
    <button type="button" id="clockout" class="btn btn-danger center-block btn-lg" > Clock Out</button>
</div>
</div>
<div class="innercontainer">
<div class="row">
    <hr class="profile">
    </div>
</div>    
    <div class="innercontainer">
        <div class="row timesheetFieldset">
       <fieldset class="coolfieldset" id="timesheetFieldset">
    <legend>Monthly Timesheet</legend>
    <div class="control-group">
        <?php
        $var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
         date_default_timezone_set("America/Chicago");
         $date_clicked = date('Y-m-d H:i:s');
        $DAYS=date('j');
         $YEAR=date('Y');
        $YearToDate=date('Y-m-d');
        $time=date('Y-m-d h:i:s A');
        $MONTH=strtoupper(date('F'));
        
        	$query = "SELECT DISTINCT Month FROM `2018` ORDER BY Date";
        	$result=$conn->returnEmployeeQuery($query);
                         	if ($result->num_rows > 0) {
                         		while($row = $result->fetch_array())
						{
						     echo "
						     <form action='timesheet.php' method='post' target='_blank' style ='display:inline;'>
						     <button class='buttonTimesheet' name='buttonTimesheet' value='{$row["0"]} 2018' >{$row["0"]}</button>
						     </form>
						 ";
						}
                         	}
        
        ?>
    </div>
</fieldset>
</div>
</div>
 <div class="innercontainer">
        <div class="row paystubsFieldset">
 <fieldset id="paystubsFieldset" class="coolfieldset">
    <legend>Pay Stubs </legend>
  
  <div class="control-group" >
  <?php
  	$query = "SELECT Distinct Month FROM  `PAYSTUBS` ORDER BY  `PAYSTUBS`.`Date` ASC ";
        	$result=$conn->returnEmployeeQuery($query);
                         	if ($result->num_rows > 0) {
                         		while($row = $result->fetch_array())
						{
						    echo "
						     <form action='paystubs.php' method='post' target='_blank' style ='display:inline;'>
						     <button class='buttonPaystubs' name='buttonPaystubs' value='{$row["0"]} 2018' >{$row["0"]}</button>
						     </form>
						 ";
						}
                         	}
                         	?>
    </div>
      </fieldset>
 </div> 
 </div>
 </div>
 <script>
  
    $('#timesheetFieldset').coolfieldset({collapsed:true,speed:"fast"});
      $('#paystubsFieldset').coolfieldset({collapsed:true,speed:"fast"});
  </script>
 <div class="container-fluid mainLine">
        <div class="row footer">
            <div class="col-sm-8">
            <h5>DHALIWAL INC.
            <required>|</required>&nbsp;NOW SAVE STORES
            <required>|</required>&nbsp;5402 CYPRESS ST WEST MONROE, LA 71291</h5>
            </div>
            <div class="programmer col-sm-4">
             <h5 style="text-align:right;"><a href="http://www.nawarajsubedi.com">&copy;Nawaraj Subedi- Software Developer</a></h5>
            </div>       
        </div>

    </div>

</body>
</html>