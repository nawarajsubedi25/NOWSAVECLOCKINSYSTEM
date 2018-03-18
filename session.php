<?php
  include 'DatabaseConnection.php';
     $conn1 = new DatabaseConnection();
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query="select Fname from ADMIN where Employeid='$user_check'";
$result = $conn1->returnQuery($query);
$row = $result->fetch_assoc();
$login_session =$row["Fname"];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>