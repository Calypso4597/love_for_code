<?php
    session_start();
    if (isset($_GET["logout"]) && $_GET["logout"] == 1) {
        session_destroy();
        header("Location: login.php");
    }
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head><title>Gradlimited</title>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<link rel="stylesheet" type="text/css" href="index.css"
</head>
<body>
<div class="firstheader">
<div id="navbar">
<img src="graduation.png" width="100%" height="50%">
<ul>
<li style="float:left;"><a id="nb" href="index.php">Home</a>
<?=(isset($_SESSION["lid"])) ? '<li style="float:right;"><a id="nb" href="index.php?logout=1">Logout</a></li>' : '<li style="float:right;"><a id="nb" href="login.php">Login</a></li>'?>
<?=(isset($_SESSION["lid"])) ? '<li style="float:right;"><a id="nb" href="aptitude.html">Find an Internship</a></li>' : ''?>
<li style="float:left;"><a id="nb" href="meet.php">Meet the team</a>
</ul>
<p><h3>EXPLORE.
<br>DREAM.
<br>DISCOVER.</h3></p>
<h6>Best suited for career decisions</h6>
<?=(isset($_SESSION["lid"])) ? '<a href="aptitude.html?logout=1"><button>Get started</button></a>' : '<a  href="login.php"><button>Get Started</button></a>'?>
</div>
</div>
<div class="row2_1">
<img src="personality.png" width="50%" height="450px">
<h4 id="r21">Personality Asessment</h3>
<p id="r211">Get access to your free career guidance<br> and digital footprint reports that can help you<br> identify your inherent personality.</p>

 <img src="resume.png" width="49%" height="450px">
<h4 id="r22">Resume Builder</h3>
<p id="r222">All the features you need and more.<br>Choose the most popular blogging themes<br>on the web for your online home.</p>

<img src="jobs.png" width="50%" height="450px">
<h4 id="r23">Jobs</h3>
<p id="r231">Our series of sophisticated matchmaking<br> algorithms help you make sure that<br> your first step in the world of work<br> is the right direction.</p>

 <img src="scholarship.png" width="49%" height="450px">
<h4 id="r24">Scholarship</h3>
<p id="r241">Fuel your academic growth and explore a world of limitless possibilities with access to scholarships best suited to your profile.</p>
<div id="footer">
            Copyright @ 2017 Gradlimited. All Rights Reserved.
        </div>
</body>