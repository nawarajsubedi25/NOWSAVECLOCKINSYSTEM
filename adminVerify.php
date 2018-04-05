<?php
 include 'DatabaseConnection.php';
  $conn = new DatabaseConnection();
session_start(); // Starting Session
if (isset($_POST['formSubmit'])) {
    $useremail    = strtolower($_POST['userName']);
    $userpassword = $_POST['password'];
    
     
// Define $username and $password
 $query = "SELECT * FROM ADMIN
        WHERE Employeid='$useremail' AND
        Password='$userpassword'
        LIMIT 1";

    $result=$conn->returnQuery($query);
    if ($result->num_rows == 1) {
       
       $_SESSION['login_user']=$useremail; // Initializing Session
        header("location: profile.php"); // Redirecting To Other Page
        exit();
} else {
    $_SESSION['messagelogin'] = "Username and Password is Invalid !!";
    header("location: admin.php");
    exit();
}
}
?>