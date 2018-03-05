<?php
include('session.php');
$var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
date_default_timezone_set("America/Chicago");
    $date_clicked = date('Y-m-d H:i:s');
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
             
               	$query = "SELECT * FROM $MONTH
    	          WHERE Days='$DAYS' ";
    	
						 $result=$conn->returnEmployeeQuery($query);
                         	if ($result->num_rows > 0) {
                         		while($row = $result->fetch_array())
						{
						   
						     if (!($row[2]=="") && (!( $row[1]=="")))
        	     {
        	         $clockinTime=$row[1];
        	         $clockoutTime=$row[2];
        	         $diff  = strtotime($clockoutTime)-strtotime($clockinTime);
                   $hours = floor($diff / (60 * 60));
                   $minutes = $diff - $hours * (60 * 60);
                   $totalMinutes+=$minutes;
                   $totalHours+=$hours;
						}
								 if (!($row[3]=="") && (!( $row[4]=="")))
        	     {
        	         $clockinTime=$row[3];
        	         $clockoutTime=$row[4];
        	         $diff  = strtotime($clockoutTime)-strtotime($clockinTime);
                   $hours = floor($diff / (60 * 60));
                   $minutes = $diff - $hours * (60 * 60);
                   $totalMinutes+=$minutes;
                   $totalHours+=$hours;
						}
								 if (!($row[5]=="") && (!( $row[6]=="")))
        	     {
        	         $clockinTime=$row[5];
        	         $clockoutTime=$row[6];
        	         $diff  = strtotime($clockoutTime)-strtotime($clockinTime);
                   $hours = floor($diff / (60 * 60));
                   $minutes = $diff - $hours * (60 * 60);
                   $totalMinutes+=$minutes;
                   $totalHours+=$hours;
						}
						}
						$hourMinutes= $totalHours."." . floor( $totalMinutes / 60 );
					 $query= "UPDATE $MONTH
        	                 SET Total='$hourMinutes'
        	                WHERE Days='$DAYS'";
        	                $conn->updateEmployeeDatabase($query);	
                         	}
             
    }
    echo "You have Succsefully clock out at ".$time;

   ?> 