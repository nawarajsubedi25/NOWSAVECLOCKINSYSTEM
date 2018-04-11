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
        header("location: adminDashbord.php"); // Redirecting To Other Page
        exit();
} else {
    $_SESSION['messagelogin'] = "We are unable to process your request. Please try your request again. If you continue to receive this message please contact to store manager.";
    header("location: admin.php");

    exit();
    
}
}
?>