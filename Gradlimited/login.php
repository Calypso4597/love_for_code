<!DOCTYPE html>
<html>

<head><title>Login Page</title>

<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="loginpagecss.css" />
<script src="loginjavascript.js"></script> 
</head>

<body>
<div id="header">
<ul>
<div></div>
<li><a href="index.php">Home</a></li>
<li><a href="meet.php">Meet The Team</a></li>
</ul>
</div>

  <div id="loginform">
  <form name="login" action="login.php" method="post"id="form1">
  <i><b>Log In:</b></i><br >
  <input type="text" placeholder="Username" oninput="loginSubmit()" name="username1" required /><span id="usernameerror" style="color: red;"></span><br>
  <input type="password" placeholder="Password" oninput="loginSubmit()" name="password1" required /><span id="passworderror" style="color: red;"></span><br>
  <input type="submit" name="submit" value="GO" />
  <br><input type="button" onclick="myFunction()" value="Don't have an account." /></a>
  </form>
  </div> 
  
  <div id="signinform">
  <form name="signin" action="login.php" method="post" id="form2">
  <i><b>Sign Up:</b></i><br >
  <input type="text" placeholder="Username" name="username2">
  <input type="text" placeholder="First Name" name="f_name" required /><br>
  <input type="text" placeholder="Last Name" name="l_name" required /><br>
  <input type="text" placeholder="Email Address" name="email" required /><br>
  <input type="password" placeholder="Password" name="password2" required /><br>
  <input type="password" placeholder="Confirm Password" name="cpassword2" onClick="signinSubmit()" required /><br> 
  <input type="Submit" value="Submit" name="Submit"  /><br>
  <input type="button" value="Already have an account?" onclick="myFunction()" />
  </form>
  </div>
</body>
</html>

<?php
  
  //login
  require 'db_connection.php';
  if (isset($_POST['submit'])) {
      $query = "SELECT * FROM users WHERE username LIKE '".$_POST['username1']."'";
      $res = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
        if($row["username"] == $_POST["username1"] && $row["password"] == $_POST["password1"]){
          echo "<script>alert('Login Successful !');</script>";
          session_start();
          $_SESSION["lid"] = $row["u_id"];
          echo "<script>window.location = 'aptitude.html';</script>";
        }
  }

  //signup
    if (isset($_POST['Submit'])) {
        newUser($connection);
    }
    
    function newUser($connection) {
        $username = $_POST['username2'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password2'];

        $query = "INSERT INTO `users` (`username`,`f_name`,`l_name`,`password`,`email`) VALUES ('$username','$f_name','$l_name','$password','$email')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "<script>alert('Successfully Signed Up !');</script>";
            session_start();
            $_SESSION["lid"] = 1;
            echo "<script>window.location = 'aptitude.html';</script>";

        }
        else {
            redirect_to("oomctt.txt");
        }
    }

?>