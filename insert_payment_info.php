<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gym_management_system");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$invoice_no = mysqli_real_escape_string($link, $_REQUEST['invoice_no']);
$m_id = mysqli_real_escape_string($link, $_REQUEST['m_id']);
$payment_date = mysqli_real_escape_string($link, $_REQUEST['payment_date']);
$total_amount = mysqli_real_escape_string($link, $_REQUEST['total_amount']);
$paid_amount = mysqli_real_escape_string($link, $_REQUEST['paid_amount']);
$due_amount = mysqli_real_escape_string($link, $_REQUEST['due_amount']);

// attempt insert query execution
$sql = "INSERT INTO payment_info (invoice_no,m_id,payment_date,total_amount,paid_amount,due_amount) VALUES ('$invoice_no','$m_id','$payment_date','$total_amount','$paid_amount','$due_amount')";
if(mysqli_query($link, $sql)){
header('Refresh:2; url=home.php');
    echo "Successfully Saved.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
