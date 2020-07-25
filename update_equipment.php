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
$equipment_no=$_POST['equipment_no'];
$equipment_name=$_POST['equipment_name'];
$equipment_quantity=$_POST['equipment_quantity'];

  // sql to delete a record
  $sql = "UPDATE payment_info
  SET equipment_name='$equipment_name',equipment_quantity='$equipment_quantity'
   WHERE equipment_no='$equipment_no'";

  if ($conn->query($sql) === TRUE) {
  header('Refresh:2; url=equipment_info.php');
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

$conn->close();
?>
