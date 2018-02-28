<?php
include('session.php');
$var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
date_default_timezone_set("America/Chicago");
   // $date_clicked = date('Y-m-d H:i:s');;
 //  echo "Time the button was clicked: " . $date_clicked . "<br>";
//echo date("l jS \of F Y h:i:s A") . "<br>";

$DAYS=date('j');
$time=date('Y-m-d h:i:s A');
//echo $FIntime;
$MONTH=strtoupper(date('F'));

$query= "SELECT * FROM $MONTH
         WHERE Days='$DAYS'
         LIMIT 1";
 $result=$conn->returnEmployeeQuery($query);
    if ($result->num_rows == 0) {
        $query= "INSERT INTO $MONTH (Days,FirstIn,FirstOut,SecondIn,SecondOut) VALUES ('$DAYS','$time','','','')";
	$conn->insertEmployeeDatabase($query);
    }
    else{
        $query= "UPDATE $MONTH
        	                 SET SecondIn='$time'
        	                 WHERE Days='$DAYS'";
        	                 $conn->updateEmployeeDatabase($query);
        	                 
    }
    $time2= date('Y-m-d h:i:s A');
    $start=date("h:i:s A",strtotime($time2));
    echo "You have Succsefully clock in at ".$start;
//$start = strtotime($time2);
//$end   = strtotime("2018-03-27 09:15:55 PM");
//$diff  = $end - $start;

//$hours = floor($diff / (60 * 60));
//$minutes = $diff - $hours * (60 * 60);
//echo 'Remaining time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';

//$start = strtotime('2018-02-27 07:43:52 PM');
//$end   = strtotime('2018-02-27 07:52:11 PM');
//$diff  = $end - $start;

//$hours = floor($diff / (60 * 60));
//$minutes = $diff - $hours * (60 * 60);
//echo 'Remaining time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';

//$datetime1 = new DateTime('2014-02-11 04:04:26 AM');
//$datetime2 = new DateTime('2014-02-11 05:36:56 AM');
//$interval = $datetime1->diff($datetime2);
//echo $interval->format('%h')." Hours ".$interval->format('%i')." Minutes";
?>