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
$time=date("h:i:s A");
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

?>