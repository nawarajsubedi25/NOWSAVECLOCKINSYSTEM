<?php
include('session.php');
$var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
date_default_timezone_set("America/Chicago");
$DAYS=date('j');
$time=date('Y-m-d h:i:s A');
$MONTH=strtoupper(date('F'));

$query= "SELECT * FROM $MONTH
         WHERE Days='$DAYS'
         LIMIT 1";
 $result=$conn->returnEmployeeQuery($query);
    if ($result->num_rows == 0) {
        $query= "INSERT INTO $MONTH (Days,FirstIn,FirstOut,SecondIn,SecondOut,ThirdIn,ThirdOut,Total) VALUES ('$DAYS','$time','','','','','','')";
	$conn->insertEmployeeDatabase($query);
	 $start=date("h:i:s A",strtotime($time));
    echo "You have Succsefully clock in at ".$start;
    }
    else{
        
        	while ($row = $result->fetch_array()) 
        	{
        	    if ($row[3]=="")
        	     {
                 $query= "UPDATE $MONTH
        	                 SET SecondIn='$time'
        	                 WHERE Days='$DAYS'";
        	                 $conn->updateEmployeeDatabase($query);
        	                  $start=date("h:i:s A",strtotime($time));
                              echo "You have Succsefully clock in at ".$start;
                 }
                 
              else if ($row[5]=="")
            {
        $query= "UPDATE $MONTH
        	                 SET ThirdIn='$time'
        	                 WHERE Days='$DAYS'";
        	                 $conn->updateEmployeeDatabase($query); 
        	                  $start=date("h:i:s A",strtotime($time));
                            echo "You have Succsefully clock in at ".$start;
    }
    else
    {
        echo "Your Clock In Limit Exceed !! Contact Management !!";
    }
    
        	}
    }
   
?>