<?php
class EmployeeDatabaseConnection 
{
    public $localhost ;
    public $username ;
    public $password ;
    public $dbname;
    public $port ;
    public $connection;
    public $sessionName;
    public function __construct ($sessionName)
    {
      $this->localhost = "127.0.0.1";
      $this ->username = "nawarajsubedi25";
      $this ->password = "";
      $this->dbname =$sessionName;
      $this->port = 3306;
      $this-> connectDatabase();
    }
    // Connect database 
     public function connectDatabase()
     {
      $this->connection= mysqli_connect($this->localhost, $this->username, $this->password,$this->dbname , $this->port);
      $error = mysqli_connect_errno();
      if ($error !=null)
      {
        $output="<p>Unable to connect database<p>" . $error;
        exit($output);
      }
    }
// Insert values in Database 
public function insertEmployeeDatabase ($query)
{
  mysqli_query($this->connection, $query);
}
// Upadte values in Database 
public function updateEmployeeDatabase ($query)
{
  mysqli_query($this->connection, $query);
}
 // Execute query to retrive value from database
 public function returnEmployeeQuery($query)
 {
  $result =mysqli_query($this->connection,$query);
 return $result;
}
}
?>