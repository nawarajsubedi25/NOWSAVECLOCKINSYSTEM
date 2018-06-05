<?php

date_default_timezone_set("America/Chicago");
    $date_clicked = date('Y-m-d H:i:s');
$DAYS=date('j');
$YEAR=date('Y');
$YEARMONTH=date('Y-m');
$YearToDate=date('Y-m-d');
$MONTH=strtoupper(date('F'));

                     // Get Salary Information for the employee from EMPLOYEE INFORMATION 
                       	$query = "SELECT Srate FROM `INFORMATION`";
						  $result=$conn->returnEmployeeQuery($query);
						  $row = $result->fetch_assoc();
                          $Srate =$row["Srate"];
    /*
     Calculate total number of hour work in day and for Month
    */
    
        // Calculate number of hours work in a day. 
             
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
        	                
        	                
        	                // For Month 
        	                $HOURS+=$totalHours;
                         	$MINUTES+=fmod( floor($totalMinutes/60), 60 );
                         	$hoursFromMINUTES= intval($MINUTES/60 );
        	             	$HOURS+=$hoursFromMINUTES;
        	                $MINUTES=fmod($MINUTES, 60 );
        	                $HOURSMINUTES=$HOURS.".".$MINUTES;
        	             
						}
						// GROSS PAY CALCULATOR
						$worktime = ($HOURS * 60 + $MINUTES)/60;
                        $salary = $Srate*100; // = $1200-> in cents!
                        $GrossAmount = number_format(($worktime * $salary)/100,2, '.', ''); // This result is in Dollars
					    $query= "SELECT * FROM `PAYSTUBS`
                                 WHERE Date= '$YEARMONTH' AND MONTH='$month'
                                 LIMIT 1";
                         $result=$conn->returnEmployeeQuery($query);
                         if ($result->num_rows == 0) {
    	                      $query="INSERT INTO `PAYSTUBS`(`Date`, `Month`, `Srate`, `Thour`, `GrossAmount`, `Socialdudction`, `FederalTaxWithholding`, `StateTaxWithholding`, `Healthdudction`, `TotalPersonalDeductions`, `NetAmount`, `Startdate`, `Enddate`, `Paydate`, `Checkno`) VALUES ('$YEARMONTH','$month','$Srate','$HOURSMINUTES',$GrossAmount,'','','','','','','','','','')";
    	                    
    	                     	$conn->insertEmployeeDatabase($query);
                            }
                            
                            else {
                                $query="UPDATE `PAYSTUBS` SET `Thour`='$HOURSMINUTES',`GrossAmount`=$GrossAmount
                                        WHERE Month='$month' AND Date='$YEARMONTH'";
                                         $conn->updateEmployeeDatabase($query);
                                        
                            }
                            
					
                         	}
                         
						}
						
                         	}
             
   ?> 