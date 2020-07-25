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
// sql to delete a record
$sql = "DELETE FROM member_info WHERE member_id='$member_id'";

if ($conn->query($sql) === TRUE) {
header('Refresh:2; url=member_info.php');
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
