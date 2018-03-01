<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/showhide.js"></script>
	<script src="js/time.js"></script>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<p id="demo"></p>
<div id="clockin">
   <script type="text/javascript">
   /*****************************************
 * Display hour and minutes in every minute
  ****************************************
function loadlink(){
    $('#links').load('hourMinuteCalculator.php',function () {
         $(this).unwrap();
    });
}

loadlink(); // This will run on page load
setInterval(function(){
    loadlink() // this will run after every 5 seconds
},100);
*/
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
       setInterval(sendRequest, 10000); // The interval set to 5 second
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
</div>
<div>
<p id="links"></p>
    </div>
<form action="" method="POST">
<div>
    <button  type="button" name="click" class="click" id="clockinn"> Clock IN</button>
</div>
</form>
<div>
    <button type="button" id="clockout"> Clock Out</button>
</div>

<?php
//include 'EmployeeDatabaseConnection.php';
//$conn= new EmployeeDatabaseConnection();
//if(isset($_POST['click']))
//{
 //   $date_clicked = date('Y-m-d H:i:s');;
 //   echo "Time the button was clicked: " . $date_clicked . "<br>";

//$DAYS=date('j');
//$FIntime=date("H:i:s");
//$MONTH=strtoupper(date('F'));
//echo $DAYS;
//echo $FIntime;
//echo $MONTH;
//$query= "INSERT INTO FEBRUARY (Days,FirstIn,FirstOut,SecondIn,SecondOut) VALUES ('$DAYS','$FIntime','','','')";
//echo $query;
//	$conn->insertDatabase($query);
//s}
?>

</body>
</html>