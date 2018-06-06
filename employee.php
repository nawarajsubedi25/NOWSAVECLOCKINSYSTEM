<?php
//Database Connector
include 'DatabaseConnection.php';
include 'EmployeeDatabaseConnection.php';
if (isset($_POST['agree'])) {
$firstname= ucwords(strtolower($_POST["firstName"]));
$lastname= ucwords(strtolower($_POST["lastName"]));
$ssn=$_POST["ssn"];
$streetaddress=$_POST["streetAddress"];
$citystatezip=$_POST["cityName"].', '.$_POST["stateName"]." ".$_POST["zipCode"];
$employeer="VIJAY-VIKRAM LLC";
$position=$_POST["jobTitle"];
$srate=$_POST["salaryRate"];
$username= strtolower($_POST["username"]);
$password=$_POST["password"];
$employeeId=$_POST["employeeId"];
$birthDate=$_POST["dob"];
$raj= new DatabaseConnection();
 $query = "SELECT * FROM ADMIN
        WHERE Username='$username' OR
        Employeid='$employeeId'
        LIMIT 1";
$result=$raj->returnQuery($query);
    if ($result->num_rows == 0) {
        $query="INSERT INTO `ADMIN`(`Fname`, `Lname`, `Username`, `Password`, `Security`, `Answer`, `Birthday`, `Employeid`) VALUES ('$firstname','$lastname','$username','$password','','','$birthDate','$employeeId')";
        $raj->insertDatabase($query);
        $query="CREATE DATABASE $firstname";
        $raj->insertDatabase($query);
        $conn= new EmployeeDatabaseConnection($firstname);
        $YEAR=date('Y');
         $query="CREATE TABLE IF NOT EXISTS `$YEAR` (
                `Date` varchar(11) NOT NULL,
                `Month` varchar(10) NOT NULL,
                `Days` int(20) NOT NULL,
                `FirstIn` varchar(50) NOT NULL,
                `FirstOut` varchar(50) NOT NULL,
                `SecondIn` varchar(50) NOT NULL,
                `SecondOut` varchar(50) NOT NULL,
                `ThirdIn` varchar(50) NOT NULL,
                `ThirdOut` varchar(50) NOT NULL,
                `Total` varchar(20) NOT NULL,
                 PRIMARY KEY (`Date`)
               )";
        $conn->insertEmployeeDatabase($query);
        
        $query="CREATE TABLE IF NOT EXISTS `PAYSTUBS` (
               `Date` varchar(10) NOT NULL,
               `Month` varchar(15) NOT NULL,
               `Srate` decimal(10,2) NOT NULL,
               `Thour` decimal(10,2) NOT NULL,
               `GrossAmount` decimal(10,2) NOT NULL,
               `Socialdudction` decimal(10,2) NOT NULL,
               `FederalTaxWithholding` decimal(10,2) NOT NULL,
               `StateTaxWithholding` decimal(10,2) NOT NULL,
               `Healthdudction` decimal(10,2) NOT NULL,
               `TotalPersonalDeductions` decimal(10,2) NOT NULL,
               `NetAmount` decimal(10,2) NOT NULL,
               `Startdate` varchar(10) NOT NULL,
               `Enddate` varchar(10) NOT NULL,
               `Paydate` varchar(10) NOT NULL,
               `Checkno` varchar(10) NOT NULL,
               PRIMARY KEY (`Month`)
              )";
               $conn->insertEmployeeDatabase($query);
        $query="CREATE TABLE IF NOT EXISTS `INFORMATION` (
               `Fname` varchar(20) NOT NULL,
               `Lname` varchar(20) NOT NULL,
               `Ssn` varchar(11) NOT NULL,
               `Streetaddress` varchar(50) NOT NULL,
               `Citystate` varchar(30) NOT NULL,
               `Employer` varchar(30) NOT NULL,
               `Position` varchar(20) NOT NULL,
               `Srate` double NOT NULL,
                PRIMARY KEY (`Ssn`)
               )";
          $conn->insertEmployeeDatabase($query);
          $query="INSERT INTO `INFORMATION` (`Fname`, `Lname`, `Ssn`, `Streetaddress`, `Citystate`, `Employer`, `Position`, `Srate`) VALUES
                ('$firstname', '$lastname', '$ssn', '$streetaddress', '$citystatezip', 'VIJAY-VIKRAM LLC', '$position', $srate)";
         $conn->insertEmployeeDatabase($query);
        echo $firstname." ".$lastname;
    }
    else{
       echo "Different Employee can't have same Username or Employee ID";
    }
}


?>