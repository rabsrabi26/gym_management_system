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
$package_id=$_POST['package_id'];
$m_id=$_POST['m_id'];
$package_name=$_POST['package_name'];
$package_fee=$_POST['package_fee'];
$package_validity=$_POST['package_validity'];

  // sql to delete a record
  $sql = "UPDATE package_info
  SET m_id='$mm_id',package_name='$package_name',package_fee='$package_fee',package_validity='$package_validity'
   WHERE package_id='$package_id'";

  if ($conn->query($sql) === TRUE) {
  header('Refresh:2; url=package_info.php');
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

$conn->close();
?>
