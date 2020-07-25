<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Package Form</title>
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
  <h1>Package Information Form</h1>
  <div>
  <form action="insert_package_info.php" method="post">
        <label for="package_id">Package No:</label>
        <input type="text" name="package_id" id="package_id">

        <label for="package_name">Package Name:</label>
        <input type="text" name="package_name" id="package_name">

        <label for="package_fee">Package Fee:</label>
        <input type="number" name="package_fee" id="package_fee">

        <label for="package_validity">Validity:</label>
        <input type="text" name="package_validity" id="package_validity">

    <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
