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
$member_id=$_POST['member_id'];
$member_name=$_POST['member_name'];
$member_address=$_POST['member_address'];
$member_phone=$_POST['member_phone'];
$member_gender=$_POST['member_gender'];
$member_weight=$_POST['member_weight'];
$member_height=$_POST['member_height'];
$member_join_date=$_POST['member_join_date'];

  // sql to delete a record
  $sql = "UPDATE member_info
  SET member_name='$member_name',member_address='$member_address',member_phone='$member_phone',member_gender='$member_gender',member_weight='$member_weight',member_height='$member_height',member_join_date='$member_join_date'
   WHERE member_id='$member_id'";

  if ($conn->query($sql) === TRUE) {
  header('Refresh:2; url=member_info.php');
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

$conn->close();
?>
