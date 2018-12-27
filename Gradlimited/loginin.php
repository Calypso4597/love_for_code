<?php

$conn = mysqli_connect('localhost','root','','miniproject');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstname=$_POST['name'];
$passwordch=$_POST['password1'];

$sql ="Select * FROM signin where email='$firstname' and password='$passwordch'";

$result=mysqli_query($conn,$sql);


$count=mysqli_num_rows($result);

if ($count==1) {
    header('location:index.html');
} else {
    echo ('Username or Password incorrect');
}
ob_end_flush();
?>