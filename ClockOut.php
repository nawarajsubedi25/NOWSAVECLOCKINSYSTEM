<?php
ob_start();
include('hourMinuteCalculator.php');
date_default_timezone_set("America/Chicago");
    $date_clicked = date('Y-m-d H:i:s');
$DAYS=date('j');
$YEAR=date('Y');
$YearToDate=date('Y-m-d');
$time=date('Y-m-d h:i:s A');
$MONTH=strtoupper(date('F'));
$activeDATE=$activeDate; // Get active clockin date from hourMinuteCalculator
$rowCol=$fillCol;
/*
 Store Clock out time and date
*/
if(!($activeDATE==""))
{
$query= "UPDATE `$YEAR`
         SET `$rowCol`='$time'
         WHERE  Date='$activeDATE'";
         $conn->updateEmployeeDatabase($query);
         ob_end_clean();
         echo "You have Succsefully clock out at ".$time;
         
         include('Calculator.php'); // 
}
 /*
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
        	                  echo "You have Succsefully clock out at ".$time;
        	     }
        	     else if(($row[6]=="") && (!( $row[5]=="")))
        	     {
        	        $query= "UPDATE `$YEAR`
        	                 SET SecondOut='$time'
        	                 WHERE Days='$DAYS' AND Date='$YearToDate'";
        	                 $conn->updateEmployeeDatabase($query);
        	                  echo "You have Succsefully clock out at ".$time;
        	     }
        	     else if(($row[8]=="") && (!( $row[7]=="")))
        	     {
        	        $query= "UPDATE `$YEAR`
        	                 SET ThirdOut='$time'
        	                 WHERE Days='$DAYS' AND Date='$YearToDate'";
        	                 $conn->updateEmployeeDatabase($query);
        	                  echo "You have Succsefully clock out at ".$time;
        	     }
             }
    }
    
    /*
     Calculate total number of hour work in day
    */
           /*  
               	$query = "SELECT * FROM `$YEAR`";
    	
						 $result=$conn->returnEmployeeQuery($query);
                         	if ($result->num_rows > 0) 
                         	{
                         		while($row = $result->fetch_array())
						{
						    $totalHours=0;
						    $totalMinutes=0;
						    $hoursFromMinutes=0;
						    $date=$row[0];
						    $days=$row[2];
						    $hourMinutes=0;
						    $remainingMinutes=0;
						   
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
						
        	             	$hourFromMinutes= intval( floor($totalMinutes / 60)/60 );
        	             	$remainingMinutes=intval( floor($totalMinutes / 60)/60 ) - ($hoursFromMinutes * 60);
        	             	$totalHours+=$hourFromMinutes;
						$hourMinutes= $totalHours."." . fmod( floor($totalMinutes/60), 60 );
					 $query= "UPDATE `$YEAR`
        	                 SET Total='$hourMinutes'
        	                WHERE Days='$days' AND Date='$date'";
        	                $conn->updateEmployeeDatabase($query);   
						}
					
						
                         	}
                         	*/
             
   ?> 