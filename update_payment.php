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
$invoice_no=$_POST['invoice_no'];
$m_id=$_POST['m_id'];
$payment_date=$_POST['payment_date'];
$total_amount=$_POST['total_amount'];
$paid_amount=$_POST['paid_amount'];
$due_amount=$_POST['due_amount'];
  // sql to delete a record
  $sql = "UPDATE payment_info
  SET m_id='$m_id',payment_date='$payment_date',total_amount='$total_amount',paid_amount='$paid_amount',due_amount='$due_amount
   WHERE invoice_no='$invoice_no'";

  if ($conn->query($sql) === TRUE) {
  header('Refresh:2; url=payment_info.php');
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

$conn->close();
?>
