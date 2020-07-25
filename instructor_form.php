<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Instructor Form</title>
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
  <h1>Instructor Assigning Form</h1>
  <div>
  <form action="insert_instructor_info.php" method="post">
        <label for="m_id">Member ID:</label>
        <input type="text" name="m_id" id="m_id">

        <label for="e_id">Instructor ID:</label>
        <input type="text" name="e_id" id="e_id">

    <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
