<?php
$con = mysqli_connect("localhost","root","","users");
session_start();

if(isset($_POST['submit']))
    $fname= $_POST["fname"];
    $lname =  $_POST["lname"];
    $email= $_POST["email"];
    $pass =  $_POST["pass"];
    // $cpass =  $_POST["cpass"];
    // $result = mysqli_query($con, "select * from user where name='$uname' and pass='$passw'");
    $sql = "INSERT INTO user(fname,lname,email,pass) VALUES ('$fname','$lname','$email','$pass');";
    // mysqli_query($con,$sql);
    if (mysqli_query($con, $sql)) {
        header("location:login.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }

?>