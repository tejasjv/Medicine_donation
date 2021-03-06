<html>
<head>
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>MEDICINE DONATION PORTAL</title>
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<link rel="stylesheet" type="text/css" href="aboutdonateus.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
<li class="active"><a href="aboutdonateus.html">DONATE US</a></li>
<li><a href="aboutdeveloper.html">DEVELOPER</a></li>
<li><a href="#">FOLLOW US</a></li>
</ul>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="pannellogin"><a href="signup.php"><span class="glyphicon glyphicon-user"> Sign Up</span></a></li>
<li class="pannellogin"><a href="loginpage.html"><span class="glyphicon glyphicon-log-in"> Login&nbsp;</span></a></li>
</ul>
</nav><span "padding-top: 10px;">
<div class="back">

<div class="donation-container">
            
            <div class="donation-box">
	            <div class="title">Donation Information</div>
	            
	            <div class="fields">
		            <input type="text" id="firstName" placeholder="First Name"> </input>
		            <input type="text" id="lastName" placeholder="Last Name"> </input>
		            <input type="text" id="email" placeholder="Email"> </input>
	            </div>
	            
	            <div class="amount">
		            <div class="button">₹100</div>
		            <div class="button">₹500</div>
		            <div class="button">₹1000</div>
		            <div class="button">₹<input type="text" class="set-amount" placeholder=""> </input></div>
	            </div>
	            
	            <div class="switch">
					<input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
					<label for="one-time" class="switch-label switch-label-off">One-Time</label>
					<input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
					<label for="monthly" class="switch-label switch-label-on">Monthly</label>
					<span class="switch-selection"></span>
			    </div>
			    
			    <div class="checkboxes"><br>
					<input type="checkbox" id="receipt" class="checkbox" />
					<label for="receipt">Email Me A Receipt</label><br>
					<br />
					<input type="checkbox" id="anon" class="checkbox" />
					<label for="anon">Give Anonymously</label><br>
					<br />
					<input type="checkbox" id="list" class="checkbox" /><br>
					<label for="list">Add Me To Email List</label>
			    </div>
			    
			    <div class="confirm">
				    
			    </div>
	            
	            <div class="donate-button">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="akashatri97@gmail.com">
<input type="hidden" name="lc" value="BM">
<input type="hidden" name="item_name" value="wecandonate">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

				</div>
            </div>
            
        </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://raw.githubusercontent.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>
<footer class="footer">
<div class="follow"><h4><b>Follow us on:</b></h4></div> <br>

    <div class="container text-center">
        <a href="#"><i class="fa fa-facebook-square"style="font-size:24px;color:#3b5998" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter-square"style="font-size:24px;color: #0084b4"></i></a>
        <a href="#"><i class="fa fa-linkedin-square"style="font-size:24px;color: ##0077B5"></i></a>
        <a href="#"><i class="fa fa-google-plus-square"style="font-size:24px;color: #db4a39"></i></a>
        
    </div>
	
</footer>
</body>
</html>

