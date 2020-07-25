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
$equipment_no=$_POST['equipment_no'];
// sql to delete a record
$sql = "DELETE FROM equipment_info WHERE equipment_no='$equipment_no'";

if ($conn->query($sql) === TRUE) {
header('Refresh:2; url=equipment_info.php');
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
