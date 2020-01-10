<?php
require "config.php";
$nm=($_POST['uname']);
$pwd=md5($_POST['passwd']);
$rpwd=md5($_POST['rpasswd']);
$em=($_POST['email']);
$mob=($_POST['mobile']);
$r1=($_POST['r1']);
$date=($_POST['date']);



mysqli_query($conn,"INSERT INTO register (name,password,rpassword,email,mobile,gender,dob)VALUES('$nm','$pwd','$rpwd','$em','$mob','$r1','$date')");

echo "user registered successfully";

?>
<br>
<a href="index.html">Home</a>