<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gym_management_system");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$package_id = mysqli_real_escape_string($link, $_REQUEST['package_id']);
$package_name = mysqli_real_escape_string($link, $_REQUEST['package_name']);
$package_fee = mysqli_real_escape_string($link, $_REQUEST['package_fee']);
$package_validity = mysqli_real_escape_string($link, $_REQUEST['package_validity']);

// attempt insert query execution
$sql = "INSERT INTO package_info (package_id,package_name,package_fee,package_validity) VALUES ('$package_id','$package_name','$package_fee','$package_validity')";
if(mysqli_query($link, $sql)){
header('Refresh:2; url=home.php');
    echo "Successfully Saved.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
