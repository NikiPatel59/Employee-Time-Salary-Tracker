 <?php
  include("connection1.php");
   $sql = "insert into employeesalary(emp_number,salaryperhour)"."values('".$_POST["empname"]."','".$_POST["salary"]."')";
   $result = $conn->query($sql);
    if ($result === TRUE) {
      header('Location:employeesalary.html');
       exit;
                          }
 ?>
