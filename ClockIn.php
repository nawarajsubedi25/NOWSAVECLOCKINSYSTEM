<?php
include('session.php');
$var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
date_default_timezone_set("America/Chicago");
$DAYS=date('j');
$YEAR=date('Y');
$YearToDate=date('Y-m-d');
$time=date('Y-m-d h:i:s A');
$MONTH=strtoupper(date('F'));
$query= "SELECT * FROM `$YEAR`
         WHERE Date= '$YearToDate' AND Days='$DAYS'
         LIMIT 1";
         
 $result=$conn->returnEmployeeQuery($query);
    if ($result->num_rows == 0) {
        $query= "INSERT INTO `$YEAR` (Date,Month,Days,FirstIn,FirstOut,SecondIn,SecondOut,ThirdIn,ThirdOut,Total) VALUES ('$YearToDate','$MONTH','$DAYS','$time','','','','','','')";
	$conn->insertEmployeeDatabase($query);
	 $start=date("h:i:s A",strtotime($time));
    echo "You have Succsefully clock in at ".$start;
    }
    else{
        
        	while ($row = $result->fetch_array()) 
        	{
        	    if ($row[5]=="")
        	     {
                 $query= "UPDATE `$YEAR`
        	                 SET SecondIn='$time'
        	                 WHERE Days='$DAYS' AND Date='$YearToDate'";
        	                 $conn->updateEmployeeDatabase($query);
        	                  $start=date("h:i:s A",strtotime($time));
                              echo "You have Succsefully clock in at ".$start;
                 }
                 
              else if ($row[7]=="")
            {
        $query= "UPDATE `$YEAR`
        	                 SET ThirdIn='$time'
        	                 WHERE Days='$DAYS'AND Date='$YearToDate'";
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