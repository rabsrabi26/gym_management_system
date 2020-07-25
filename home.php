<!DOCTYPE html>
<html>
<head>
<title>Gym Management System</title>
<style>
.flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

header {background: grey;color:white;}
footer {background: grey;color:white;}
body {margin:0;}

img {
    max-width: 100%;
    height: auto;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 17px;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: grey;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<div class="flex-container">
<header>
  <h1>Gym Management System</h1>
</header>
<div class="navbar">
  <a href="home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Member
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="member_form.php">Membership Entry Form</a>
      <a href="member_info.php">Show Members Information</a>
      <a href="update_member_form.php">Update Member Information</a>
      <a href="delete_member_form.php">Delete Member Information</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Package
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="package_form.php">Package Entry Form</a>
      <a href="package_info.php">Show Package Information</a>
      <a href="update_package_form.php">Update Package Information</a>
      <a href="delete_package_form.php">Delete Package Information</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Locker
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="locker_form.php">Issue Locker</a>
      <a href="locker_info.php">Show Locker Information</a>
      <a href="update_locker_form.php">Update Locker Information</a>
      <a href="delete_locker_form.php">Delete Locker Information</a>
    </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn">Equipment
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="equipment_form.php">Equipment Enrty Form</a>
    <a href="equipment_info.php">Show Equipment List</a>
    <a href="update_equipment_form.php">Update Equipment Information</a>
    <a href="delete_equipment_form.php">Delete Equipment Information</a>
  </div>
</div>
  <div class="dropdown">
    <button class="dropbtn">Instructor
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="instructor_form.php">Assign Instructor</a>
      <a href="instructor_info.php">Show Instructor's Member List</a>
      <a href="update_instructor_form.php">Update Instructor Information</a>
      <a href="delete_instructor_form.php">Delete Instructor Information</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Employee
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="employee_form.php">Employee Entry Form</a>
      <a href="employee_info.php">Show Employee Information</a>
      <a href="update_employee_form.php">Update Employee Information</a>
      <a href="delete_employee_form.php">Delete Employee Information</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Payment
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="payment_form.php">Payment Entry Form</a>
      <a href="payment_info.php">Show Payment Information</a>
      <a href="update_payment_form.php">Update Payment Information</a>
      <a href="delete_payment_form.php">Delete Payment Information</a>
    </div>
  </div>
  <div class="navbar">
    <a href="logout.php">Logout</a>
    </button>
  </div>
</div>
<img src="gym-wallpaper.jpg">
<footer>Copyright &copy; Decypher</footer>
</div>

</body>
</html>
