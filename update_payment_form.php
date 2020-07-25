<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment Update Form</title>
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
  <h1>Update Payment Information</h1>
  <div>
  <form action="update_payment.php" method="post">
        <label for="invoice_no">Invoice No:</label>
        <input type="text" name="invoice_no" id="invoice_no">

        <label for="m_id">Member ID:</label>
        <input type="text" name="m_id" id="m_id">

        <label for="payment_date">Payment Date:</label>
        <input type="date" name="payment_date" id="payment_date">

        <label for="total_amount">Total Amount:</label>
        <input type="number" name="total_amount" id="total_amount">

        <label for="paid_amount">Paid Amount:</label>
        <input type="number" name="paid_amount" id="paid_amount">

        <label for="due_ammount">Due Amount:</label>
        <input type="number" name="due_amount" id="due_amount">

    <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
