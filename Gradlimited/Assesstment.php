<html>
<head>
<title> Assesstment questions</title>
<style type="text/css">
#header {
                padding: 1em;
                background-color: #000000;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 2.5em;
                color: antiquewhite;
            }
            </style>
</head>
<body bgcolor="#DEFDE6">
<div id="header">
	Assesstment Questions
</div>
<br>
<form method="post" action="Assesstment.php">
<fieldset>
<legend> Assesstment Questions*</legend>
<p>Why should you be hired for this internship?<br>
please answer this question carefully. It will increase your chances of getting hired.</p>
<textarea row="40" cols="60" name="hire"></textarea>
<br>
<p>Are you available for 4 months, starting immediately, for this internship ? If not,<br> 
what is the time period you are available for and the earliest date you can start this internship<br>
on? Please also mention if you are available full time or part time. If part time, specify the<br>
number of hours you can spend on this internship every day.<br>
<textarea row="40" cols="60" name="time"></textarea>
</fieldset>
<br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
  require 'db_connection.php';
    if (isset($_POST['submit'])) {
        newUser($connection);
    }
    
    function newUser($connection) {
        $hire = $_POST['hire'];
        $time = $_POST['time'];

        echo $query = "INSERT INTO `assesstment` (`hire`,`time`) VALUES ('$hire','$time')";
        $result = mysqli_query($connection, $query);

        if ($result === TRUE) {
            echo "<script>alert('We have taken your questions into account,You will recieve an email shortly!');</script>";
            echo "<script>window.location = 'index.php';</script>";
        }
    }
?>
</body>
</html>