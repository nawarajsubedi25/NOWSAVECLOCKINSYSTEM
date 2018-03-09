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
    /*
     Calculate total number of hour work in day
    */
             
               	$query1 = "SELECT DISTINCT Month FROM `2018` ORDER BY Date";
						 $result1=$conn->returnEmployeeQuery($query1);
                         	if ($result1->num_rows > 0) {
                         		while($row1 = $result1->fetch_array())
						{
						    $month=$row1[0];
						    $HOURS=0;
						    $MINUTES=0;
						     $totalHours=0;
						    $totalMinutes=0;
						    $hoursFromMinutes=0;
						    $hourMinutes=0;
						    $remainingMinutes=0;
						    $hourFromMINUTES=0;
						    
						     	$query2 = "SELECT * FROM `$YEAR`
						     	          WHERE Month='$month'";
						    	 $result2=$conn->returnEmployeeQuery($query2);
						    	 	if ($result2->num_rows > 0) {
                         		while($row2 = $result2->fetch_array())
						{
						    $totalHours=0;
						    $totalMinutes=0;
						    $hoursFromMinutes=0;
						    $hourMinutes=0;
						    $remainingMinutes=0;
						        $date=$row2[0];
						    $days=$row2[2];
						
						     if (!($row2[4]=="") && (!( $row2[3]=="")))
        	     {
        	         $clockinTime=$row2[3];
        	         $clockoutTime=$row2[4];
        	         $diff  = strtotime($clockoutTime)-strtotime($clockinTime);
                   $hours = floor($diff / (60 * 60));
                   $minutes = $diff - $hours * (60 * 60);
                   $totalMinutes+=$minutes;
                   $totalHours+=$hours;
						}
								 if (!($row2[5]=="") && (!( $row2[6]=="")))
        	     {
        	         $clockinTime=$row2[5];
        	         $clockoutTime=$row2[6];
        	         $diff  = strtotime($clockoutTime)-strtotime($clockinTime);
                   $hours = floor($diff / (60 * 60));
                   $minutes = $diff - $hours * (60 * 60);
                   $totalMinutes+=$minutes;
                   $totalHours+=$hours;
						}
								 if (!($row2[7]=="") && (!( $row2[8]=="")))
        	     {
        	         $clockinTime=$row2[7];
        	         $clockoutTime=$row2[8];
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
        	                $HOURS+=$totalHours;
                         	$MINUTES+=fmod( floor($totalMinutes/60), 60 );
                         	
                         	
                         		$hoursFromMINUTES= intval($MINUTES/60 );
        	             	$HOURS+=$hoursFromMINUTES;
        	             $MINUTES=fmod($MINUTES, 60 );
						}
					
                         	}
                         
						}
						
                         	}
             
   ?> 