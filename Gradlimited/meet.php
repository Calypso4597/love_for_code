<?php
    session_start();
    if (isset($_GET["logout"]) && $_GET["logout"] == 1) {
        session_destroy();
        header("Location: login.php");
    }
?>
<html>
<head>
<title> Meet The Team </title>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<link rel="stylesheet" type="text/css" href="meet.css">
</head>
<body>
<div id="header">
<ul>
<li><a href="index.php">Home</a></li>
<?=(isset($_SESSION["lid"])) ? '<li style="float:right;"><a href="index.php?logout=1">Logout</a></li>' : '<li style="float:right;"><a href="login.php">Login</a></li>'?>
</ul>
</div>
<br><br><br><br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="sanmid.jpeg" alt="Sanmid" style="width:95%">
      <div class="container">
        <h2>Sanmid Anavkar</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>"Ideas are easy. Implementation is hard..."</p>
        <p>sanmid@gmail.com</p>
        <p><a href="queries.php"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="varun.jpeg" alt="Varun" style="width:95%">
      <div class="container">
        <h2>Varun Bhavnani</h2>
        <p class="title">Co Founder &amp; Marketing Head</p>
        <p>"It's hard to beat a person who never gives up...."</p>
        <p>varun@gmail.com</p>
        <p><a href="queries.php"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  <div id="footer">
            Copyright @ 2017 Gradlimited. All Rights Reserved.
        </div>
</body>
</html>