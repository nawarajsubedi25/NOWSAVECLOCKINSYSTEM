<?php
include('session.php');
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

$query= "SELECT * FROM `$YEAR`
         WHERE Date= '$YearToDate' AND Days='$DAYS'
         LIMIT 1";
 $result=$conn->returnEmployeeQuery($query);
    if ($result->num_rows == 1) {
        $query= "SELECT * FROM `$YEAR`
                 WHERE Date= '$YearToDate' AND Days='$DAYS'";
$result=$conn->returnEmployeeQuery($query);  
        	while ($row = $result->fetch_array()) 
        	{
        	     if(($row[4]=="") && (!( $row[3]=="")))
        	     {
        	        $query= "UPDATE `$YEAR`
        	                 SET FirstOut='$time'
        	                 WHERE Days='$DAYS' AND Date='$YearToDate'";
        	                 $conn->updateEmployeeDatabase($query);
        	     }
        	     else if(($row[6]=="") && (!( $row[5]=="")))
        	     {
        	        $query= "UPDATE `$YEAR`
        	                 SET SecondOut='$time'
        	                 WHERE Days='$DAYS' AND Date='$YearToDate'";
        	                 $conn->updateEmployeeDatabase($query);
        	     }
        	     else if(($row[8]=="") && (!( $row[7]=="")))
        	     {
        	        $query= "UPDATE `$YEAR`
        	                 SET ThirdOut='$time'
        	                 WHERE Days='$DAYS' AND Date='$YearToDate'";
        	                 $conn->updateEmployeeDatabase($query);
        	     }
             }
             
               	$query = "SELECT * FROM `$YEAR`
    	          WHERE Days='$DAYS' AND Date='$YearToDate'";
    	
						 $result=$conn->returnEmployeeQuery($query);
                         	if ($result->num_rows > 0) {
                         		while($row = $result->fetch_array())
						{
						   
						     if (!($row[4]=="") && (!( $row[3]=="")))
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
								 if (!($row[7]=="") && (!( $row[8]=="")))
        	     {
        	         $clockinTime=$row[7];
        	         $clockoutTime=$row[8];
        	         $diff  = strtotime($clockoutTime)-strtotime($clockinTime);
                   $hours = floor($diff / (60 * 60));
                   $minutes = $diff - $hours * (60 * 60);
                   $totalMinutes+=$minutes;
                   $totalHours+=$hours;
						}
						}
						$hourMinutes= $totalHours."." . floor( $totalMinutes / 60 );
					 $query= "UPDATE `$YEAR`
        	                 SET Total='$hourMinutes'
        	                WHERE Days='$DAYS' AND Date='$YearToDate'";
        	                $conn->updateEmployeeDatabase($query);	
                         	}
             
    }
    echo "You have Succsefully clock out at ".$time;

   ?> 