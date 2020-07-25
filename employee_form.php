
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Employee Form</title>
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
input[type=number], select {
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
</head>
<body>
  <h1>Employee Information Form</h1>
  <div>
  <form action="insert_employee_info.php" method="post">
        <label for="employee_id">ID:</label>
        <input type="text" name="employee_id" id="employee_id">

        <label for="employee_name">Name:</label>
        <input type="text" name="employee_name" id="employee_name">

        <label for="employee_address">Address:</label>
        <input type="text" name="employee_address" id="employee_address">

        <label for="employee_phone">Phone No:</label>
        <input type="text" name="employee_phone" id="employee_phone">

        <label for="employee_gender">Gender:</label>
        <input type="text" name="employee_gender" id="employee_gender">

        <label for="employee_position">Designation:</label>
        <input type="text" name="employee_position" id="employee_position">

        <label for="employee_join_date">Join Date:</label>
        <input type="date" name="employee_join_date" id="employee_join_date">

        <label for="employee_salary">Salary:</label>
        <input type="number" name="employee_salary" id="employee_salary">
    <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
