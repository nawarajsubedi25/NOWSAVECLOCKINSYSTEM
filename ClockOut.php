<?php
include('session.php');
$var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
date_default_timezone_set("America/Chicago");
    $date_clicked = date('Y-m-d H:i:s');;
  //  echo "Time the button was clicked: " . $date_clicked . "<br>";

$DAYS=date('j');
$time=date("h:i:s A");
$MONTH=strtoupper(date('F'));

$query= "SELECT * FROM $MONTH
         WHERE Days='$DAYS'
         LIMIT 1";
         echo $query;
 $result=$conn->returnEmployeeQuery($query);
    if ($result->num_rows == 1) {
        $query= "SELECT * FROM $MONTH
                 WHERE Days='$DAYS'";
$result=$conn->returnEmployeeQuery($query);  
        	while ($row = $result->fetch_array()) 
        	{
        	     if ($row[2]=="")
        	     {
        	        $query= "UPDATE $MONTH
        	                 SET FirstOut='$time'
        	                 WHERE Days='$DAYS'";
        	                 $conn->updateEmployeeDatabase($query);
        	     }
        	     else
        	     {
        	        $query= "UPDATE $MONTH
        	                 SET SecondOut='$time'
        	                 WHERE Days='$DAYS'";
        	                 $conn->updateEmployeeDatabase($query);
        	     }
        	     
        
    }
    }
 //   echo "lamo";
//$query= "INSERT INTO FEBRUARY (Days,FirstIn,FirstOut,SecondIn,SecondOut) VALUES ('$DAYS','$FIntime','$FIntime','','')";
//	$conn->insertEmployeeDatabase($query);


    