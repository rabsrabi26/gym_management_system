<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Member Update Form</title>
</head>
<style>
h1 {
    text-align: center;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
  <h1>Update Member Information</h1>
  <div>
  <form action="update_member.php" method="post">
        <label for="member_id">ID:</label>
        <input type="text" name="member_id" id="member_id">

        <label for="member_name">Name:</label>
        <input type="text" name="member_name" id="member_name">

        <label for="member_address">Address:</label>
        <input type="text" name="member_address" id="member_address">

        <label for="member_phone">Phone No:</label>
        <input type="text" name="member_phone" id="member_phone">

        <label for="member_gender">Gender:</label>
        <input type="text" name="member_gender" id="member_gender">

        <label for="member_weight">Weight:</label>
        <input type="text" name="member_weight" id="member_weight">

        <label for="member_height">Height:</label>
        <input type="text" name="member_height" id="member_height">

        <label for="member_join_date">Join Date:</label>
        <input type="date" name="member_join_date" id="member_join_date">
    <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
