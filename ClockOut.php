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
        	     if(($row[2]=="") && (!( $row[1]=="")))
        	     {
        	        $query= "UPDATE $MONTH
        	                 SET FirstOut='$time'
        	                 WHERE Days='$DAYS'";
        	                 $conn->updateEmployeeDatabase($query);
        	     }
        	     else if(($row[4]=="") && (!( $row[3]=="")))
        	     {
        	        $query= "UPDATE $MONTH
        	                 SET SecondOut='$time'
        	                 WHERE Days='$DAYS'";
        	                 $conn->updateEmployeeDatabase($query);
        	     }
        	     else if(($row[6]=="") && (!( $row[5]=="")))
        	     {
        	        $query= "UPDATE $MONTH
        	                 SET ThirdOut='$time'
        	                 WHERE Days='$DAYS'";
        	                 $conn->updateEmployeeDatabase($query);
        	     }
        	     
        	     
        
    }
    }
    echo "You have Succsefully clock out at ".$time;

    