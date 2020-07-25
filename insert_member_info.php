<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gym_management_system");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$member_id = mysqli_real_escape_string($link, $_REQUEST['member_id']);
$member_name = mysqli_real_escape_string($link, $_REQUEST['member_name']);
$member_address = mysqli_real_escape_string($link, $_REQUEST['member_address']);
$member_phone = mysqli_real_escape_string($link, $_REQUEST['member_phone']);
$member_gender = mysqli_real_escape_string($link, $_REQUEST['member_gender']);
$member_weight = mysqli_real_escape_string($link, $_REQUEST['member_weight']);
$member_height = mysqli_real_escape_string($link, $_REQUEST['member_height']);
$member_join_date = mysqli_real_escape_string($link, $_REQUEST['member_join_date']);
$package_id = mysqli_real_escape_string($link, $_REQUEST['package_id']);

// attempt insert query execution
$sql = "INSERT INTO member_info (member_id,member_name,member_address,member_phone,member_gender,member_weight,member_height,member_join_date,package_id) VALUES ('$member_id','$member_name','$member_address','$member_phone','$member_gender','$member_weight','$member_height','$member_join_date','$package_id')";
if(mysqli_query($link, $sql)){
header('Refresh:2; url=home.php');
    echo "Registration is successful.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
