<?php
    session_start();
    if (isset($_GET["logout"]) && $_GET["logout"] == 1) {
        session_destroy();
        header("Location: login.php");
    }
?>
<DOCTYPE HTML>
<html lang="en-US">
<head><title>Feedback & Queries</title>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<link rel="stylesheet" type="text/css" href="queries.css">

</head>
<body >

<div id="header">

<ul class="top">
<div id="flag"></div>
<li><a href="index.php" id="navbar">Home</a></li>
<?=(isset($_SESSION["lid"])) ? '<li style="float:right;"><a id="nb" href="index.php?logout=1">Logout</a></li>' : '<li style="float:right;"><a id="nb" href="login.php">Login</a></li>'?>
</ul>
</div>
<br><br><br><br>
<h3>We Care About Your Happiness!</h3>
<br>
<p>They don't call us Happiness Engineers for nothing. If you need help, don't sweat it.<br>We're here for you!<br>Your Feedback is valuable & we are here to answer your Queries.</p>
<br><br>
<div id="feedbackform">
<form name="feedback" method="post" action="queries.php" id="form1">
  <input type="text" placeholder="First Name" name="fname" required /><br>
  <input type="text" placeholder="Last Name" name="lname" required /><br>
  <input type="text" placeholder="Email Address" name="email" required /><br>
  <textarea form="form1" name="f/q" rows="10" maxlength="120" placeholder="Feedback/Queries" required/></textarea>
  <br>
  <input type="submit" name="submit" value="submit"/>
  </form>
  </div>
<?php
  require 'db_connection.php';
  if (isset($_POST['submit'])) {
        newUser($connection);
    }
    
    function newUser($conn) {
        $f_name = $_POST['fname'];
        $l_name = $_POST['lname'];
        $email = $_POST['email'];
        $queries = $_POST['f/q'];

        $query = "INSERT INTO `feedback` (`f_name`,`l_name`,`email`,`queries`) VALUES ('$f_name','$l_name','$email','$queries')";
        $result = mysqli_query($conn, $query);

        if ($result === TRUE) {
            echo "<script>alert('Your Query/Feedback has been noted!');</script>";
            echo "<script>window.location = 'meet.php';</script>";
        }
        else {
            //redirect_to("oomctt.txt");
        }
    }

?>
</body>
</html>