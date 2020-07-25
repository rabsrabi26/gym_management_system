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
$locker_no=$_POST['locker_no'];
$m_id=$_POST['m_id'];
$m_issue_date=$_POST['m_issue_date'];
$locker_validity=$_POST['locker_validity'];

  // sql to delete a record
  $sql = "UPDATE locker_info
  SET m_id='$m_id',m_issue_date='$m_issue_date',locker_validity='$locker_validity'
   WHERE locker_no='$locker_no'";

  if ($conn->query($sql) === TRUE) {
  header('Refresh:2; url=locker_info.php');
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

$conn->close();
?>
