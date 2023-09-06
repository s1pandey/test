<?php
session_start();
include("include/dbConfig.php");


if (isset($_POST['submit'])) {
    $username = ucwords($_POST['username']);
    echo "<script>console.log($username);</script>";
    $query = "SELECT * FROM admin WHERE username='$username'  ";
    $querycon = mysqli_query($con, $query);
    if (mysqli_num_rows($querycon) == 1) {

        echo "<script>alert('Username already taken.')</script>";
    } else {

        $sql = "INSERT INTO admin (name, mobileno, email, username, password) VALUES
        ('$_POST[fullname]','$_POST[mobileno]','$_POST[email]','$_POST[username]','$_POST[password]')";
        if ($qsql = mysqli_query($con, $sql)) {
            echo "<script>alert('Successfully registered.');
            window.location.href='viewadmin.php';
            </script>";
        } else {
            echo mysqli_error($con);
        }
    }
}

?>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../css/aa.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://kit.fontawesome.com/106e7d0f93.js" crossorigin="anonymous"></script>
	<style>
   
		.dropdown-btn {
      font-size: 18px;
      font-family: arial, serif;
      color: gainsboro;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      outline: none;
    }

    .dropdown-btn:hover {
      color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
      display: none;
      background-color: none;

    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
      float: right;
      padding-right: 8px;}

      A {
      text-decoration: none;
      color: gainsboro;
    }

      a:hover {
      color: white;
    }

    select {
      width: 100%;
    }

    select:focus {
      min-width: 100%;
      width: auto;
    }

    input[type=submit] {
      background-color: coraflowerblue;
      border-radius: 5px;
    }

    input[type=submit]:hover {
      background-color: lightsteelblue;
    }
	</style>
	<style>
.dropbtn {
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      outline: none;
}


