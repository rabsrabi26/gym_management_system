<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gym_management_system");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$locker_no = mysqli_real_escape_string($link, $_REQUEST['locker_no']);
$m_id = mysqli_real_escape_string($link, $_REQUEST['m_id']);
$m_issue_date = mysqli_real_escape_string($link, $_REQUEST['m_issue_date']);
$locker_validity = mysqli_real_escape_string($link, $_REQUEST['locker_validity']);

// attempt insert query execution
$sql = "INSERT INTO locker_info (locker_no,m_id,m_issue_date,locker_validity) VALUES ('$locker_no','$m_id','$m_issue_date','$locker_validity')";
if(mysqli_query($link, $sql)){
header('Refresh:2; url=home.php');
    echo "Successfully Saved.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
