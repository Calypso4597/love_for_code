<html>
<head>
<title> Resume </title>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

article {
    margin-left: 170px;
    border-left: 1px solid white;
    padding: 1em;
    overflow: hidden;
}
input[type=submit]{
    color:white;
    background-color: black;
}
</style>

</head>
<body bgcolor="#FDDEDE">
<header> 
<h1>Resume</h1> 
</header>
<article>
<h2>This is the resume that the employer will see, make sure it is up to date.<br>
You can add or edit details below.</h2><br><br>
<form method="post" action="resume.php">
<fieldset>
<legend> Resume</legend>
Name<input type="text" name="f_name"><br>
Phone<input type="text" name="phone"><br>
Email ID<input type="text" name="email"><br><br>
<h2>Education</h2>
<textarea rows="10" cols="60" name="education"></textarea>
<br>
<h2>Jobs</h2>
<textarea rows="10" cols="60" name="jobs"></textarea>
<br>
<h2>Internships</h2>
<textarea rows="10" cols="60" name="internships"></textarea>
<br>
<h2>Projects</h2>
<textarea rows="10" cols="60" name="projects"></textarea>
<br>
<h2> Skills </h2>
<textarea rows="10" cols="60" name="skills"></textarea>
<br>
</fieldset>
<input type="submit" name="submit" value="PROCEED TO APPLICATION">
</form>
</article>

<?php
require 'db_connection.php';
if (isset($_POST['submit'])) {
        newUser($connection);
    }
    
    function newUser($connection) {
    
        $f_name = $_POST['f_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $edu = $_POST['education'];
        $jobs = $_POST['jobs'];
        $intern = $_POST['internships'];
        $proj = $_POST['projects'];
        $skills = $_POST['skills'];

        $query = "INSERT INTO `resume` (`f_name`,`email`,`phone`,`education`,`jobs`,`internships`,`projects`,`skills`) VALUES ('$f_name','$email','$phone','$edu','$jobs','$intern','$proj','$skills')";
        $result = mysqli_query($connection, $query);

        if ($result === TRUE) {
            echo "<script>alert('Your resume has been taken into account!');</script>";
            session_start();
            $_SESSION["lid"] = 1;
            echo "<script>window.location = 'Assesstment.php';</script>";
        }
    }
    ?>

</body>
</html>