.dropdown {
  float: right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 175px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>

<body>
	<div class="container">
		
		<div class="header">

			<div class="head" align="right"><font size="6" face="forte" color="papayawhip">Rental System</font></div>
			<div class="profile" align="center">
				<div class="nothing"></div>
				<div class="pp" align="center">
					<div class="dropdown">
  						<button onclick="myFunction()" class="dropbtn"><img src="../images/Profile-PNG-Clipart.png" height="38" width="38" align="center">&#8196;&#8196;&#8196;&#8196;</button>
  						<div id="myDropdown" class="dropdown-content" align="left">
                <a href="profile.php"><i class='fas fa-user-circle'></i>&#8196;&#8196;My Profile</a>
    						<a href="changepassword.php"><i class="fa-solid fa-key"></i>&#8196;&#8196;Change Password</a>
                <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>&#8196;&#8196;Log Out</a>
  						</div>
					</div>
              	</div>
            </div>

		</div>

		<div class="body">

			<div class="nav">
				<h1 align="left">
          			&#8196;&#8196;&#8196;<u><a href="admin.php"><font size="5" face="arial" color="gainsboro">Admin Dashboard</a></u></font>
        		</h1>
        		<table align="center">
          <tr>
            <td></td>
          </tr>
          <tr>
            <th style="position: fixed;"><i class="fa fa-th-large" style="font-size:140%;color:gainsboro;"></i></th>
            <th>
              <button class="dropdown-btn"><b>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Categories</b><i class="fa fa-caret-down"></i></button>
              <div class="dropdown-container">
                <table align="left" style="font-family: calibri, serif">
                  <font size="4" face="calibri" color="gainsboro" style="height: 10px;">
                    <tr>
                      <th align="left"><a href="addcategory.php">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Post Category</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="managecat.php">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Manage Categories</a></th>
                    </tr>
                  </font>
                </table>
              </div>
            </th>
          </tr> 
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th style="position: fixed;"><i class="fa fa-th" style="font-size:140%;color:gainsboro"></i></th>
            <th>
              <button class="dropdown-btn"><b>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Sub-Categories</b><i class="fa fa-caret-down"></i></button>
              <div class="dropdown-container">
                <table align="left" style="font-family: calibri, serif">
                  <font size="4" face="calibri" color="gainsboro" style="height: 10px;">
                    <tr>
                      <th align="left"><a href="postsub.php">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Post Sub-category</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="managesub.php">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Manage Sub-categories</a></th>
                    </tr>
                  </font>
                </table>
              </div>
            </th>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th style="position: fixed;"><i class="fa fa-users" aria-hidden="true" style="font-size: 140%; color: gainsboro;"></i></th>
            <th>
              <button class="dropdown-btn"><b>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Registered Users&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</b><i class="fa fa-caret-down"></i></button>
              <div class="dropdown-container">
                <table align="left" style="font-family: calibri, serif">
                  <font size="4" face="calibri" color="gainsboro" style="height: 10px;">
                    <tr>
                      <th align="left"><a href="viewadmin.php">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Admins</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="viewrenter.php">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Renters</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="viewcustomer.php">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Customers</a></th>
                    </tr>
                  </font>
                </table>
              </div>

        </table>
			</div>

			<div class="side">

        <div class="admintop">
          <br>
          <h2 align="center" style="color: black">Add Admin</h2><br>
          <form method="post" name="form" onSubmit="return valid();">
          <table class="order-table" width="41.4%" align="center" border="4" style="font-size: 18px; border-radius: 3px;" cellpadding="7">
            <tbody id="y">
              <tr>
                <td width="30%" id="x">Admin Name:</td>
                <td><input type="text" name="fullname" placeholder="Full Name" required="required" style="font-size: 17px;" size="31%"/></td>
              </tr>
              <tr>
                <td id="x">Mobile No.:</td>
                <td><input type="text" name="mobileno" placeholder="Mobile Number" maxlength="10" required="required" style="font-size: 17px;" size="31%"></td>
              </tr>
              <tr>
                <td id="x">Email:</td>
                <td><input type="email" name="email" id="emailid" placeholder="for eg sp@gmail.com" required="required" style="font-size: 17px;" size="31%"></td>
              </tr>
              <tr>
                <td id="x">Username:</td>
                <td><input type="text" name="username" id="username" onBlur="checkAvailability(this.value)" placeholder="Username" required="required" style="font-size: 17px;" size="31%"></td>
              </tr>
              <tr>
                <td id="x">Password:</td>
                <td><input type="password" name="password" placeholder="Password" required="" style="font-size: 17px;" size="31%"></td>
              </tr>
              <tr>
                <td id="x">Confirm Password:</td>
                <td><input type="password" name="confirmpassword" placeholder="Confirm Password" required="" style="font-size: 17px;" size="31%"></td>
              </tr>
              <tr style="background-color: azure;">
                <td colspan="2" style="text-align: center;"> <input type="submit" value="ADD" name="submit" id="submit" class="btn btn-block" style="font-size: 17px;"></td>
              </tr>
            </tbody>
          </table>
        </div>
				
			</div>

			<div class="footer">
				<div class="fl" align="right"><font size="1" color="black" face="lucida bright"><br><b>Copyright @ 2021 All Reserved</b></font></div>
				<div class="fr" align="center"><font size="1" color="black" face="lucida bright"><br><b>Developed by: www.sss.com</b></font></div>
			</div>
			
		</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
    var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
    var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
    var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
    var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID
    function valid() {
        if (document.form.fullname.value == "") {
            alert("Admin name should not be empty..");
            document.form.name.focus();
            return false;
        } else if (!document.form.fullname.value.match(alphaspaceExp)) {
            alert("Admin name not valid..");
            document.form.name.focus();
            return false;
        } else if (document.form.username.value == "") {
            alert("Username should not be empty...");
            document.form.address.focus();
            return false;
        } else if (document.form.mobileno.value == "" || document.form.mobileno.value.length != 10) {
            alert("Mobile number is not valid.");
            document.form.mobileno.focus();
            return false;
        } else if (!document.form.mobileno.value.match(numericExpression)) {
            alert("Mobile number not valid..");
            document.form.mobileno.focus();
            return false;
        } else if (!document.form.username.value.match(alphanumericExp)) {
            alert("Username not valid..");
            document.form.username.focus();
            return false;
        } else if (document.form.password.value == "") {
            alert("Password should not be empty..");
            document.form.password.focus();
            return false;
        } else if (document.form.password.value.length < 8) {
            alert("Password length should be more than 8 characters...");
            document.form.password.focus();
            return false;
        } else if (document.form.password.value != document.form.confirmpassword.value) {
            alert("Password and confirm password should be equal..");
            document.form.confirmpassword.focus();
            return false;
        } else {
            return true;
        }
    }
</script>

	<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('img')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>