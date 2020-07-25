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
$m_id=$_POST['m_id'];
$e_id=$_POST['e_id'];

  // sql to delete a record
  $sql = "UPDATE instructor_info
  SET e_id='$e_id'
   WHERE m_id='$m_id'";

  if ($conn->query($sql) === TRUE) {
  header('Refresh:2; url=instructor_info.php');
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

$conn->close();
?>
