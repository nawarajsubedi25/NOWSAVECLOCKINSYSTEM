<?php
//Database Connector
include 'DatabaseConnection.php';
if (isset($_POST['agree'])) {
$firstname= ucwords(strtolower($_POST["firstName"]));
$lastname= ucwords(strtolower($_POST["lastName"]));
$username= strtolower($_POST["username"]);
$password=$_POST["password"];
$employeeId=$_POST["employeeId"];
$birthDate=$_POST["dob"];
$raj= new DatabaseConnection();
 $query = "SELECT * FROM ADMIN
        WHERE Username='$username' AND
        Employeid='$employeeId'
        LIMIT 1";
$result=$raj->returnQuery($query);
    if ($result->num_rows == 0) {
        $query="INSERT INTO `ADMIN`(`Fname`, `Lname`, `Username`, `Password`, `Security`, `Answer`, `Birthday`, `Employeid`) VALUES ('$firstname','$lastname','$username','$password','','','$birthDate','$employeeId')";
        $raj->insertDatabase($query);
        echo $firstname." ".$lastname;
    }
    else{
       echo "Different Employee can't have same Username or Employee ID";
    }
}


?>