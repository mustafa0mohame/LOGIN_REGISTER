<?php
$con = mysqli_connect("localhost","root","","users");
session_start();
if(isset($_POST['submit']))
    $uname= $_POST["name"];
    $passw =  $_POST["pass"];
    $result = mysqli_query($con, "select * from user where fname='$uname' and pass='$passw'");
    $f = mysqli_fetch_array($result);
    $name = $f["fname"];
    $pass = $f["pass"];

    if($name==$uname && $pass==$passw){
        $_SESSION['uname']=$uname;
        $_SESSION['pass']=$pass;
        // header("location:https://sites.google.com/site/eackenana/الرئيسية");
        header("location:main.php");
    }else{
        echo "<script>alert('username or pass incorrect')</script>";
        //echo "<script><a href=login.php></a></script>";
       
}

?>