<?php
include('session.php');
$var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
date_default_timezone_set("America/Chicago");
$date_clicked = date('Y-m-d H:i:s');;
$DAYS=date('j');
$YEAR=date('Y');
$YearToDate=date('Y-m-d');
$time=date('Y-m-d h:i:s A');
$MONTH=strtoupper(date('F'));

$query="SELECT * FROM `$YEAR`";
 $result=$conn->returnEmployeeQuery($query);
      if($result->num_rows >1)
      {
          while ($row=$result->fetch_array())
          {
             if (($row[4]=="") && (!( $row[3]=="")))
        	     {  
        	       $activeDate=$row[0];
        	       $fillCol="FirstOut";
        	       $clockinTime=$row[3];
        	       $diff  = strtotime($time)-strtotime($clockinTime);
                   $hours = floor($diff / (60 * 60));
                   $minutes = $diff - $hours * (60 * 60);
                   echo 'Working Time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';
          }
           else if (($row[6]=="") && (!( $row[5]=="")))
        	     {
        	          $activeDate=$row[0];
        	          $fillCol="SecondOut";
        	        $clockinTime=$row[5];
        	        $diff  = strtotime($time)-strtotime($clockinTime);

                    $hours = floor($diff / (60 * 60));
                    $minutes = $diff - $hours * (60 * 60);
                    echo 'Working Time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';
        	     }
        	      else if(($row[8]=="") && (!( $row[7]=="")))
        	     {
        	          $activeDate=$row[0];
        	          $fillCol="ThirdOut";
        	        $clockinTime=$row[7];
        	        $diff  = strtotime($time)-strtotime($clockinTime);

                    $hours = floor($diff / (60 * 60));
                    $minutes = $diff - $hours * (60 * 60);
                    echo 'Working Time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';
        	     }
        	     
      }
      }







/*

$query= "SELECT * FROM `$YEAR`
         WHERE Date= '$YearToDate' AND Days='$DAYS'
         LIMIT 1";
 $result=$conn->returnEmployeeQuery($query);
    if ($result->num_rows == 1) {
        $query= "SELECT * FROM `$YEAR`
                 WHERE Days='$DAYS' AND Date='$YearToDate'";
$result=$conn->returnEmployeeQuery($query);  
        	while ($row = $result->fetch_array()) 
        	{
        	     if (($row[4]=="") && (!( $row[3]=="")))
        	     {
        	         $clockinTime=$row[3];
        	         $diff  = strtotime($time)-strtotime($clockinTime);
                   $hours = floor($diff / (60 * 60));
                   $minutes = $diff - $hours * (60 * 60);
                   echo 'Working Time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';
        	     }
        	     else if (($row[6]=="") && (!( $row[5]=="")))
        	     {
        	        $clockinTime=$row[5];
        	        $diff  = strtotime($time)-strtotime($clockinTime);

                    $hours = floor($diff / (60 * 60));
                    $minutes = $diff - $hours * (60 * 60);
                    echo 'Working Time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';
        	     }
        	     else if(($row[8]=="") && (!( $row[7]=="")))
        	     {
        	        $clockinTime=$row[7];
        	        $diff  = strtotime($time)-strtotime($clockinTime);

                    $hours = floor($diff / (60 * 60));
                    $minutes = $diff - $hours * (60 * 60);
                    echo 'Working Time: ' . $hours .  ' hours, ' . floor( $minutes / 60 ) . ' minutes';
        	     }
        	     
        	     }
    }
    
  */
  ?>