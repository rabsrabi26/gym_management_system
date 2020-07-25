<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Equipment Update Form</title>
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

input[type=number], select {
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
  <h1>Update Equipment Information</h1>
  <div>
  <form action="update_equipment.php" method="post">
        <label for="equipment_no">ID:</label>
        <input type="text" name="equipment_no" id="equipment_no">

        <label for="equipment_name">Name:</label>
        <input type="text" name="equipment_name" id="equipment_name">

        <label for="equipment_quantity">Quantity:</label>
        <input type="number" name="equipment_quantity" id="equipment_quantity">

    <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
