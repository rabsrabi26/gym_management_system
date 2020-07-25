<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gym_management_system");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$employee_id = mysqli_real_escape_string($link, $_REQUEST['employee_id']);
$employee_name = mysqli_real_escape_string($link, $_REQUEST['employee_name']);
$employee_address = mysqli_real_escape_string($link, $_REQUEST['employee_address']);
$employee_phone = mysqli_real_escape_string($link, $_REQUEST['employee_phone']);
$employee_gender = mysqli_real_escape_string($link, $_REQUEST['employee_gender']);
$employee_position = mysqli_real_escape_string($link, $_REQUEST['employee_position']);
$employee_join_date = mysqli_real_escape_string($link, $_REQUEST['employee_join_date']);
$employee_salary = mysqli_real_escape_string($link, $_REQUEST['employee_salary']);

// attempt insert query execution
$sql = "INSERT INTO employee_info (employee_id,employee_name,employee_address,employee_phone,employee_gender,employee_join_date) VALUES ('$employee_id','$employee_name','$employee_address','$employee_phone','$employee_gender','$employee_join_date')";
if(mysqli_query($link, $sql)){
header('Refresh:2; url=home.php');
    echo "Successfully Saved.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
