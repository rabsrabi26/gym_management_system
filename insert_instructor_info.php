<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gym_management_system");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$m_id = mysqli_real_escape_string($link, $_REQUEST['m_id']);
$e_id = mysqli_real_escape_string($link, $_REQUEST['e_id']);

// attempt insert query execution
$sql = "INSERT INTO instructor_info (m_id,e_id) VALUES ('$m_id','$e_id')";
if(mysqli_query($link, $sql)){
header('Refresh:2; url=home.php');
    echo "Successfully Saved.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
