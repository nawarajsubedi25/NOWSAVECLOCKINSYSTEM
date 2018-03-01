<?php
include('session.php');
$var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
date_default_timezone_set("America/Chicago");
    $date_clicked = date('Y-m-d H:i:s');;
  //  echo "Time the button was clicked: " . $date_clicked . "<br>";

$DAYS=date('j');
$time=date('Y-m-d h:i:s A');
$MONTH=strtoupper(date('F'));

$query= "SELECT * FROM $MONTH
         WHERE Days='$DAYS'
         LIMIT 1";
 $result=$conn->returnEmployeeQuery($query);
    if ($result->num_rows == 1) {
        $query= "SELECT * FROM $MONTH
                 WHERE Days='$DAYS'";
$result=$conn->returnEmployeeQuery($query);  
        	while ($row = $result->fetch_array()) 
        	{
        	     if (($row[2]=="") && (!( $row[1]=="")))
        	     {
        	         $clockinTime=$row[1];
        	         $diff  = strtotime($time)-strtotime($clockinTime);

                   $hours = floor($diff / (60 * 60));
                   $minutes = $diff - $hours * (60 * 60);
                   echo 'Working Time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';
        	     }
        	     if (($row[4]=="") && (!( $row[3]=="")))
        	     {
        	        $clockinTime=$row[3];
        	        $diff  = strtotime($time)-strtotime($clockinTime);

                    $hours = floor($diff / (60 * 60));
                    $minutes = $diff - $hours * (60 * 60);
                    echo 'Working Time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';
        	     }
        	     
        	     }
    }