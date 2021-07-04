<?php
$serverAdress="127.0.0.1";
$dbmsUsername="root";
$dbmsPassword="sk160478";
$dbmsName="bike";

$con=mysqli_connect($serverAdress,$dbmsUsername,$dbmsPassword,$dbmsName);
if(mysqli_connect_error())
{
    echo "\n connection error";
}
      
      if(isset($_POST['Signup']))
      {
        $username=$_POST['user_name'];   
        $email=$_POST['user_email'];   
        $password=$_POST['user_pass'];
        $query="insert into `customer_login` values(\"$email\",\"$username\",\"$password\");";
        $res=mysqli_query($con,$query);
                
                
                if($res)
                {
                    header("location: login.php");
                }
                else{
                    echo "<script>alert('Error!');</script>";
                }
      } 
?>
<!DOCTYPE html>
<html> <head>
    <title>
         Home Page
    </title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0, maxium-scale=1.0">
    <link href="customer.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="wrapper">
        <header>
          <div class="flex">
            <div class="logo">
              <a href="#">The Motorrad <span> Company</span></a>
            </div>
            <nav>
              <button id="nav-toggle" class="hamburger-menu">
                <span class="strip"></span>
                <span class="strip"></span>
                <span class="strip"></span>
              </button>
              <ul id="nav-menu-container">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Bookings</a></li>
                <li><a href="#">Contact</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Sign In </button>
                    <div class="dropdown-content">
                      <a href="#">Customer</a>
                      <a href="#">Admin</a>
                  
                    </div>
                  </div>
              </ul>
            </nav>
          </div>
        </div>
        </header>
        <div class="form-wrap">
            <div class="tabs">
                <h3 class="signup-tab"><a class="active" href="#sign-up">Sign Up</a></h3>
                <h3 class="login-tab"><a href="login.php">Login</a></h3>
            </div><!--.tabs-->
    
            <div class="tabs-content">
                <div id="signup-tab-content" class="active">
                    <form class="signup-form"  method="post">
                        <input type="email" class="input" id="user_email" autocomplete="off" placeholder="Email" name="user_email">
                        <input type="text" class="input" id="user_name" autocomplete="off" placeholder="Username" name="user_name">
                        <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password"  name="user_pass">
                        <input type="submit" class="button" name="Signup" >
                    </form><!--.login-form-->
                    <div class="help-text">
                        <p>By signing up, you agree to our</p>
                        <p><a href="#">Terms of service</a></p>
                    </div><!--.help-text-->
                </div><!--.signup-tab-content-->
    
                <div id="login-tab-content">
                    <form class="login-form" action="" method="post">
                        <input type="text" class="input" id="user_login" autocomplete="off" placeholder="Email or Username">
                        <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                        <input type="checkbox" class="checkbox" id="remember_me">
                        <label for="remember_me">Remember me</label>
    
                        <input type="submit" class="button" value="Login">
                    </form><!--.login-form-->
                    <div class="help-text">
                        <p><a href="#">Forget your password?</a></p>
                    </div><!--.help-text-->
                </div><!--.login-tab-content-->
            </div><!--.tabs-content-->
        </div><!--.form-wrap-->
        
</body>  
<script>
    jQuery(document).ready(function($) {
	tab = $('.tabs h3 a');

	tab.on('click', function(event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');

		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
});
</script> 
</html>