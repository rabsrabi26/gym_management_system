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
// sql to delete a record
$sql = "DELETE FROM locker_info WHERE locker_no='$locker_no'";

if ($conn->query($sql) === TRUE) {
header('Refresh:2; url=locker_info.php');
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
