<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "myDB";
  // Create connection
   $conn = new mysqli($servername, $username, $password,$dbname);
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
                            }
  //echo "Connected successfully";
   $sql = "delete from employee where emp_number = " . $_GET["emp_number"] ;
   $delete=$conn->query($sql);
    if ($delete === TRUE) {
     header('Location:employee.html');
      exit;
                          }