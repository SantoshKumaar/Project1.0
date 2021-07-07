<?php
    require("connection.php");
    require("credentials.php");
    session_start();
   
    

    if(isset($_SESSION['username']))
    {
        header("location: logout.php");
    }
    if(isset($_POST['logout']))
    {
        
        header("location: logout.php");
    }
    if(isset($_POST['signupButton']))
    {
      $username=$_POST['username'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $query="insert into `customers`(username,password,email) values (\"$username\",\"$password\",\"$email\") ;";
      $res=mysqli_query($connectionObj,$query);
      
      if($res)
      {
          echo "<script>alert('Member Details Updated!');</script>";

      }
      else{
        echo "<script>alert('error');</script>";
      }
      echo "<script>window.location.href = \"login.php\";</script>";
                            

    }
   
?>

<html>
<head>
    <title>Signup</title>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="signup.css">
</head>
 
<body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Login form creation starts-->
  <section class="container-fluid">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-4">
        <form method="post" class="form-container">
            
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Sign Up </h4>
          <label for="InputEmail1">Email Address</label>
           <input type="email" class="form-control" id="InputEmail1" name="email" aria-describeby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="InputUsername">Username</label>
          <input type="Username" name="username" class="form-control" id="InputUsername" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
        </div>
        <div id="submit">
        <button type="submit" name="signupButton" class="btn"><a href="login1.php">Submit</button>
</div>
        </form>
      </section>
    </section>
  </section>
<!-- Login form creation ends -->
</body>
</html>