<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$employee_id=$_POST['employee_id'];
$employee_name=$_POST['employee_name'];
$employee_address=$_POST['employee_address'];
$employee_phone=$_POST['employee_phone'];
$employee_gender=$_POST['employee_gender'];
$employee_position=$_POST['employee_position'];
$employee_join_date=$_POST['employee_join_date'];
$employee_salary=$_POST['employee_salary'];
  // sql to delete a record
  $sql = "UPDATE employee_info
  SET employee_name='$employee_name',employee_address='$employee_address',employee_phone='$employee_phone',employee_gender='$employee_gender',employee_position='$employee_position',employee_join_date='$employee_join_date',employee_salary='$employee_salary'
  WHERE employee_id='$employee_id'";

  if ($conn->query($sql) === TRUE) {
  header('Refresh:2; url=employee_info.php');
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

$conn->close();
?>
