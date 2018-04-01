<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
	$error_message = " All Fields are required";
	}
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}

	if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO registered_users (user_name, first_name, last_name, password, email, gender) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}
?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>MEDICINE DONATION PORTAL</title>
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
 <link rel="stylesheet" type="text/css" href="signupphp.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
 div.back1
{
background-image:url("login.jpg");

height:130%;
width:100%;
background-attachment:fixed;

}
body{
	width:100%;
	font-family:calibri;
	overflow-y:hidden;
	
}
.error-message {
	padding: 7px 10px;
	
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
	margin-left:250px;
margin-right:300px;
}
.success-message {
	padding: 7px 10px;
	
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demotable {
	
	width: 50%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	
	border-radius: 4px;
	padding: 20px 40px;
	
	margin-left:250px;
	overflow-y:hidden;
}
.demotable td {
	padding: 15px 0px;
	
	
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
div.main{
	
}
h1
{
hieght:200px;
widht:50px;
padding: 10px;
	border-radius: 4px;
	border-width: 0px;
background-color:#91A8D0;
margin-left:250px;
margin-right:300px;

font-family:"serif"

}
div.ac{
	margin-bottom:10px;
}
</style>
</head>
<body>
<div class="back1">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
<ul class="nav navbar-nav">
<li class="home"><a href="medicinedonation_index.html">HOME</a></li>
<li class="pannelmedical"> <a  data-toggle="dropdown" href="#">MEDICAL</a>
<ul class="dropdown-menu">
<li><a href="medicalpage.html">MEDICAL HELP </a></li>
<li><a href="healthtipspage.html">HEALTH TIPS </a></li>
<li><a href="donationpage.html">DONATION STORIES</a></li>
</ul>
</li>
<li class="pannelmedicine"> <a href="donatepage.html">₹DONATE!</a></li>
<li class="pannelabout"> <a  href="aboutuspage.html">ABOUT US</a></li>
<li class="pannelmore"> <a data-toggle="dropdown" href="#">MORE</a>
<ul class="dropdown-menu">
<li><a href="aboutdonateus.html">DONATE US</a></li>
<li><a href="aboutdeveloper.html">DEVELOPER</a></li>
<li><a href="#">FOLLOW US</a></li>
</ul>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="signup.html"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>
<li class="pannellogin"><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"> Login&nbsp;</span></a></li>
</ul>
</nav><span "padding-top: 10px;">

<div class="main">

    <div class="active1">
      <h1 class="loginname"><b>Sign Up</b>  </h1><br>
     <form name="frmRegistration" method="post" action="">
<table border="0" width="400" align="center" class="demotable">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td><b>User Name</b></td>
<td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr>
<td><b>First Name</b></td>
<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td><b>Last Name</b></td>
<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>
<tr>
<td><b>Password</b></td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td><b>Confirm Password</b></td>
<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
</tr>
<tr>
<td><b>Email</b></td>
<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td><b>Gender</b></td>
<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> <b>I accept Terms and Conditions </b><input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
   </div>
   
   </div>
    
    <div class=ac>
	</div>

	<footer class="footer">
<div class="follow"><h4><b>Follow us on:</b></h4></div> <br>
<div class="container text-center">
        <a href="#"><i class="fa fa-facebook-square"style="font-size:24px;color:#3b5998" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter-square"style="font-size:24px;color: #0084b4"></i></a>
        <a href="#"><i class="fa fa-linkedin-square"style="font-size:24px;color: ##0077B5"></i></a>
        <a href="#"><i class="fa fa-google-plus-square"style="font-size:24px;color: #db4a39"></i></a>
</div>
</footer>
</div>
</body>
</html>

